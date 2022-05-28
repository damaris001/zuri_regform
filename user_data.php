<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

// echo "NAME: " . $name . "<br>";
// echo "EMAIL: " . $email . "<br>";
// echo "DOB: " . $dob . "<br>";
// echo "GENDER: " . $gender . "<br>";
// echo "COUNTRY: " . $country . "<br>";

 $data = [
     ['Name' ,'email', 'dob','gender', 'country'],
     [$name , $email, $dob , $gender, $country]
 ];

  $filename = 'userdata.csv';

  $f = fopen($filename, 'w');

  //writing file into csv
  foreach ($data as $row){
      fputcsv($f, $row);
  }

  //close file
  fclose($f);

  $userdata = [
      "Name" => $name,
      "Email" => $email,
      "DOB" => $dob,
      "Gender" => $gender,
      "Country" => $country
  ];
  print_r($userdata);
?>