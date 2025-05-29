
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css">
    <title>Contato</title>
</head>
<body>
    <nav>
        <img src="" alt="">

        <ul>
            <li>
                <a href="index.html">INICIO</a>
                <a href="palestras.html">PALESTRAS</a>
                <a href="contato.php">CONTATO</a>
            </li>
        </ul>
    </nav>
  <div class="f">
    <main class="info">
     
    <h2>Entre em Contato</h2>


    <form action="contato.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>


        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" required><br><br>


        <label for="assunto">Assunto:</label><br>
        <textarea name="assunto" id="assunto" rows="5" required></textarea><br><br>


        <input type="submit" value="Enviar">
    </form>


<?php


if(isset($_POST["nome"])){
    $nome=$_POST["nome"];
    echo "<h1>O e-mail foi realizado com sucesso, $nome!</h1>";
  }
?>


</main>
</div>


<footer>
    <p class="footer">Copyright ©  © 2025 Feira de Ciências SENAI. Todos os direitos reservados. </p></footer>
</body>
</html>
