<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $cidade = isset($_POST['cidade']) ? htmlspecialchars($_POST['cidade']) : '';
    $estado = isset($_POST['estado']) ? htmlspecialchars($_POST['estado']) : '';

    echo "<h2>Dados do Usuário</h2>";
    echo "<p><strong>Username:</strong> " . $username . "</p>";
    echo "<p><strong>Nome:</strong> " . $nome . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Cidade:</strong> " . $cidade . "</p>";
    echo "<p><strong>Estado:</strong> " . $estado . "</p>";

} else {
    echo "Formulário não foi submetido.";
}

?>
