<!DOCTYPE html>

<?php
session_start();
    include("login/connection.php");
    include("login/functions.php");
    
    /*Checando si hay una peticon post*/
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $user_name = $_POST['username'];
		$password = $_POST['password'];
        
        /*revisando que todos los campos sean correctos*/
        if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name)){
            /* creando al usuario en la base de datos */
            $user_id=random_num(20);
            $query="insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }else{
        echo "Please enter some valid information";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sigin.style.css">
    <title>Registrarse</title>
</head>
<body>
    <main>
        <div class="content">
            <div class="content">
                <div id="wrapper">
                    <div id="left">
                        <div id="signin">
                            <form method="post">
                                <div>
                                    <label>Nombre de usuario</label>
                                    <input type="text" name="username" class="text-input">
                                </div>
                                <div>
                                    <label>Contraseña</label>
                                    <input type="password" name="password" class="text-input">
                                </div>
                                <input type="submit" value="Sigup" class="primary-btn">
                                <a href="login.php">Click aqui para iniciar sesion</a>
                            </form>
                            
                    </div>
               
        </div>
        <?php include('Components/circules.php')?>
    </main>
    <script src="scrips/scrip.js"></script>
</body>
</html>