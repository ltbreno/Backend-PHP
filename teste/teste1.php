<?php
    if(isset($_POST['submit'])) {
        include_once('config.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $primeiro = $_POST['primeiro'];
        $segundo = $_POST['segundo'];
        $terceiro = $_POST['terceiro'];
        $quarto = $_POST['quarto'];
        $quinto = $_POST['quinto'];
        $sexto = $_POST['sexto'];
        $setimo = $_POST['setimo'];
        $oitavo = $_POST['oitavo'];
        $nono = $_POST['nono'];
        $decimo = $_POST['decimo'];
        $primeirogrid = $_POST['primeirogrid'];
        $segundogrid = $_POST['segundogrid'];
        $terceirogrid = $_POST['terceirogrid'];
        $quartogrid = $_POST['quartogrid'];
        $voltarapida = $_POST['voltarapida'];

        // Prepared statement para inserção
        $resultado = mysqli_query ($conexao ,"INSERT INTO palpites(nome, email, primeiro, segundo, terceiro, quarto, quinto, sexto, setimo, oitavo, nono, decimo, primeirogrid, segundogrid, terceirogrid , quartogrid, voltarapida) 
        VALUES ('$nome' , '$email', '$primeiro', '$segundo', '$terceiro', '$quarto', '$quinto', '$sexto', '$setimo', '$oitavo', '$nono', '$decimo', '$primeirogrid', '$segundogrid', '$terceirogrid', '$quartogrid', '$voltarapida')");

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolão da F1</title>
    <!-- Imagem do titulo -->
    <link rel="icon" href="/images/noun-formula-1-car-3572060.png" type="image/icon type">
    <!-- Link do css -->
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <header>
        <div class="header">
            <img class="f1-logo" src="/images/F1 logo.webp"> 
               <div class="ul-color"> <hr color="black">
                <ul class="home">
                    <a href="/index.html">Home</a>
                     <a href="/pages/calendario.html">Calendário</a>
                     <a href="/pages/pilotos.html">Pilotos e Equipes</a>
                     <a href="/pages/classificacao.html">Classificação</a>
                     <a href="/pages/contato.html">Contato</a>
                     <a href="/pages/regras.html">Regras</a>
                     <a href="/pages/palpites.html">Palpites</a>
                 </ul> <hr color="black">
        </div>
    </header> 
<form action="teste1.php" method="POST">
    <fieldset>
        <div class="content">
                Digite seu nome :   <input type="text" name="nome" id="nome" required /> <br>
                Digite seu email :   <input type="text" name="email" id="email" required /> <br>
                Primeiro :   <input type="text" name="primeiro" id="primeiro" required /> <br>
                Segundo :   <input type="text" name="segundo" id="segundo" required /> <br>
                Terceiro :   <input type="text" name="terceiro" id="terceiro" required /> <br>
                Quarto :   <input type="text" name="quarto" id="quarto" required /> <br>
                Quinto :   <input type="text" name="quinto" id="quinto" required /> <br>
                Sexto :   <input type="text" name="sexto" id="sexto" required /> <br>
                Setimo :   <input type="text" name="setimo" id="setimo" required /> <br>
                Oitavo :   <input type="text" name="oitavo" id="oitavo" required /> <br>
                Nono :   <input type="text" name="nono" id="nono" required /> <br>
                Decimo :   <input type="text" name="decimo" id="decimo" required /> <br>
                Primeiro Grid :   <input type="text" name="primeirogrid" id="primeirogrid" required /> <br>
                Segundo Grid :   <input type="text" name="segundogrid" id="segundogrid" required /> <br>
                Terceiro Grid :   <input type="text" name="terceirogrid" id="terceirogrid" required /> <br>
                Quarto Grid :   <input type="text" name="quartogrid" id="quartogrid" required /> <br>
                Volta Rapida :   <input type="text" name="voltarapida" id="voltarapida" required /> <br>
            <br><br>
            <input type="submit" name="submit" id="submit" />
        </div>
    </fieldset>
</form>
    <footer class="footer">
        <p>&copy; 2023 - Todos os direitos reservados</p>
        <p>Entre em contato pelo e-mail: brenosas2003@gmail.com</p>
           <ul>
                <a href="#">Termos de uso</a></li>
                <a href="#">Política de privacidade</a></li>
                <a href="#">Sobre nós</a></li>
          </ul>
 </footer>

</body>
</html>