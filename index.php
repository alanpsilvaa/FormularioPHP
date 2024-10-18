<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidas</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #fff;
            overflow-y: auto; /* Habilitar rolagem vertical */
            scroll-behavior: smooth; /* Rolagem suave */
        }

        .box {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            width: 500px; /* Aumentar a largura do formulário */
            text-align: center;
            margin: 20px 0; /* Espaço para visualização com rolagem */
        }

        fieldset {
            border: none;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            text-align: left;
            width: 100%;
        }

        input[type="number"],
        input[type="submit"] {
            margin-top: 5px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 100%;
            font-size: 1em;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        input[type="submit"] {
            background-color: rgb(20, 147, 220);
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: rgb(17, 54, 71);
        }

        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Medidas</h1>
        <fieldset>
            <form>
                <label for="Idade">Idade</label> <br><input type="number" id="Idade" name="Idade"><br>
                <label for="Altura">Altura</label> <br><input type="number" id="Altura" name="Altura"><br>
                <label for="Peso">Peso</label> <br><input type="number" id="Peso" name="Peso"><br>
                <p>Medidas (cm)</p>
                <label for="Braço">Braço</label> <br><input type="number" id="Braço" name="Braço"><br>
                <label for="Ombro">Ombro</label> <br><input type="number" id="Ombro" name="Ombro"><br>
                <label for="Peito">Peito</label> <br><input type="number" id="Peito" name="Peito"><br>
                <label for="Cintura">Cintura</label> <br><input type="number" id="Cintura" name="Cintura"><br>
                <label for="Quadril">Quadril</label> <br><input type="number" id="Quadril" name="Quadril"><br>
                <label for="Coxa">Coxa</label> <br><input type="number" id="Coxa" name="Coxa"><br>
                <label for="Panturrilha">Panturrilha</label> <br><input type="number" id="Panturrilha" name="Panturrilha"><br><br>
                <input type="submit" name="Enviar" id="Enviar">
            </form>
        </fieldset>
    </div>
</body>
</html>

<?php



?>
