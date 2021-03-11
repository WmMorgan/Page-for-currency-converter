<?php

namespace app\controllers;

use yii\web\Controller;
use yii\httpclient\Client;

class ExchangeController extends Controller
{
    public function actionIndex()
    {
$response = new Rates();

        return $this->render('index', ['response' => $response]);


    }
}
class Rates {
public function sendRates($base = [], $sumbol =[]) {

    $client = new Client([
        'transport' => 'yii\httpclient\CurlTransport'
    ]);

    $response = $client->createRequest()
        ->setMethod('GET')
        ->setUrl('https://api.exchangeratesapi.io/latest')
        ->setData([
            'base' => $base, 'symbols'=> $sumbol])->send();
return $response->getData();
}

}