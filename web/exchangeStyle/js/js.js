
// select2 //Jquery section


function iconFromValue(val) {
    if (val.element) {
        val = `<span class="flag-icon flag-icon-` + val.element.value.toLowerCase() + `"><span class="strana_name"><st>${val.text}</st></span>`;
    }
    return val;
}


$('.js-example-basic-single').select2({
    templateResult: iconFromValue,
    templateSelection: iconFromValue,
    escapeMarkup: function(m) { return m; }
});

function iconFromValueX(val) {
    if (val.element) {
        val = `<span class="flag-icon flag-icon-` + val.element.value.toLowerCase() + `"><span class="strana_name"><sx>${val.text}</sx></span>`;
    }
    return val;
}
$('.js-example-basic-money').select2({
    templateResult: iconFromValueX,
    templateSelection: iconFromValueX,
    escapeMarkup: function(m) { return m; }
});
$('b[role="presentation"]').hide(); //delete arrow




// Javascript section
function changeFunc() {
    var selectOt = document.getElementsByTagName("st")[0].innerText;
    var selectedValueOt = selectOt;//options[selectOt.selectedIndex].value;
    var selectTo = document.getElementsByTagName("sx")[0].innerText;
    var selectedValueTo = selectTo;//.options[selectTo.selectedIndex].value;
    Isok(selectedValueOt, selectedValueTo)
    console.log(selectedValueTo);

}

function Isok(Ot = "AUD", To = "GBP") {//RUB to USD
    if (Ot == To) {
        var Uy = document.getElementById("exchangeRate").innerText = '';
        console.log(Uy);
    } else {
        const http = new XMLHttpRequest()

        http.open("GET", "https://api.exchangeratesapi.io/latest?base=" + Ot + "&symbols=" + To)
        http.onload = function () {
            // Do something with the retrieved data ( found in xmlhttp.response )
            var ToAmount = JSON.stringify(JSON.parse(http.responseText).rates).replace(/[^0-9.]/g, '');
            ToAmountS = ToAmount.split(".");
            ToAmountZ = ToAmountS[1].substring(0, 4);
            ToAmount = ToAmountS[0] + "." + ToAmountZ;
            return document.getElementById("exchangeRate").innerText = ToAmount
        };
        http.send()
    }
}


// Angular section
var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope, $interval) {

    $interval(callAtInterval, 3000);//update every 3 sec
    $scope.Yuu = function () {
        var element = angular.element('#exchangeRate')[0].innerText;
        $scope.OtMoney = element;

    }
    function callAtInterval() {
        console.log("Update every 3 second");

        var elements = angular.element('#exchangeRate')[0].innerText;
        $scope.OtMoney = elements;

    }
    $scope.ToMoney = "";
});


/*
 *
 * Автор: Morgan
 * Телеграм: @C_Morgan
 * Почта: morganhakker@gmail.com
 *
 */

