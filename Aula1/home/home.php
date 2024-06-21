<?php
if (!isset($_GET['name'])) {
    header("Location: ../index.html");
    exit();
}

$name = htmlspecialchars($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="home.css">
    <style>
      
    </style>
</head>
<body>
    <div class="header">
        <a href="../index.html">Home</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
        <div class="dropdown">
            <span>
                <?php 
                    echo $name; 
                ?>
            </span>
            
            <div class="dropdown-content">
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </div>
</body>
</html>
