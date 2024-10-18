<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro</title>
</head>
<style>
  body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        fieldset {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            border: none;
            width: 300px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        select, input {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 1em;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        button {
            background-color: rgb(20, 147, 220);
            border: none;
            padding: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: rgb(17, 54, 71);
        }

</style>

<body>
<fieldset>
        <form>

            <label for="plano">Plano:</label>
            <select id="plano" name="plano" required>
                <option value="">Selecione um plano</option>
                <option value="basico">Básico</option>
                <option value="intermediario">Intermediário</option>
                <option value="avancado">Avançado</option>
            </select><br><br>


            <!-- Campo para inserir a data de vencimento -->
            <label for="dataVencimento">Data de Vencimento:</label>
            <input type="date" id="dataVencimento" name="dataVencimento" required>
            <br><br>

            <!-- Campo para selecionar a forma de pagamento -->
            <label for="formaPagamento">Forma de Pagamento:</label>
            <select id="formaPagamento" name="formaPagamento" required>
                <option value="">Selecione a forma de pagamento</option>
                <option value="cartaoCredito">Cartão de Crédito</option>
                <option value="boleto">Boleto Bancário</option>
                <option value="pix">PIX</option>
                <option value="transferencia">Transferência Bancária</option>
            </select>
            <br><br>

            <!-- Botão de envio -->
            <button type="submit">Enviar</button>

        </form>
    </fieldset>
</body>
</html>
