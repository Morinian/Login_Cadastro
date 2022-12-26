<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="Index">
    <link rel="shortcut icon" href="../imagens/cidade_icon.png">

    <link rel="stylesheet" type="text/css" href="../css/prova.css">

    <title>Piltover e Zaun</title>
</head>
<body>

    <nav class="menu">
            <a href="../html/principal.html">Piltover e Zaun</a>
            
            <ul>
                <li><a href="prova.php">Prova</a></li>
                <li><a href="sair.php">Deslogar</a></li>
            </ul>
    </nav>

    <br></br>
    <main class="Caixinha">

<?php   
    $hoje= date ('d/m/y');
        session_start();

        if (!empty($_SESSION['codigo'])) {
            $nome = $_SESSION['nome'];
            echo "Hoje é dia ".$hoje."<br><br>";
        } else {
            header("Location: login.php");
        }
?>

<?php
$sql = new mysqli("sql102.epizy.com","epiz_31749696","Richmandark147","epiz_31749696_pez");

$nota = 0 ;

if ($_POST["p1"] == "c") {
	$nota = $nota + 1;
	echo "1) Qual lema de Piltover?<br>";
    echo "Resposta Correta<br><br>";
}else{
    echo "1) Qual lema de Piltover?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa C) Futuro e Progresso<br><br>";
}


if ($_POST["p2"] == "b") {
	$nota = $nota + 1;
	
    echo "2) Qual espécie foi para extinta em prol da evolução tecnologica?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "2) Qual espécie foi para extinta em prol da evolução tecnologica?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa B) Brackern<br><br>";
}

if ($_POST["p3"] == "c") {
	$nota = $nota + 1;
	
    echo "3) Zaun é conhecido por ser um lugar...<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "3) Zaun é conhecido por ser um lugar...<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa c) Poluido e Perigoso<br><br>";
}

if ($_POST["p4"] == "a") {
	$nota = $nota + 1;
	
    echo "4) Como é a cultura de Zaun? <br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "4) Como é a cultura de Zaun? <br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Rica e vibrante <br><br>";
}


if ($_POST["p5"] == "b") {
	$nota = $nota + 1;
	
    echo "5) Caitlyn é conhecida por ...<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "5) Caitlyn é conhecida por ...<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa b) Acabar sozinha com o crime na cidade de Piltover <br><br>";
}

if ($_POST["p6"] == "b") {
	$nota = $nota + 1;
	
    echo "6)Qual o nome do clã de Camille <br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "6)Qual o nome do clã de Camille<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa b) Clã Ferro <br><br>";
}

if ($_POST["p7"] == "a") {
	$nota = $nota + 1;
	
    echo "7) Onde Ezreal achou sua manopla?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "7) Onde Ezreal achou sua manopla?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Shurima <br><br>";
}

if ($_POST["p8"] == "b") {
	$nota = $nota + 1;
	
    echo "8) Quem é Heimerdinger ?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "8) Quem é Heimerdinger ?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa b) Inventor com uma mente inovadora <br><br>";
}

if ($_POST["p9"] == "c") {
	$nota = $nota + 1;
	
    echo "9) Quem se juntou a pesquisa de Jayce?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "9) Quem se juntou a pesquisa de Jayce?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa c) Viktor <br><br>";
}

if ($_POST["p10"] == "a") {
	$nota = $nota + 1;
	
    echo "10) Por que Orianna é um corpo de engrenagens?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "10) Por que Orianna é um corpo de engrenagens?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Por conta do seu corpo que era enfraquecido<br><br>";
}

if ($_POST["p11"] == "c") {
	$nota = $nota + 1;
	
    echo "11)  Quem a Vi possui ligação onde fez ela se aliar com Caitlyn <br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "11)  Quem a Vi possui ligação onde fez ela se aliar com Caitlyn <br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa c) Jinx <br><br>";
}


if ($_POST["p12"] == "b") {
	$nota = $nota + 1;
	
    echo "12) O que é Blitzcrank?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "12) O que é Blitzcrank?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa b) Um golem movido a vapor<br><br>";
}

if ($_POST["p13"] == "a") {
	$nota = $nota + 1;
	
    echo "13) Quem é o ekko?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "13) Quem é o ekko?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) O prodígio das ruas de Zaun <br><br>";
}

if ($_POST["p14"] == "c") {
	$nota = $nota + 1;
	
    echo "14) Quem é que assina seus atos com chamativos grafites?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "14) Quem é que assina seus atos com chamativos grafites?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa c) Jinx<br><br>";
}

if ($_POST["p15"] == "a") {
	$nota = $nota + 1;
	
    echo "15) Quem é Singed?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "15) Quem é Singed?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Um alquimista zaunita<br><br>";
}

if ($_POST["p16"] == "a") {
	$nota = $nota + 1;
	
    echo "16) Qual profissão do Dr.Mundo ?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "16) Qual profissão do Dr.Mundo ?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Médico<br><br>";
}

if ($_POST["p17"] == "b") {
	$nota = $nota + 1;
	
    echo "17) Quem é Twitch ?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "17) Quem é Twitch ?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa b) Um rato zaunita<br><br>";
}

if ($_POST["p18"] == "b") {
	$nota = $nota + 1;
	
    echo "18) Onde Viktor nasceu ?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "18) Onde Viktor nasceu ?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa b) Zaun<br><br>";
}

if ($_POST["p19"] == "a") {
	$nota = $nota + 1;
	
    echo "19) Quem é Warwick?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "19) Quem é Warwick?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Um monstro que caça pelas ruas cinzentas de Zaun<br><br>";
}

if ($_POST["p20"] == "a") {
	$nota = $nota + 1;
	
    echo "20) o que é o zac ?<br>";
	echo "Resposta Correta<br><br>";
}else{
    echo "20) o que é o zac ?<br>";
	echo "Resposta incorreta <br>";
	echo "Resposta certa a) Produto de um experimento <br><br>";
}

echo "Você acertou $nota questões. <br><br>";

$sql->query("INSERT INTO prova(nome, data_p, nota) VALUES('$nome', '$hoje', '$nota')");

echo "Dados salvos com sucesso";

?>

</main>

<footer>
    <p>&copy;2020 - Paula Martins</p>
</footer>

</body>
</html>