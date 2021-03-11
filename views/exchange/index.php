<?php
/*
 *
 * Автор: Morgan
 * Телеграм: @C_Morgan
 * Почта: morganhakker@gmail.com
 *
 */

use yii\helpers\Html;
$this->registerCssFile("/web/exchangeStyle/css/main.css");
?>
<link rel="stylesheet" href="/web/exchangeStyle/css/flag-icon.css">
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>


<div id="container">
    <h1 class="titlemg">Currency Exchange</h1>
    <div class="sampexchange">
        <span ng-app="myApp" ng-controller="myCtrl">

            <h2 id="h2s">You pay</h2>
           <? $exchans = $response->sendRates()['rates'];
            ksort($exchans);
            foreach ($exchans as $items => $puls) {
                $listOption[substr($items, 0, 2)] = $items;
            }
            echo Html::dropDownList("otmaount", null, $listOption, [
                //    'prompt' => 'Tanlang',
                'class' => 'js-example-basic-single',
                'data-minimum-results-for-search' => 'Infinity',//delete search box
                'onchange' => 'changeFunc();'
            ]);
            echo Html::textInput(false, null, ['id' => 'otText', 'ng-model' => 'ToMoney', 'ng-click' => 'Yuu()']); ?>
            <div class="arrow">
                <div class="curve"></div>
                <div class="point"></div>
            </div>
            <div class="polee"><span class="poletext" id="demo">Exchange rate</span><span class="exchangeRate" id="exchangeRate"></span>
            </div>
            <h2 id="h3s">Go Media will get</h2>
            <? echo Html::textInput(false, '{{ToMoney * OtMoney || false | number}}', ['id' => 'toText']);
            $exchan = $response->sendRates()['rates'];
            asort($exchan);
            foreach ($exchan as $item => $pul) {
                $listOptionX[substr($item, 0, 2)] = $item;
            }
            echo Html::dropDownList("tomaount", null, $listOptionX, [
                //    'prompt' => 'Tanlang',
                'class' => 'js-example-basic-money',
                'data-minimum-results-for-search' => 'Infinity',//delete search box
                'onchange' => 'changeFunc();'
            ]);
            ?>
        </div>
    </div>
</div>
<script src="/web/exchangeStyle/js/js.js"></script>
<style>
    .select2-selection.select2-selection--single {
        float: left;
        width: 170px;
        height: 59px;
        padding: 12px 10px;
        border: 2px solid #bfc7ca;
        border-radius: 7px 0 0 7px;
        outline: none;
        font-family: Roboto, sans-serif;
        color: #202124;
        font-size: 20px;
        font-weight: 500;
    }
    .select2-selection__arrow {
        background-image: url('https://cdn4.iconfinder.com/data/icons/user-interface-174/32/UIF-76-512.png');
        background-color: transparent;
        background-size: contain;
        margin-top: 15px;
        margin-right: 10px;
        height: 30px !important;
        width: 30px !important;
    }
    .select2-dropdown.select2-dropdown--below {
        border-radius: 0px 0 7px 7px;
    }
    .select2-dropdown.select2-dropdown--above {
        border-radius: 7px 7px 0 0;
    }
    .strana_name {
        font-family: Roboto, sans-serif;
        padding-left: 28px;
        position: absolute;
    }
    .select2-results__option {
        border-bottom: 1px solid #bfc7ca;
        font-weight: bold;
        padding: 5px 0 5px 20px;
    }
    .select2:last-child {
        top: -59px;
    }
</style>

