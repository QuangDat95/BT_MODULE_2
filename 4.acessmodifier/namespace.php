<?php
require 'SinhVienA/SinhVien.php';
require 'SinhVienB/SinhVien.php';

//use namespace\ten_class
use SinhVienA\SinhVien;

use SinhVienB\SinhVien as SinhVienB;

$objSinhVien    = new SinhVien();
$objSinhVienB   = new SinhVienB();
