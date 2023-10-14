<?php
include "navbar.html";
?>

<link rel="stylesheet" href="login_style.css"/>
<body>
    <div class ="center">
        <h1>Login</h1>
        <form action='login_page.php' method='POST'>
        <div> 
            <div class=txt_field>
                <input type='text' name='txtUser' required>
                <span></span>
                <label>Username</label>
            </div>
            <div class=txt_field>
                <input type='password' name='txtPass' required>
                <span></span>
                <label>Password</label>
            </div>
        <input type="submit" value="Login">
        <div class="signup_link">
        Belum punya akun? <a href="signup_page.php">Daftar disini</a></p>    
            </div>
        
        </form>
    </div>         
</body>















</div>
<?php

$kon = mysqli_connect("localhost","root","","uts_restoran");

if(isset($_POST['txtUser'])){
    $q = "SELECT *FROM user
    WHERE username='".$_POST['txtUser']."' AND password = '".$_POST['txtPass']."'";
    $query=mysqli_query($kon, $q);

    $jml = mysqli_num_rows($query);
    if($jml>0){
        echo "Login Sukses";
    } else {
        echo "Login gagal";
    }
} 

echo "<pre>";
print_r($_POST);
echo "</pre>";

// setelah login biasanya di simpan di SESSION
?>
