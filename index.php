<?php
// Configurações do banco de dados MySQL
$hostname = 'localhost';  // Nome do servidor MySQL
$username = 'id20852256_ahnert';  // Nome de usuário do MySQL
$password = 'Pazdejah1.';  // Senha do MySQL
$database = 'id20852256_usuarios';  // Nome do banco de dados

// Conexão com o banco de dados MySQL
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verifica se houve algum erro na conexão
if ($mysqli->connect_errno) {
    die('Falha na conexão com o banco de dados: ' . $mysqli->connect_error);
}

// Obtém os valores enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Insere os dados no banco de dados
$query = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($mysqli->query($query)) {
    echo 'Mensagem enviada com sucesso!';
} else {
    echo 'Erro ao enviar a mensagem: ' . $mysqli->error;
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Gabriel Andrade Ahnert</title>
    <style>
        @keyframes developer {
            0% {color: rgba(19, 92, 175, 0.425);}
            25% {color: rgba(100, 38, 180, 0.425);}
            50% {color: rgba(45, 161, 142, 0.425);}
            75% {color: rgba(50, 58, 170, 0.425);}
            100% {color: rgba(59, 206, 91, 0.425);}
        }
        body {
            margin: 0;
        }
        section {
            margin-bottom: 100px;
            background-color: black;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.795);
         
        }
        header .logo a {
            text-decoration: none;
            color:white;
        }
        header .logo {
            
            font-size: 23px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-left:0;
        }
        header .menu {
            margin-left: 50px;
            cursor: pointer;
            align-items: center;
        }
        .menu {
            display: flex;
            justify-content: flex-end;
        }
        .menu ul,
        .menu li {
            list-style: none;
        }
        .menu ul {
            display: flex;
        }
        .menu li a {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            padding-left: 10px ;
            padding-right: 10px;
            display: flex;
            height: 100px;
            align-items: center;
            border-bottom: 5px solid rgb(45, 161, 142);
        }
        .menu li a:hover {
            border-bottom: 5px solid black;
            color: black;
            
        }
        .menu .active a {
            border-bottom: 5px solid black;
            color: rgb(45, 161, 142);
        }
        .menu-opener{
            display: none;
            width: 30px;
            margin-right: 30px;
        }
        .container {
            display: flex;
            justify-content: space-around;
            height: 100vh;
        }
        .container .left-side {
            background-size: cover;
            box-shadow: rgba(45, 161, 142, 0.425);
            background-image: url(Imagens/eu.jpeg);
            flex: 0.4;
        }
        .container .left-side .left-title {
            text-shadow: 1px 1px 1px black;
            padding-top: 500px;
            color:rgba(5, 12, 20, 0.425);
            font-size: 100px;
            animation:developer ;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        }
        .thumbnail {
            padding: 0;
        }
        .container .right-side {
            background-color: black;
            text-align: center;
            flex: 1;
            background-size:auto;
            background-position: center;
            padding: 0;
        }
        .container .right-side {
            padding: 20px 10px;
        }
        .title {
            color: white;
        }
        .image img {
                width: 200px;
                
                
        }
        .image {
                width: 200px;
                height: 200px;
              }
        .image img {
                -webkit-transition: all 1s ease;
                /* Safari and Chrome */
                -moz-transition: all 1s ease;
                /* Firefox */
                -o-transition: all 1s ease;
                /* IE 9 */
                -ms-transition: all 1s ease;
                /* Opera */
                transition: all 1s ease;
              }
        .image:hover img {
                -webkit-transform: scale(2.25);
                /* Safari and Chrome */
                -moz-transform: scale(2.25);
                /* Firefox */
                -ms-transform: scale(2.25);
                /* IE 9 */
                -o-transform: scale(2.25);
                /* Opera */
                transform: scale(2.25);
              }
              form {
                background-image: url(https://media4.giphy.com/media/isqxY03RuhGxNbCPzY/giphy.gif?cid=ecf05e475ew8z6dqafbiiivjsraqtuw6whxe9216wv47ef13&ep=v1_gifs_search&rid=giphy.gif&ct=g);
                text-align: center;
                border: solid 1px black;
              }
              #contact-us {
                text-align: center;
                font-size: 40px;
              }
        @media (max-width: 767px) {
                /* Aplique os estilos aqui que deseja que sejam aplicados em telas menores ou iguais a 767px de largura */
                .menu-opener{
                    display: block;
                    width: 30px;
                    margin-right: 30px;
                }
                nav {
                    display: none;
                    position: absolute;
                    z-index: 99;
                    background-color: rgba(5, 12, 20, 0.425);
                    width: 80vw;
                    top: 100px;
                }
                .menu ul {
                    flex-direction: column;
                }
                .menu li a {
                    font-weight: bold;
                    height: 50px;
                    font-size: 25px;
                    border: none;
                }
                .menu li.active a {
                    border: none;
                    color:rgb(45, 161, 142);
                }
                header .logo a {
                    color: rgb(45, 161, 142);
                    font-size: 70px;
                }
                .logo {
                    margin-left: 30px;
                }
                header {
                    width:auto;
                    display: table-cell;
                }
                header .logo {
                    font-size: 18px; /* Reduza o tamanho da fonte para telas menores */
                    width: 100vh;
                }
            
                .container {
                   /* Altere a direção de exibição para empilhar os elementos verticalmente */
                    height: auto; /* Remova a altura fixa para que o conteúdo se ajuste à altura do conteúdo */
                    display: table-row;
                    width: auto;
                }

                .container .left-side,
                .container .right-side {
                    flex: auto; /* Permita que os elementos ocupem todo o espaço disponível verticalmente */
                    text-align: center;
                }
                .container .left-title {
                        justify-content: center;
                }
                .title {
                    color: white;
                    margin-top: 10px;
                }
                .image img {
                    width: 150px; /* Reduza o tamanho da imagem para telas menores */
                    margin-left: 270px;/* Remova a margem esquerda para centralizar a imagem */
                    align-items: center;
                    justify-content: center;
                    display: flex;
                    margin-top: 20px; /* Adicione um espaçamento inferior para separar as imagens */
                }
                .image:hover img {
                    -webkit-transform: scale(2);
                    /* Safari and Chrome */
                    -moz-transform: scale(100vh);
                    /* Firefox */
                    -ms-transform: scale(4);
                    /* IE 9 */
                    -o-transform: scale(4);
                    /* Opera */
                    transform: scale(4);
                  }
            }

    </style>
    <script type="text/javascript">
        window.onload = function(){
            document.querySelector(".menu").addEventListener("click", function(){
                if(document.querySelector(".menu nav").style.display == 'flex'){
                    document.querySelector(".menu nav").style.display = 'none';
                } else {
                    document.querySelector(".menu nav").style.display = 'flex';
                }
            });
        };
    </script>
</head>
<body>
    <header>
        <div class="logo"><a href="index.html">Gabriel Ahnert</a></div>
        <div class="menu">
            <img class="menu-opener" src="Imagens/menu.png" alt="">
            <nav>
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Our Projects</a></li>
                    <li><a href="#contact-us">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        <div class="left-side">
            <div class="left-title">
                Developer
            </div>
        </div>
        <div class="certificados ">
            <h2 style="color: white; text-align:center">Certificações </h5>
        </div>
        <div class="right-side">
                    <div class="title">
                    Certificação em HTML5
                    <br> 
                    e
                    CSS3
                    </div>
                    <div class="thumbnail">
                        <div class="image">
                          <img src="Imagens/HTML5.jpg" alt="image" />
                        </div>
                      </div>
                    <div class="title">
                    Certificação em Banco de Dados 
                    </div>
                    <div class="thumbnail">
                        <div class="image">
                          <img src="Imagens/Banco de dados.jpg" alt="image" />
                        </div>
                      </div>
                    <div class="title">
                    Certificação em GIT/GITHUB
                    </div>
                    <div class="thumbnail">
                        <div class="image">
                          <img src="Imagens/Git.jpg" alt="image" />
                        </div>
                      </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>
    <footer>
        <h2 id="contact-us">Contact us</h2>
        <form method="post" action="enviar_mensagem.php">
            <label for="nome">Nome: <br></label>
            <input type="text" name="nome" required><br><br>
            
            <label for="email">Email: <br></label>
            <input type="email" name="email" required><br><br>
            
            <label for="mensagem">Mensagem: <br></label>
            <textarea name="mensagem" required></textarea><br><br>
            
            <input type="submit" value="Enviar Mensagem">
        </form>
    </footer>
</body>
</html>