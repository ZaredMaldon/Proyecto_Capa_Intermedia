<?php
define('ProPayPal',0);
if(ProPayPal){
    define("PayPalClientId","AUkWObjta8obMWHkeu6jbZVLBGXqNUxWReE9pIZeXTlyugGNPLWoEU0S3AmcLcZK82AktEKyiN38QyvV");
    define("PayPalSecret","EM9DvJ_9EQYOCUh7W4xopf04x-IjGiVRYRXQRjEkFRQUyBKYnBiJdmPpC0DSHu6_X80gRN6SXB80lT29");
    define("PayPalBaseUrl","https://api.paypal.com/v1/");
    define("PayPalENV","production");
}else{
    define("PayPalClientId","AUkWObjta8obMWHkeu6jbZVLBGXqNUxWReE9pIZeXTlyugGNPLWoEU0S3AmcLcZK82AktEKyiN38QyvV");
    define("PayPalSecret","EM9DvJ_9EQYOCUh7W4xopf04x-IjGiVRYRXQRjEkFRQUyBKYnBiJdmPpC0DSHu6_X80gRN6SXB80lT29");
    define("PayPalBaseUrl","https://api.sandbox.paypal.com/v1/");
    define("PayPalENV","sandbox");
}
?>