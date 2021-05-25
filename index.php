<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



# When installed via composer
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('id_ID');

for ($i = 0; $i < 200; $i++) {
  // generate data by accessing properties
  $nama = $faker->name;
  $email = $faker->email;
  $nrp = $faker->numberBetween($min = 100000000, $max = 999999999);
  $jurusan = "Sarjana Ekonomi";
  $gambar = "";
  $query = "INSERT INTO mahasiswa VALUES ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query);
}
