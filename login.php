<?php

//variaveis para conexao com o BD
$servername="localhost";
$database="otp"; 
$username="root";
$password="";

//conectando ao BD
$conn = mysqli_connect($servername, $username, $password, $database);

//checando a conexao
if(!$conn){
    die("falha na conexão com o banco de dados:".mysqli_connect_error());
}

//variavies que recebem o login
$user_login = $_POST["login"];
$user_senha = $_POST["password"];

//selecionando o BD
$conexao = mysqli_connect($servername, $username, $password) or die ('Erro na conexão');
mysqli_select_db($conexao,$database) or die ('Erro na seleção do BD');

//selecionando a tabela
$query = "SELECT ID_login, login_user, senha FROM logar";
$result_query = mysqli_query ($conexao, $query) or die ("");

//fazendo a comparação dos dados que o usuario digitou com o BD
while ($row = mysqli_fetch_array($result_query)){
    if(($user_login == $row['login_user']) && ($user_senha == $row['senha'])){
    
        session_start();
        $_SESSION['id']=$row['ID_login'];

        ?>
        <script>
            window.setTimeout(finalizar_login,0000);
            function finalizar_login(){
                window.location.href = "index.php";
            };
        </script>
                
    <?php
    }else{
    ?>
        <script>
            window.setTimeout(retornar_login,0000);
            function retornar_login(){
                window.location.href = "main.php";
            };
        </script>
    <?php
    }
        break;
}


?>