<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use RealRashid\SweetAlert\Facades\Alert;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $client;
    private $path;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session('success_message')) {
                Alert::success('Success!', session('success_message'));
            }
            return $next($request);
        });
        $this->path = config('services.endpoint.url').'/';
        $this->client = new Client(['base_uri' => $this->path]);
    }

    public function sendRequest($data, $type, $path, $json=[], $query=[], $multipart=[])
    {
        try {
            $response = $this->client->request($type, $path, [
                'headers' => [
                    'Authorization' => session('API_token'),
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'exceptions' => false
                ],
                'json' => $json,
                'query' => $query,
                'multipart' => $multipart
            ]);

            if ($response->getStatusCode() == 200||$response->getStatusCode() == 201) {
                return json_decode($response->getBody()->getContents());
            } else {
                return (config('app.debug')) ? $response->getBody()->getContents() : null;
            }
        } catch (RequestException $e) {
            //$data .= ($type == "GET") ? ' not found' : ' Failed To Update because of Web Service';
            //toast($data , 'error');
             return null;
           // return ($e->hasResponse() && config('app.debug')) ? Psr7\str($e->getResponse()) : null;
        }
    }

    public function Checking($data)
    {
        return (!empty($data) && isset($data->data)) ? $data->data :null;
    }

    public function Checkingerrorcode($data)
    {
        return (!empty($data) && isset($data->errorcode) && $data->errorcode == 0) ? $data->data :null;
    }

    public function CheckingRecord($data)
    {
       return (!empty($data) && isset($data->record) && $data->record > 0) ? $data->data : null;
    }
}
