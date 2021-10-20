<?php
    $toko = $_GET['toko'];
    $pesanan = $_GET['pesanan'];
    $nama = $_GET['nama'];
    $notelp = $_GET['notelp'];
    $alamat = $_GET['alamat'];
    $detail = $_GET['detail'];
    $kota = $_GET['kota'];
    $provinsi = $_GET['provinsi'];
    $pos = $_GET['pos'];
    $save = $_GET['save'];
    $jasa = $_GET['jasa'];
    $waktu = $_GET['waktu'];

    $button = $_GET['button'];


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