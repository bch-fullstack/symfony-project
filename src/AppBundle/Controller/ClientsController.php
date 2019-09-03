<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class ClientsController extends Controller
{

    private $client_data = [
        [
            'id' => 0,
            'title' => 'ms',
            'lastname' => 'Jamille',
            'address' => '',
            'zipcode' => '00100',
            'city' => 'Helsinki',
            'email' => 'jamille@email.com'
        ],
        [
            'id' => 1,
            'title' => 'mr',
            'lastname' => 'Gerrits',
            'address' => '',
            'zipcode' => '00200',
            'city' => 'Helsinki',
            'email' => 'gerrits@otheremail.com'
        ],
        [
            'id' => 2,
            'title' => 'mr',
            'lastname' => 'Valantine',
            'address' => '',
            'zipcode' => '',
            'city' => 'Helsinki',
            'email' => 'valantine@moreemail.com'
        ],
        [
            'id' => 3,
            'title' => 'mr',
            'lastname' => 'Dipendra',
            'address' => '',
            'zipcode' => '',
            'city' => 'vantaa',
            'email' => 'dipendra@mail.com'
        ]      
    ];

    private function callAPI($method, $url, $data = false)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        
        $result = json_decode($result);
        curl_close($curl);

        return $result->results;
    }

    /**
     * @Route("/guests", name="index_clients")
     */
    public function showIndex()
    {
        $data = [];

        $response =$this->callAPI("GET", "https://randomuser.me/api/?results=200");
        $data['clients'] = $response;

        return $this->render("clients/index.html.twig", $data);
        
    }

    
    public function showDetails()
    {

        

    }

    
    public function showNew()
    {

        
    }

}