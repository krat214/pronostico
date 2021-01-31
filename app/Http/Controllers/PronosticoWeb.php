<?php

namespace App\Http\Controllers;

use App\Models\Codescondition;
use Illuminate\Http\Request;
use App\Models\Consulta;
use Map;

use Curl;


class PronosticoWeb extends Controller
{
    

    public function SearchWeather(Request $Request)
    {
        $pronostico=$Request->pronostico;

    function buildBaseString($baseURI, $method, $params) {
        $r = array();
        ksort($params);
        foreach($params as $key => $value) {
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }
    
    function buildAuthorizationHeader($oauth) {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach($oauth as $key=>$value) {
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        }
        $r .= implode(', ', $values);
        return $r;
    }
                    

    $url =config('services.ywhater.base_uri');
    $app_id =config('services.ywhater.app_id');
    $consumer_key =config('services.ywhater.consumer_key');
    $consumer_secret =config('services.ywhater.consumer_secret');

            $query = array(
                'location' => $pronostico,
                'u'=>'c',
                'format' => 'json',
            );

            $oauth = array(
                'oauth_consumer_key' => $consumer_key,
                'oauth_nonce' => uniqid(mt_rand(1, 1000)),
                'oauth_signature_method' => 'HMAC-SHA1',
                'oauth_timestamp' => time(),
                'oauth_version' => '1.0'
            );

            $base_info = buildBaseString($url, 'GET', array_merge($query, $oauth));
            $composite_key = rawurlencode($consumer_secret) . '&';
            $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
            $oauth['oauth_signature'] = $oauth_signature;

            $header = array(
                buildAuthorizationHeader($oauth),
                'X-Yahoo-App-Id: ' . $app_id
            );
            $options = array(
                CURLOPT_HTTPHEADER => $header,
                CURLOPT_HEADER => false,
                CURLOPT_URL => $url . '?' . http_build_query($query),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false
            );

            $ch = curl_init();
            curl_setopt_array($ch, $options);
            $response = curl_exec($ch);
            curl_close($ch);

            
            if($pronostico == 'Miami'){

                $config['center'] = '25.782551, -80.221748';
                $config['zoom'] = 9;
                Map::initialize($config);
                
                $marker = array();
                $marker['position'] = '25.782551, -80.221748';
                Map::add_marker($marker);
                $data['map'] = Map::create_map();

            }
            elseif($pronostico == 'Orlando'){

                $config['center'] = '28.479321, -81.344292';
                $config['zoom'] = 9;
                Map::initialize($config);
                
                $marker = array();
                $marker['position'] = '28.479321, -81.344292';
                Map::add_marker($marker);
                $data['map'] = Map::create_map();
            }
            elseif($pronostico == 'New York'){

                $config['center'] = '40.71455, -74.007118';
                $config['zoom'] = 9;
                Map::initialize($config);
                
                $marker = array();
                $marker['position'] = '40.71455, -74.007118';
                Map::add_marker($marker);
                $data['map'] = Map::create_map();
            }
           
            $res = json_decode($response);
            

            $new_consulta= new Consulta;

            $new_consulta->ciudad=$res->location->city;
            $new_consulta->humedad=$res->current_observation->atmosphere->humidity;
            $new_consulta->temperatura=$res->current_observation->condition->temperature;
            $new_consulta->codigo=$res->current_observation->condition->code; 

            $new_consulta->save();
            
            
            $desc=Codescondition::all();
            //$mapas=json_decode($data);
            return view('pronostico',[
                
                'data'=>$res,
                'desc'=>$desc,
                'mapa'=>$data,

            ]);
            
                        

                }


}
