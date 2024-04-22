


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif;
        background: #696969;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid darkred;

        }
        legend{
            border: 1px solid darkred;
            padding: 10px;
            text-align: center;
            background-color: darkred;
            border-radius: 8px;
            }
            .inputBox{
                position: relative;
            }
            .inputUser{
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
            }
            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }
            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput{
                top: -20px;
                font-size: 12px;
                color: darkred;
            }
            #submit{
                background: darkred;
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;

            }
            #submit:hover{
                background: red;
            }
            


    </style>
</head>
<body>
    <div class="box">
        <form action=# method="post">
            <fieldset>
            <legend><b>Cadastre-se</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="Nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</label>
                <br><br>
            </div>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
                <br><br>
            </div>
            <div class="inputBox">
                <input type="password" name="Senha" id="senha" class="inputUser" required>
                <label for="password" class="labelInput">Senha</label>
                <br><br>
              <input type="submit" name="submit" id="submit">
            </div>
        </fieldset>

        </form>
    </div>
    
</body>
</html>