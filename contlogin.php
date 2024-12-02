<?php
include 'conectar.php';
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['emaileuser']; 
    $senha = $_POST['senha']; 

    // Validar só o basico por enquanto
    if (empty($login) || empty($senha)) {
        $_SESSION['error'] = "Por favor, preencha todos os campos.";
        header("Location: login.php");
        exit();
    }

    $login = mysqli_real_escape_string($conn, $login);
    $senha = mysqli_real_escape_string($conn, $senha);

    $query = "SELECT * FROM usuarios WHERE (email='$login' OR nome='$login') AND senha='$senha'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nome_usuario'] = $row['nome'];
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Email ou senha incorretos.";
        header("Location: login.php");
        exit();
    }
}
mysqli_close($conn);
?>