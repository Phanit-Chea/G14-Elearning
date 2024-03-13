<?php
// session_start();
require 'database/database.php';
require 'models/payment.model.php';
// require '../../models/cart.model.php';
$cardNameMsg = $cardNumberMsg = $expDateMsg = $cvvMsg = '';
$isValidForm = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if(isset($_POST['cardName'])){
    //     if($_POST['cardName'] && count($_POST['cardName'])< 5){
    //         $cardNameMsg = "Length of Name must be greater or equal 5";
    //         $isValidForm = false;
    //     }
    //     else {
    //         $cardNameMsg = 'Name is required';
    //         $isValidForm = false;
    //     }
    // }

    // if(isset($_POST['cardNumber'])){
    //     if($_POST['cardNumber'] && count($_POST['cardNumber']) !== 16){
    //         $cardNumberMsg = "Length of Name must be equal 12";
    //         $isValidForm = false;

    //     }
    //     else {
    //         $cardNumberMsg = 'Card Number is required';
    //         $isValidForm = false;
    // }

    // }

    // if(isset($_POST['expDate'])){
    //     if($_POST['expDate'] && count($_POST['expDate']) !== 7){
    //         $expDateMsg = "Invalid Expire Date";
    //         $isValidForm = false;

    //     }
    //     else {
    //         $expDateMsg = 'Expire date is required';
    //         $isValidForm = false;
    //     }
    // }

    // if(isset($_POST['cvv'])){
    //     if($_POST['cvv'] && count($_POST['cvv']) !== 3){
    //         $cvvMsg = "Invalid CVV number";
    //         $isValidForm = false;

    //     }
    //     else {
    //         $cvvMsg = 'CVV is required';
    //         $isValidForm = false;
    
    //     }
    // }
    foreach ($carts as $cart) {
        purchaseCourse($cart['courses_id'], $userId);
    }
    header('Location: /');
    // if($isValidForm){
    //     foreach ($carts as $cart) {
    //         purchaseCourse($cart['course_id'], $userId);
    //     }
    //     header('Location: /');
    // }

}
