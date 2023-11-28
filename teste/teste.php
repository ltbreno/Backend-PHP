<?php 

    if(isset($_POST['submit']))
    {

        include_once('config.php') ;

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $equipe = $_POST['equipe'];

        $result = mysqli_query($conexao,"INSERT INTO new_table(nome, email, cidade, estado, equipe) 
                  VALUES ('$nome', '$email', '$cidade', '$estado', '$equipe')");
        

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
    <style>
        * {
    background-color: #F7FEFB;
    font-family: 'Roboto', sans-serif;
}

.home {
    display: flex;
    flex-direction: row;

    align-items: center;
    justify-content: space-evenly;

    background: red
}

.home a {
    text-decoration: none;
    color: black;

    background: red ; 
    transition: transform 0.3s;
    color: #F7FEFB ;
}

.home a:hover {
    transform: scale(1.10);
    text-shadow: 4px 4px 2px rgba(0,0,0,0.6);
    color: #F7FEFB ;
}

.f1-logo {
    display: flex;
    flex-direction: column;

    width: 200px;
    height: 150px;

    border-radius: 5px;

    justify-content: center;
    align-items: center;
    margin: auto;
}

.title {
    display: flex;
    flex-direction: column;

    margin-top: 1rem;
    justify-content: center;
    align-items: center;
}

.text-title {
    display: flex;
    flex-direction: row;

    width: 150px;

    margin-top: 1rem;
    margin: auto;
    
    justify-content: center;
    align-items: center;
}

.ul-color {
    background: red;
}

.footer {
	background-color: #15151E ;
	color: #fff;
	padding: 20px;
	text-align: center;
	margin-top: 5%;
}

.footer p , ul , a {
    background-color: #15151E
}

.tables {
    display: flex;
    flex-direction: row;

    align-items: center;
    justify-content: center;
}

.table-title {
    display: flex;
    flex-direction: row;

    align-items: center;
    justify-content: center;
}

.regras {
    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;
    margin: auto;
    text-align: center;
}

.regras ul {
    background-color: #fff;
}

.ranking  {
    list-style: none;
    transition: transform 0.4s;
    color: #000000 ;
    background-color:#F7FEFB ;
}

.ranking:hover {
    transform: scale(1.10);
    text-shadow: 4px 4px 2px rgba(0,0,0,0.6);
    color: #000000;
}

.footer ul {
    background-color: #15151E;
}

.content { 
    display: flex;
    flex-direction: column;
    width: 250px;

    margin: auto;
    
}

@media (min-width: 249px) and (max-width: 480px) 
{
    .home {
        display: flex;
        flex-direction: column;
        padding:  1rem;
    }

    .ranking { 
        display: flex;
        flex-direction: column;

        margin-top: 1rem;
    }

    .ranking-table {
        display: flex;
        flex-direction: column;

        margin-top: 1rem;
        width: 100%;

        align-items: center;
    }
    
}

/* ----------------------------------------------------------------------------------------- */
/* Telas Médias */
@media (min-width: 481px)  and (max-width: 1024px) 
{
    
        .home {
            display: flex;
            flex-direction: column;
            padding:  1rem;
        }
    
        .ranking { 
            display: flex;
            flex-direction: column;
    
            margin-top: 1rem;
        }
    
        .ranking-table {
            display: flex;
            flex-direction: column;
    
            margin-top: 1rem;
            width: 100%;
    
            align-items: center;
        }
        
    }
    </style>
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
                 </ul> <hr color="black">
        </div>
    </header> 
<form action="teste.php" method="POST">
    <fieldset>
        <div class="content">
        Digite seu Nome :   <input type="text" name="nome" id="nome" required /> <br>
        Digite seu Email :   <input type="text" name="email" id="email" required /> <br>
        Digite sua Cidade :   <input type="text" name="cidade" id="cidade" required /> <br>
        Digite seu Estado :   <input type="text" name="estado" id="estado" required /> <br>
        Crie sua Equipe :   <input type="text" name="equipe" id="equipe" required /> <br>
        
            <br><br>
            <input type="submit" name="submit" id="submit"  />
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