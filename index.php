<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="./script.js"></script>
    <title>Atividade 1</title>
</head>
<body>
    <section class="cotacao">
        <h1>Cotação de Dolar em Reais</h1>
        
        <form action="">
            <input type="text" name="dolar" placeholder="Insira o valor">
            <input type="submit">
            <button type="reset" class="limpar" onClick="clear()" >Limpar</button>
        </form>
        
        <?php
        if(isset($_GET["dolar"])) {
            
            $dolar = $_GET["dolar"] * 4.99;
            echo "<span class='result'>É igual a R$$dolar</span>";
        }
        ?>
    </section>

    <section class="imc">
        <h1>Cálcule seu índice de massa corporal (IMC)</h1>
        
        <form action="">
            <input type="text" name="peso" placeholder="Insira o seu peso">
            <input type="text" name="altura" placeholder="Insira a sua altura">
            <input type="submit">
            <button type="reset" class="limpar">Limpar</button>
        </form>
        
        <?php
        if(isset($_GET["peso"]) && isset($_GET["altura"])) {
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];

            $imc = round($peso / ($altura * $altura), 2);
            echo "<span class='result'>O valor do IMC é $imc</span>";
        }
        ?>
    </section>
</body>
</html>