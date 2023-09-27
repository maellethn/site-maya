<?php 

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherApi {

    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this->client=$client;
        
    }
    public function getLocation(){
        $ip=$_SERVER['REMOTE_ADDR'];
        $info= json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip),true);
        return $info;
    }

    public function getWeather(){
        $infos= $this->getLocation();
        $lat=$infos['geoplugin_latitude'] ? $infos['geoplugin_latitude'] : 33.44;
        $long=$infos['geoplugin_longitude']? $infos['geoplugin_longitude'] :-94.04;
        $url="https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$long."&appid=1b52d3a5f92c7e6208c636d38081f1df";
        try {
            $response = $this->client->request(
                'GET',
               $url, [
                    'headers' =>[
                    'accept'=>'application/json']
                ]
            );
        } catch (\Throwable $th) {
           
        }
        return $response->toArray();
    
    }
}