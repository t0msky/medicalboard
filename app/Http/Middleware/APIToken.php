<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;

class APIToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $test = $request->headers->set('X-Authorization', 'xxxxx')
//        dd($test);
        $test = $request->bearerToken()->has('Authorization');
        dd($test);

        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
//                'Authorization' => $token
            ],
        ]);
        $header = $client->getConfig('headers');
//        dd(collect($request));
        $request = collect($header);
//        dd($request['Authorization']);
        if($request['Authorization']){
            return $next($request);
        }

        return redirect()->route('page_login');

    }
}
