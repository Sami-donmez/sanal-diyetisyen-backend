<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use GPBMetadata\Google\Api\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function index(){
        $data=Currency::all();
        return view('admin.admin.dashboard',['data'=>$data]);
    }

    public function detail($id){
        $data=Currency::find($id);
        return view('admin.admin.detay',['row'=>$data]);
    }

    public function update($id,Request $request){
        $request->validate([
            'factor'=>'required'
        ]);
        $data=Currency::find($id);
        $data->factor=$request->factor;
        $data->save();
        return redirect(url()->previous())->with('success','Katsayı güncellendi');
    }

    public function cron(){
        $response = Http::get('https://finans.truncgil.com/v3/today.json');
        $currencies=$response->json();
        $a=['Update_Date',''];
        foreach ($currencies as $key=>$currency){
            if ( !in_array($key,$a)) {
                $c = Currency::where('code', $key)->first();
                if ($c){
                    $c->buying=$currency['Buying'];
                    $c->selling=$currency['Selling'];
                    $c->change=str_replace('%','',$currency['Change']);
                    $c->save();

                }
            }
        }
    }
    public function logout(){
        \Illuminate\Support\Facades\Auth::logout();
        return redirect(route('login'));
    }

}
