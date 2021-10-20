<?php
    $toko = $_POST['toko'];
    $pesanan = $_POST['pesanan'];
    $nama = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];
    $detail = $_POST['detail'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $pos = $_POST['pos'];
    $save =$_POST['save'];
    $jasa = $_POST['jasa'];
    $waktu = $_POST['waktu'];

    $button = $_POST['button'];


    echo "Selamat Pesanan Kamu Sedang Disiapkan <br>";
    echo "~ Rincian Pesanan ~ <br>";
    echo "Pengirim      : " .$toko. "<br>";
    echo "Pesanan       : " .$pesanan. "<br>";
    echo "================================ <br>";
    echo "Nama Penerima : " .$nama. "<br>";
    echo "No.Telephone  : " .$notelp. "<br>";
    echo "Alamat        : " .$alamat."<br>";
    echo "Detail Alamat : " .$detail. "<br>";
    echo "Kota          : " .$kota. "<br>";
    echo "Provinsi      : " .$provinsi. "<br>";
    echo "Kode Pos      : " .$pos. "<br>";
    echo "Alamat Tersimpan :".$save. "<br>";
    echo "=================================<br>";
    echo "~ Pengiriman ~ <br>";
    echo "Jasa Pengiriman  : " .$jasa. "<br>";
    echo "Waktu Pengiriman : " .$waktu. "<br>";
   
 ?>