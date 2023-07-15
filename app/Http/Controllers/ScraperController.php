<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;


class ScraperController extends Controller
{
    //
    public function index()
    {
        $client = new Client();

        $website = $client->request('GET', 'https://laravel.com/docs/10.x/views');
        // dd($website);

        return $website->html();
        // return view('welcome', $website->html());

    }

}
