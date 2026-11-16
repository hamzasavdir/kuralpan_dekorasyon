<?php


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host       = 'localhost';
$kullanici  = 'root';
$sifre      = '';
$veritabani = 'kuralpan_dekorasyon';

$baglanti = new mysqli($host, $kullanici, $sifre, $veritabani);
$baglanti->set_charset("utf8mb4");
