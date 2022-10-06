<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Triângulo
    </title>
</head>
<body>
    <div class="container">
        <h1>
            Área do triângulo
        </h1>
        <form action="calc.php" method="post">
            <label for="tAltura">
                Altura:
            </label>
            <br>
            <input type="text" name="txtAltura" id="tAltura"
                size="10" maxlength="5" placeholder="Altura"
                required>
            <br>
            <label for="tBase">
                Base:
            </label>
            <br>
            <input type="text" name="txtBase" id="tBase"
                size="10" maxlength="5" placeholder="Base"
                required>
            <br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>
