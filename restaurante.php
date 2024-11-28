<?php
include 'conectar.php';

$sql = "SELECT * FROM restaurante";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $imagem_data = $row['imagem'];
        $imagem_src = 'data:image/jpeg;base64,' . base64_encode($imagem_data);
        echo "
        <div class='col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 categoria-" . $row['categoria'] . "'>
          <div class='events_item'>
            <div class='thumb'>
              <a href='#'><img src='" . $imagem_src . "' alt=''></a>
              <span class='price'><h6>".$row['localizacao']."</h6></span>
            </div>
            <div class='down-content'>
              <span class='author'>".$row['contato']."</span>
              <h4>".$row['nome']."</h4>
            </div>
          </div>
        </div>
        ";
    }
} else {
    echo "0 results";
}
$conn->close();
?>