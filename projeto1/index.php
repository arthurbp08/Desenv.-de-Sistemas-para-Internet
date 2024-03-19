<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Dados do Formulário</title>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Dados do Formulário</h2>";
    echo "<p><strong>Nome:</strong> " . $_POST["nome"] . "</p>";
    echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
    echo "<p><strong>Telefone:</strong> " . $_POST["telefone"] . "</p>";
    echo "<p><strong>Atuação:</strong> " . $_POST["atuação"] . "</p>";
    echo "<p><strong>Acesso:</strong> " . $_POST["acess"] . "</p>";
    echo "<p><strong>Estado:</strong> " . $_POST["estado"] . "</p>";
    echo "<p><strong>Cidade:</strong> " . $_POST["cidade"] . "</p>";
    echo "</body>";
    echo "</html>";
    
?>
