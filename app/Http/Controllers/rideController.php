<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Ride;
use DB;
use GuzzleHttp;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;



class rideController extends Controller
{
    public function getGuzzleClient()
    {
        return new Client(['defaults' => ['verify' => false]]);
    }

    public function createRide(Request $request){
        \Log::alert($request);
        $ride = new Ride;
        $ride->from = Input::get('from');
        $from = Input::get('from');
        $ride->to = Input::get('to');
        $to = Input::get('to');
        if($from){
            $from = str_replace('#','',$from);
            $client = new GuzzleHttp\Client();
            $encodedAddressFrom = urlencode($from);
            $res = $client->get(env('GOOGLE_MAPS_URL')."&address=$encodedAddressFrom");
            $json = json_decode($res->getBody(), true);
            $ride->fromlat = array_get($json, 'results.0.geometry.location.lat');
            $ride->fromlong = array_get($json, 'results.0.geometry.location.lng');
        }
        if($to){
            $to = str_replace('#','',$to);
            $client = new GuzzleHttp\Client();
            $encodedAddressTo = urlencode($to);
            $res = $client->get(env('GOOGLE_MAPS_URL')."&address=$encodedAddressTo");
            $json = json_decode($res->getBody(), true);
            $ride->tolat = array_get($json, 'results.0.geometry.location.lat');
            $ride->tolong = array_get($json, 'results.0.geometry.location.lng');
        }
        $ride->save();
        return view('displayFares')->with('ride',$ride);
    }

}