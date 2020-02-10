<?php


session_start(); //sempre sessione up se è partita



$servername = "fojvtycq53b2f2kx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ltwgwrna6uukqi5g";
$password = "wklljo29mau1yzg1";
$dbname = "wgijrn50b1al9p6v";


 $_SESSION['user'] = $user_id;


  if (isset($_SESSION['user'])) {
   // logged in
 } else {
   // not logged in
 }

 $_SESSION['user']

  if (isset($_SESSION['user'])) {
 ?>
   ciao
 <?php

 } else {
   ?>
 suca
   <?php
 }






?>
