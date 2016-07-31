<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

class EdmundService {

    public function get() {
        $edmundsConf = Config::get('app.edmunds');

        $client = new Client();

        $data = $client->get($edmundsConf['url'] . '/makes?fmt=json&api_key=' . $edmundsConf['app_key'])->json();

        return $data;
    }

    public function photo($make, $model) {
        $edmundsConf = Config::get('app.edmunds');

        $client = new Client();

        $data = $client->get($edmundsConf['url'] . '/' . $make . '/' . $model . '/photos' . '?fmt=json&api_key=' . $edmundsConf['app_key'])->json();
        return $data;
    }

}
