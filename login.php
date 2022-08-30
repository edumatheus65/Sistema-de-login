<?php

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

        <form action="" method="get">
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