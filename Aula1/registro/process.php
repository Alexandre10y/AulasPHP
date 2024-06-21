<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha

    $sql = "INSERT INTO users (name, birthdate, email, password) VALUES ('$name', '$birthdate', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redireciona para a página de boas-vindas com o nome do usuário
        header("Location: ../home/home.php?name=" . urlencode($name));
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
