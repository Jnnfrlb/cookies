<?php

if (empty($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

if (isset($_GET['add_to_cart'])){
  array_push($_SESSION['cart'], $_GET['add_to_cart']);
}

/*if(isset($_POST['peanuts'])) {
  $cookie1=$_COOKIE['peanuts'];
  setcookie('peanuts', $cookie1, time()+7200);
}

if(isset($_POST['chips'])) {
  $cookie2=$_COOKIE['chips'];
  setcookie('chips', $cookie1, time()+7200);
}

if(isset($_POST['choclate'])) {
  $cookie1=$_COOKIE['choclate'];
  setcookie('choclate', $cookie1, time()+7200);
}

if(isset($_POST['mms'])) {
  $cookie1=$_COOKIE['mms'];
  setcookie('mms', $cookie1, time()+7200);
}

if (!empty($_COOKIE['peanuts']) || !empty($_COOKIE['chips']) || !empty($_COOKIE['choclate']) ||  !empty($_COOKIE['mms'])){
    ?><h1><?= $_COOKIE['peanuts']." Pecan Nuts";?></h1>
    <h1><?=$_COOKIE['chips']." Chocolate Chips";?></h1>
    <h1><?=$_COOKIE['choclate']." Chocolate Cookie";?></h1>
    <h1><?=$_COOKIE['mms']." M&M's© cookies";?></h1>
    <?php
}*/
