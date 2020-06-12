<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherService;
use Respect\Validation\Validator as v;

class WeatherController extends AbstractController
{
    private $weatherService;

    public function __construct(WeatherService $weather)
    {
        $this->weatherService = $weather;
    }

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        if (!empty($_POST)) {
            $post = array_map('trim', array_map('strip_tags', $_POST));
        }//nettoie les $post contre les failles xss

        $city= "Toulouse";
        $results = $this->weatherService->getWeather($city);
        
        foreach ($results as $result) {
            $temp = $result['main']['temp'];
            $temp = ceil($temp - 273.15);

            $wind = $result['wind']['speed'];
            $wind = round($wind * 3.6,1);

            $path = "http://openweathermap.org/img/wn/" ;
            $path .= $result['weather']['0']['icon'];
            $path .= "@2x.png";

            $city = $result['name'];
            $city = preg_replace('/^Arrondissement de/', '', $city);
            
            $description = $result['weather']['0']['description'] ;
            $description = ucfirst($description);
            
            $deg = $result['wind']['deg'];
        }//fermeture foreach récupération des données

        return $this->render('weather/index.html.twig', array(
            'wind' => $wind ??null,
            'temp' => $temp ??null,
            'path' => $path ??null,
            'city' => $city ??null,
            'description' => $description ??null,
            'deg' => $deg ??null
        ));
    }//Fermeture index()
    
    /**
     * @Route("/{city}", name="show_weather")
     */
    public function showWeather($city)
    {   
        $requests = Request::createFromGlobals();
        $requests->server->get('HTTP_HOST');
        $path = $requests->getPathInfo(); // l'uri de ma request
        $city = substr($path, 1); 

        $results = $this->weatherService->getWeather($city);

        foreach ($results as $result) {
            $temp = $result['main']['temp'];
            

            $temp = ceil($temp - 273.15);

            $wind = $result['wind']['speed'];
            $wind = round($wind * 3.6,1);

            $path = "http://openweathermap.org/img/wn/" ;
            $path .= $result['weather']['0']['icon'];
            $path .= "@2x.png";

            $city = $result['name'];
            $city = preg_replace('/^Arrondissement de/', '', $city);
            $description = $result['weather']['0']['description'] ;
            $deg = $result['wind']['deg'];

            return $this->json( array(
                'wind' => $wind ??null,
                'temp' => $temp ??null,
                'path' => $path ??null,
                'city' => $city ??null,
                'description' => $description ??null,
                'deg' => $deg ??null
            ));
        }//fermeture foreach récupération des données

        return $this->json( array(
            'wind' => $wind ??null,
            'temp' => $temp ??null,
            'path' => $path ??null,
            'city' => $city ??null,
            'description' => $description ??null,
            'deg' => $deg ??null
        ));
    }//Fermeture showMeteo()
    
}//Fermeture de la Class
