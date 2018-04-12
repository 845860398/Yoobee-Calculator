<?php

  $r = $_POST["radius"];
  $d = 2 * $r;
  $area = 3.14 * $r * $r;
  $circum = 2 * 3.14 * $r;

  echo "<pre> Given radius = $r\n </pre>";
  echo "<pre> Diameter = $d\n </pre>";
  echo "<pre> Area of the circle = $area\n </pre>";
  echo "<pre> Circumstances of the circle = $circum\n </pre>";

  if (isset($_POST["circle"])) {
    echo "<pre> You selected the shape: Circle </pre><br>";
  }
  elseif (isset($_POST["square"])) {
    echo "<pre> You selected the shape: Square </pre>";
  }
  elseif (isset($_POST["rectangle"])) {
    echo "<pre> You selected the shape: Rectangle </pre>";
  }
  else {
    echo "<pre> Please select a shape... Like please..</pre>";
  }

  // PHP Testing 02
  // $f = $_GET["first"];
  // $l = $_GET["last"];
  //
  // echo "<pre> First Name = $f\n </pre>";
  // echo "<pre> Last Name = $l\n </pre>";

  // PHP Testing 03
  // if (!empty($_POST["shape"])) {
  //   foreach ($_POST["shape"] as $check) {
  //     echo "<pre> hello </pre><br>";
  //   }
  // }
  // else {
  //   echo "<pre> Please select a shape... Like please </pre>";
  // }


?>
