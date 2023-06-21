<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beri Bantuan Shadaqoh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
        <form action="beranda.php" method="POST" class="login-email">
        <div class="login">
    <h2 class="login-header">Form Login</h2>
        <form class="login-container">
            <p>
            <label for="isian-text">Masukkan Nama Donatur : </label> <br>
                <input type="text" placeholder="Nama Donatur">
            </p>
            <p>
            <label for="isian-password">Masukkan Donatur ID : </label> <br>
                <input type="password" placeholder="Donatur Id">
            </p>
            <p>
            <label for="isian-radio">Pilihlah Paket : </label> <br>
                <input type="radio" placeholder="Paket">
                <label for="pr">Paket 1</label>
            </p>
            <input type="radio" placeholder="Paket">
                <label for="pr">Paket 2</label>
            <p>
            <label for="isian-radio">Pilihlah Kategori : </label> <br>
                <input type="radio" placeholder="kategori">
                <label for="pr">Uang</label>
            </p>
            <p>
                <input type="radio" placeholder="kategori">
                <label for="pr">Barang</label>
            </p>
            <p>
            <label for="isian-text">Pilihlah Nominal : </label> <br>
                <input type="text" placeholder="nominal">
            </p>
            <a href="beranda.php" target="_blank">
            <button class="button">Simpan</button></a>
        </form>
    </div>
</body>
</html> -->

<div class="apawe">
<h3>Input Data</h3>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama Donatur</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Donatur Id</td>
            <td><input type="text" name="nodon"></td>
        </tr>
        <tr>
            <td>Paket</td>
            <td><input type="text" name="paket"></td>

        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="browsers" name="kategori"></td>
        </tr>
        <tr>
            <td>Nominal/barang</td>
            <td><input type="text" name="nominal"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name ="id"></td>
        </tr>
    </table>
</form>

<?php
include('koneksi.php');
error_reporting(0);
// echo "<pre/>"; print_r($_POST);
// exit;
$nama = $_POST['nama'];
$nodon = $_POST['nodon'];
$paket = $_POST['paket'];
$kategori = $_POST['kategori'];
$nominal = $_POST['nominal'];

if(isset($_POST['id'])){
    mysqli_query($conn,"insert into masjidinput set
    nama = '$_POST[nama]',
    nodon = '$_POST[nodon]',
    paket = '$_POST[paket]',
    kategori = '$_POST[kategori]',
    nominal = '$_POST[nominal]'");

    echo "<script>alert('Terima Kasih, Data berhasil disimpan!');window.location='beranda.php';</script>";
}
else{
    // echo "<script>alert('Data anda gagal disimpan, Coba lagi!');window.location='beranda.php';</script>";
}
?>



<!-- </div>
<div class="apaya">
<h3>Data Siswa</h3>

<table border="0" cellpadding="6" cellspacing="0">
    <tr>
        <th class="kolom">No</th>
        <th class="kolom">Nama</th>
        <th class="kolom">NIS</th>
        <th class="kolom">Rombel</th>
        <th class="kolom">Rayon</th>
        <th class="kolom">Aksi</th>
    </tr> -->

    
    
    <!-- include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from tbldata");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[Nama]</td>
            <td>$tampil[NIS]</td>
            <td>$tampil[Rombel]</td>
            <td>$tampil[Rayon]</td>
            <td><button><a href='?kode=$tampil[Nama]'>Hapus</a></button></td>
        </tr>";

        $no++; 
    }
    ?> -->
</table>
</div>
<style>
    body{
        background-color: white;
    }
    table{
        margin-left: auto;
        margin-right: auto;
    }
    h3{
        text-align: center;
    }
    th{
        background-color: white;
    }
    a{
        text-decoration: none;
    }
    .apawe{
        margin-top: 8em;
        background-color: #EAECF0;
        margin-left: 500px;
        margin-right: 500px;
        border-radius: 10px;
    }
    .apaya{
        background-color: #EAECF0;
        margin-left: 450px;
        margin-right: 450px;
        border-radius: 10px;
    }
    
