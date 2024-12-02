<?php
session_start();
include 'conectar.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Email inválido.";
        header("Location: cadastro.php");
        exit();
    }

    if ($senha !== $csenha) {
        $_SESSION['error'] = "As senhas não coincidem.";
        header("Location: cadastro.php");
        exit();
    }

    $query = "INSERT INTO usuarios (email, nome, senha) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $email, $nome, $senha);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Erro ao cadastrar. Tente novamente.";
            header("Location: cadastro.php");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['error'] = "Erro na preparação da consulta. Tente novamente.";
        header("Location: cadastro.php");
        exit();
    }
}

mysqli_close($conn);
?>