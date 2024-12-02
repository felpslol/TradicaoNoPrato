<?php
include 'conectar.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT cardapio FROM restaurante WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = $result->fetch_assoc()) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="cardapio.pdf"');
        echo $row['cardapio'];
    } else {
        echo "PDF não encontrado.";
    }
} else {
    echo "ID não especificado.";
}

$conn->close();
?>