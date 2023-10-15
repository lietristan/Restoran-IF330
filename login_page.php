<!DOCTYPE html>
<html>
    <head>
        <title>
            Restoran IF330
        </title>

        <?php
        include "navbar.html";
        ?>

        <link rel="stylesheet" href="login_style.css"/>
    </head>

    <body>
        <div class ="container" style = "width: 450px;">
            <div class = "card">
                <div class = "mx-auto my-5" style = "width:200px;">
                    <h1 class = "loginTitle">Login here</h1>
                    <form action='login_page.php' method='POST'>
                        <div> 
                            <div class="txt_field mb-4">
                                <label class="labelEmail">Email</label>
                                <input type='text' name='txtUser' class = "inputbox" placeholder = "name@example.com" required>
                            </div>  
                            <div class="txt_field mb-4">
                                    <label class="labelPass">Password</label>
                                <input type='password' name='txtPass' class = "inputbox" required  >
                        </div>

                        <label style="font-weight: 650;">Enter Captcha:</label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="textinput">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" readonly id="capt">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class = "form-group">
                                <div class="refreshText">Refresh Captcha</div>
                            </div>
                            <div class = "form-group btnRefresh">
                                <img src="resources/refresh-button.png" onclick="cap()">
                            </div>
			            </div>
                        <div class="form-group">
                            <button type = "submit" onclick="validcap()" class="submitbtn btn btn-lg btn-block">Log in</button>
                        </div>
    
                        <!-- <button type="submit" class="submitbtn btn btn-warning btn-sm" value="Login">Log in</button> -->
                        <div class="signup_link mx-auto">
                            Belum punya akun? <br />
                            <a href="signup_page.php">Daftar di sini</a></p>    
                        </div>
                    </form>
                </div>
            </div>
        </div>  
         
        <?php
            $kon = mysqli_connect("localhost", "root", "", "uts_restoran");

            if (isset($_POST['txtUser'])) {
                $q = "SELECT * FROM user
                        WHERE username='" . $_POST['txtUser'] . "' AND password = '" . $_POST['txtPass'] . "'";

                $query = mysqli_query($kon, $q);

                $jml = mysqli_num_rows($query);
                if ($jml > 0) {
                    if ($query) {
                        // START SESSON
                    } else {
                        
                        // echo '<script type="text/javascript">
                        //         alert("Wrong email or password!");
                        //     </script>';
                        echo "test";
                    }
                }
            }
        ?>

        <script src="captcha.js"></script>      
    </body> 


