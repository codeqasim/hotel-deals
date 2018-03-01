<?php

namespace App;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{

    private $staticParams = [
        'scenario' => 'deal-finder',
        'page' => 'foo',
        'uid' => 'foo',
        'productType' => 'Hotel'
    ];

    public function getDeals($params, $asArray = false)
    {
        try {

            $response = Curl::to(env('API_URL'))
                ->withData(array_merge($params,$this->staticParams))
                ->asJson($asArray)
                ->get();

            $response = $response['offers']['Hotel'];

        } catch (\Exception $e) {

            $response = [];

        }
        return $response;
    }

}
