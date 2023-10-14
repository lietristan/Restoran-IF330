<?php
include "navbar.html";
?>


<form action='signup_page.php' method='POST'>
    Username: <input type='text' name='txtUser'><br>
    Password: <input type='password' name='txtPass'><br>
    Tanggal Lahir : <input type='date' name='txtTanggalLahir'><br>
    Jenis Kelamin : 
    <input type='radio' value ='m'name='txtJenisKelamin'>Male
    <input type='radio' value ='f'name='txtJenisKelamin'>Female<br>
<input type='submit' value='Daftar'>
</form>

<?php
$role= "user";

$kon = mysqli_connect("localhost","root","","uts_restoran");
if(isset($_POST['txtUser'])){
    $q="INSERT INTO user
    (username, password, tgl_lahir, jenis_kelamin, role) VALUES
    ('".$_POST['txtUser']."',
    '".($_POST['txtPass'])."',
    '".$_POST['txtTanggalLahir']."',
    '".$_POST['txtJenisKelamin']."',
    '.$role')";
    $query = mysqli_query($kon, $q);
}

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>