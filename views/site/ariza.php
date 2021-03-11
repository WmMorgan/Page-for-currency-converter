<?php


use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Contact V4</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 <link rel="icon" type="image/png" href="/web/arizastyle/images/icons/favicon.ico"/>
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/animate/animate.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/css-hamburgers/hamburgers.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/animsition/css/animsition.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/select2/select2.min.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/daterangepicker/daterangepicker.css">
 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/css/util.css">
 <link rel="stylesheet" type="text/css" href="/web/arizastyle/css/main.css">
 <!--===============================================================================================-->
</head>
<body>
<div class="container-contact100">
 <div class="wrap-contact100">
				<span class="contact100-form-title">
					Ariza qoldiring!
				</span>



<?

$form = ActiveForm::begin([
    'id' => 'ariza-form',
    'options' => ['class' => 'contact100-form validate-form'],
]);
?>

      <div class="wrap-input100 validate-input">
          <? echo $form->field($model, 'name')->textInput(['class' => 'input100', 'placeholder' => 'Ismingizni yozing'])->label('Ism:', ['class' => 'label-input100']); ?>
          <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 validate-input">
      <? echo $form->field($model, 'familyname')->textInput(['class'=>'input100', 'placeholder'=>'Familiyangizni yozing'])->label('Familiya:', ['class' => 'label-input100']); ?>
 <span class="focus-input100"></span></div>
      <div class="wrap-input100 validate-input">
<? echo $form->field($model, 'address')->textInput(['class'=>'input100', 'placeholder'=>'Manzilni kiriting'])->label('Yashash manzil:', ['class' => 'label-input100']); ?>
          <span class="focus-input100"></span></div>

      <div class="wrap-input100 validate-input">
<? echo $form->field($model, 'countryoforigin')->textInput(['class'=>'input100', 'placeholder'=>'Yurtingizni yozing'])->label('Davlat:', ['class' => 'label-input100']); ?>
          <span class="focus-input100"></span></div>

              <div class="wrap-input100 validate-input">
<? echo $form->field($model, 'email')->textInput(['class'=>'input100', 'placeholder'=>'Elektron pochtani kiriting'])->label('E-mail pochta:', ['class' => 'label-input100']); ?>
                  <span class="focus-input100"></span></div>

      <div class="wrap-input100 validate-input">
<? echo $form->field($model, 'phonenumber')->textInput(['class'=>'input100', 'placeholder'=>'Telefon raqamingizni kiriting'])->label('Telefon raqam:', ['class' => 'label-input100']); ?>
          <span class="focus-input100"></span></div>

      <div class="wrap-input100 validate-input">
<? echo $form->field($model, 'age')->textInput(['class'=>'input100', 'placeholder'=>'Yoshingizni  kiriting'])->label('Yoshi:', ['class' => 'label-input100']); ?>
          <span class="focus-input100"></span></div>

      <div class="wrap-input100 validate-input">
<? echo $form->field($model, 'hired')->textInput(['class'=>'input100', 'placeholder'=>'Kasblaringizni yozing'])->label('Kasbi:', ['class' => 'label-input100']); ?>
          <span class="focus-input100"></span></div>
      <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
							<span>
                                <p id="demo"></p>

<!--<script>-->
<!--function myFunction() {-->
<!--    var txt;-->
<!--    if (confirm("Press a button!")) {-->
<!--        txt = "You pressed OK!";-->
<!--    } else {-->
<!--        txt = "You pressed Cancel!";-->
<!--    }-->
<!--    document.getElementById("demo").innerHTML = txt;-->
<!--}-->
<!--</script>-->

                                <? $options = ['class'=>'contact100-form-btn', 'type'=>'submit']; echo Html::beginTag('button', $options); echo '<span>Yuborish<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>'; echo Html::endTag('button'); ?>
							</span>
          </div>
          </div>
          </div>
          </div>

      <? ActiveForm::end() ?>

<!--===============================================================================================-->
<script src="/web/arizastyle/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/web/arizastyle/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/web/arizastyle/vendor/bootstrap/js/popper.js"></script>
<script src="/web/arizastyle/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/web/arizastyle/vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="/web/arizastyle/vendor/daterangepicker/moment.min.js"></script>
<script src="/web/arizastyle/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/web/arizastyle/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/web/arizastyle/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>