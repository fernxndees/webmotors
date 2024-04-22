<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #696969;
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 70px;
            border-radius: 15px;
            color: white;

        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: red;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        button:hover{
            cursor: pointer;
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Nome" required>
        <br><br>
        <input type="password" placeholder="Senha" required>
        <br><br>
        <button>Entrar</button>
        <br><br><br><br>
        <a href="formulario.php"><button>Cadastre-se</button></a>
        
    </div>
    
</body>
</html>