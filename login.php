<?php
    //Iniciar a sessão, pois os arquivos estão separados, pois este sistema de login utiliza sessão
    session_start();

    //If verificar se o usuário já enviou algum dado;
    if(isset($_POST['email']) && empty($_POST['email']) == false) {
        $email = ($_POST['email']);
        $senha = md5($_POST['senha']);

        $db = 'daotest';
        $host = 'localhost';
        $user = 'eduardo';
        $pass = '';

        try {
            $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);

            $stmt = $conn->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

            //Verifição se o email e a senha estão corretos, deprende do retorno do resultado;
            if($stmt->rowCount() > 0) {

                $dado = $stmt->fetch();

                //Salvando o id do usuario na sessão
                $_SESSION['id'] = $dado['id'];

                header("Location: index.php");

                
            }

        } catch (PDOException $e) {
            echo "DEU RUIM " . $e->getMessage();
        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous"/>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="container">

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Digite seu email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="email">Digite sua senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>

    </div>
    


</body>
</html>