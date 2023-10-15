<?php

$kon = mysqli_connect("localhost","root","","uts_restoran");

if(isset($_POST['txtUser'])){
    $q = "SELECT *FROM user
    WHERE username='".$_POST['txtUser']."' AND password = '".$_POST['txtPass']."'";

    $query=mysqli_query($kon, $q);

    $jml = mysqli_num_rows($query);
    if($jml>0){
        if($query){
            echo "Login Sukses";
        } else {
            echo "Login gagal";
        }
    }
}

echo "<pre>";
print_r($_POST);
echo "</pr1e>";

// setelah login biasanya di simpan di SESSION
?>