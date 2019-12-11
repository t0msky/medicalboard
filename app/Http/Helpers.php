<?php
use GuzzleHttp\Client;

if (! function_exists('appBladeData')) {

    function appBladeData() {

        $client = new Client();
        $url = config('services.endpoint.url');
        $token = session('API_token');
        $postData = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $token
            ],

        ];

        try{

            $response = $client->get($url.'/user_details', $postData)->getBody()->getContents();
            $result = (json_decode($response));
            $return = $result->data->user_details[0];
            return $return;

        } catch (\GuzzleHttp\Exception\BadResponseException $e){
            if ($e->getCode() == 400){
                toast('Invalid Request. Please enter a username or a password.','error');
                return redirect()->back();

            } else if ($e->getCode() == 401){
                toast('Your credentials are incorrect. Please try again.','error');
                return redirect()->back();
            }

            else{
                toast('Something went wrong with your credential','error');
                return redirect()->back();

            }

        }

    }

}

if (! function_exists('checkRole')) {

    function checkRole($acceptedRoles) {

        $userRoles = session('user_roles');
        $compareArr = array_intersect($userRoles, $acceptedRoles);

        $result = collect($compareArr)->isEmpty() ? false : true;

        return $result;

    }

}


