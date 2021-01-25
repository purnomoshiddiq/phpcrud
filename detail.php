<?php

require 'functions.php';
// ambil id dari url

$id = $_GET['id'];
// query siswa berdasarkan id 
$s = query("SELECT * FROM siswa WHERE id = $id");

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Data Siswa</title>
</head>

<body>
  <div class="container">
    <h1>Data Siswa</h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
          <th>Jenis Kelamin</th>
          <th>Kelas</th>
          <th>Nama Kelas</th>
          <th>Agama</th>
          <th>Alamat</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $s['id']; ?></td>
          <td><?= $s['nama_dpn']; ?></td>
          <td><?= $s['nama_blk']; ?></td>
          <td><?= $s['jenis_kelamin']; ?></td>
          <td><?= $s['kelas']; ?></td>
          <td><?= $s['nama_kls']; ?></td>
          <td><?= $s['agama']; ?></td>
          <td><?= $s['alamat']; ?></td>
          <td>
            <a class="badge badge-warning" href="#"> Edit </a> <a class="badge badge-danger" href="#">Hapus</a>
          </td>
        </tr>

      </tbody>
    </table>
    <a class="btn btn-success" href="index.php">Kembali</a>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>