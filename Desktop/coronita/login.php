<?php 

session_start();
/*incluyendo los archivos necerios con funciones que se necesitan y la conexion a la base de datos*/
	include("login/connection.php");
	include("login/functions.php");


	/*Checando si hay una peticon post*/
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		/*revisando que todos los campos sean correctos*/
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//buscando al usuario en la base de datos
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				/*Revisando que haya un usuario con el nombre puesto*/
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					/*Revisando si la contrasena es correcta*/
					if($user_data['password'] === $password)
					{
						/*creando una sesion para que se guarde el incio de sesion*/
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			/*Marcar que hubo un eror*/
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sigin.style.css">
    <title>Iniciar sesión</title>
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
                                    <input type="text" class="text-input" name="user_name">
                                </div>
                                <div>
                                    <label>Contraseña</label>
                                    <input type="password" class="text-input" name="password">
                                </div>
                                <input type="submit" value="Login" class="primary-btn">
                                <a href="signin.php">Registrarse</a>
                            </form>
                            
                    </div>
               
        </div>
        <?php include('Components/circules.php')?>
    </main>
    <script src="scrips/scrip.js"></script>
</body>
</html>