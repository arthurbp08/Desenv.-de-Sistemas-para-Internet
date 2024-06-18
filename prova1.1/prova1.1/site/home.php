<?php
// Inicie a sessão
session_start();

// Defina as tarifas
$tarifa_padel = 150;
$tarifa_beach = 80;
$tarifa_tennis = 120;
$tarifa_pickleball = 60;

// Inicialize variáveis para armazenar custos
$custo_padel = $custo_beach = $custo_tennis = $custo_pickleball = 0;

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Calcule o custo para cada esporte com base nas horas inseridas
    $horas_padel = $_POST['horas_padel'];
    $horas_beach = $_POST['horas_beach'];
    $horas_tennis = $_POST['horas_tennis'];
    $horas_pickleball = $_POST['horas_pickleball'];

    $custo_padel = $tarifa_padel * $horas_padel;
    $custo_beach = $tarifa_beach * $horas_beach;
    $custo_tennis = $tarifa_tennis * $horas_tennis;
    $custo_pickleball = $tarifa_pickleball * $horas_pickleball;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Custos</title>
    <link href="css/homeStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php if (isset($_SESSION['login'])): ?>
        <!-- Menu -->
        <header>
            <h1>Alugueis</h1>
            <div class="caixa">
                <p>Escolha melhor quadra para praticar os melhores esportes</p>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="horas_padel">Horas de Padel:</label>
                <input type="number" id="horas_padel" name="horas_padel"><br>

                <label for="horas_beach">Horas de Beach:</label>
                <input type="number" id="horas_beach" name="horas_beach"><br>

                <label for="horas_tennis">Horas de Tennis:</label>
                <input type="number" id="horas_tennis" name="horas_tennis"><br>

                <label for="horas_pickleball">Horas de Pickleball:</label>
                <input type="number" id="horas_pickleball" name="horas_pickleball"><br>
<div class="botao">
                <input type="submit" value="Calcular">
</div>
        <!-- Exiba os custos aqui -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <p>Custo total para Padel: R$<?= $custo_padel ?></p>
            <p>Custo total para Beach: R$<?= $custo_beach ?></p>
            <p>Custo total para Tennis: R$<?= $custo_tennis ?></p>
            <p>Custo total para Pickleball: R$<?= $custo_pickleball ?></p>
        <?php endif; ?>
    <?php endif; ?>
            </form>
        </header>

</body>
</html>
