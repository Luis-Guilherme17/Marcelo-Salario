
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
        input[type="reset"] {
            background-color: #f44336;
        }
        input[type="reset"]:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="texthoras"> Digite as horas trabalhadas:
            <input type="text" name="txthoras" id=""><br>
        </label>

        <label for="textvalor"> Digite o valor da hora trabalhada:
            <input type="text" name="txtvalor" id=""><br>
        </label>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>