<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In / Check-Out</title>
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
        }

        .box {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            width: 400px;
            text-align: center;
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

        select,
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

        .radio-group {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 10px;
        }

        .radio-group {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 10px;
        }

        input[type="radio"] {
            transform: scale(1.4);
            /* Aumenta o tamanho do rádio */
            margin-right: 8px;
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
        <h1>Check-In / Check-Out</h1>
        <fieldset>
            <form>
                <label>Treino Concluído?</label>
                <div class="radio-group">
                    <input type="radio" id="treinoSim" name="treinoConcluido" v Walue="Sim">
                    <label for="treinoSim">Sim</label>
                    <input type="radio" id="treinoNao" name="treinoConcluido" value="Nao">
                    <label for="treinoNao">Não</label>
                </div><br>

                <label for="tipoTreino">Tipo de Treino?</label>
                <select id="tipoTreino" name="tipoTreino">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select><br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </div>
</body>
</html>