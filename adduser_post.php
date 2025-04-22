<?php
if (isset($_POST['frmname']))
{
    include "DB/db.php";
    $frmname = $_POST['frmname'];
    $frmusername = $_POST['frmusername'];
    $frmpass = $_POST['frmpass'];
    $frmrole = isset($_POST['frmrole']) ? 1 : 0;
    $sql = "INSERT INTO tbluser (fldFullName, fldUsername, fldPassword, fldRole)
    VALUES ('$frmname','$frmusername','$frmpass','$frmrole') ";

    //  echo $sql;
    //  die;

    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:index.php");
} else {
    die("Wrong open page");
}