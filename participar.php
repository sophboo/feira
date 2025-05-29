<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Participante</title>
    <link rel="stylesheet" href="cadatro.css">
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


 <main class="info">
    <h2>Cadastro de Participante</h2>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>


        <label for="sobrenome">Sobrenome:</label><br>
        <input type="text" name="sobrenome" id="sobrenome" required><br><br>


        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>


        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" required><br><br>


        <input type="submit" value="Cadastrar">
    </form>


  <?php


if(isset($_POST["nome"])){
    $nome=$_POST["nome"];
    echo "<h1>Seu cadastro foi realizado com sucesso, $nome!</h1>";
  }
?>  
</main>
    <p class="footer">Copyright ©  © 2025 Feira de Ciências SENAI. Todos os direitos reservados. </p>
</body>
</html>
