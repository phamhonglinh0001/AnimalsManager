<?php
session_start();
include("../config.php");
$conn = mysqli_connect(HOST, USER, PASS, DB) or die ('Không thể kết nối tới database');
mysqli_set_charset($conn,"utf8");

if(isset($_GET["id"])){
    $id = $_GET["id"];
    mysqli_query($conn, "delete from obvervation where ma_ctv='$id'");
    mysqli_query($conn, "delete from themdongvat where ma_ctv='$id'");
header("location:dsctv.php");
}

?>