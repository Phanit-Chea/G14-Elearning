<?php 
require 'database/database.php'; 
require 'models/payment.model.php'; 
$cardNameMsg = $cardNumberMsg = $expDateMsg = $cvvMsg = ''; 
$oldCardName = $oldCardNumber = $oldExpDate = $oldCvv = ''; 
$isValidForm = true; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    if (isset($_POST['cardName'])) { 
        $oldCardName = $_POST['cardName']; 
        if (strlen($_POST['cardName']) < 5) { 
            $cardNameMsg = "Invalid card name"; 
            $isValidForm = false; 
        } 
    } 
 
    if (isset($_POST['cardNumber'])) { 
        $oldCardNumber = $_POST['cardNumber']; 
        if (!validateCreditCard($_POST['cardNumber'])) { 
            $cardNumberMsg = "Invalid card number"; 
            $isValidForm = false; 
        } 
 
    } 
 
    if (isset($_POST['expDate'])) { 
        $oldExpDate = $_POST['expDate']; 
        if (strlen($_POST['expDate']) !== 5) { 
            $expDateMsg = "Invalid Expire Date"; 
            $isValidForm = false; 
        } 
    } 
 
    if (isset($_POST['cvv'])) { 
        $oldCvv = $_POST['cvv']; 
        if (strlen($_POST['cvv']) !== 3) { 
            $cvvMsg = "Invalid CVV number"; 
            $isValidForm = false; 
        } 
    } 
    if ($isValidForm) { 
        foreach ($carts as $cart) { 
            if(!isPaymentExist($userId,$cart['courses_id'])){ 
                purchaseCourse($cart['courses_id'], $userId); 
            } 
        } 
        header('Location: /'); 
    } 
} 
 
function validateCreditCard($creditCardNumber) 
{ 
    // Remove any spaces or non-numeric characters from the credit card number 
    $cleanedNumber = preg_replace('/\D/', '', $creditCardNumber); 
 
    // Check if the credit card number is exactly 16 digits 
    if (strlen($cleanedNumber) !== 16) { 
        return false; 
    } 
 
    // Reverse the credit card number 
    $reversedNumber = strrev($cleanedNumber); 
 
    // Initialize variables for the Luhn algorithm calculation 
    $sum = 0; 
    $double = false; 
 
    // Loop through each digit of the reversed credit card number 
    for ($i = 0; $i < strlen($reversedNumber); $i++) { 
        $digit = intval($reversedNumber[$i]); 
 
        // Double every second digit starting from the right (from index 0) 
        if ($double) { 
            $digit *= 2; 
            // If the doubled digit is greater than 9, subtract 9 from it 
            if ($digit > 9) { 
                $digit -= 9; 
            } 
        } 
 
        // Add the digit to the sum 
        $sum += $digit; 
 
        // Toggle the 'double' flag for the next iteration 
        $double = !$double; 
    } 
 
    // If the sum is divisible by 10, the credit card number is valid 
    return $sum % 10 === 0; 
}