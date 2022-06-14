<?php

use borales\extensions\phoneInput\PhoneInput;
use yii\bootstrap4\ActiveForm;
$this->registerCssFile('/css/full-page.css');

?>

<div class="content">

    <div class="container-fluid">
        <form action="" >
        <div class="row" >
            <div class="" style="width: 40%; margin: auto; padding-left: 28px; padding-right: 28px; background-color: white ">
                <div style="margin-top: 20px">
                    <img src="/images/logo.svg" class="logo-small">
                </div>
                <div  style="margin-left: 6px; margin-bottom: 10px; font-size: 24px; font-weight: bold">
                    Password recovery
                </div>
                <div style="margin-bottom: 20px; margin-left: 6px; line-height: 20px">
                    <span style="font-size: 13px">
                      Please fill in the email you've used to create account and we'll send you a rest link
                    </span>
                </div>


                <div style="display: inline-block; margin-bottom: 10px; margin-left: 6px">
                    <label for="your-input" class="Labelclass">Email</label>
                    <input type="email" id="your-input" class="login-input" />
                </div>

                <hr class="sidebar-divider" style="margin-top: 30px">
                <div style="display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px; margin-left: 6px">
<!--                    <div style="color: #E40967; font-weight: bold">Back to Login-->
<!--                    </div>-->
                    <a href="#" style="text-decoration: none; color: #E40967; font-weight: bold">Back to Login</a>
                    <div>
                        <BUTTON type="submit" class="login-button-large" > Reset my password </BUTTON>

                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>
</div>


