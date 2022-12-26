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

<style type="text/css">

body{
    background-image: url(../imagens/fundo_prova.jpeg);
    background-size:cover;
    background-repeat: no-repeat;
}


</style>

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

	if(!empty($_SESSION['codigo'])) {
		echo " Olá, ".$_SESSION['nome']." seja bem vindo ao nosso site <br>";
		echo "hoje é dia ".$hoje."<br><br>";
	}else{
	    header("Location: login.php");
	}

    ?>


<h1 >Quiz de Piltover e Zaun</h1>

<form action="avaliacao.php" method="POST">
        <div id="prova">

                <Label>1) Qual lema de Piltover?</label1>
                <br></br>
                <input type="radio" name="p1" value="a">a) Revolução e Tirania<br>
                <input type="radio" name="p1" value="b">b) Futuro é focado no passado<br>
                <input type="radio" name="p1" value="c">c) Futuro e Progresso<br>
                <br></br>

                <Label>2) Qual espécie foi para extinta em prol da evolução tecnologica?</label1>
                <br></br>
                <input type="radio" name="p2" value="a">a) Yordles<br>
                <input type="radio" name="p2" value="b">b) Brackern<br>
                <input type="radio" name="p2" value="c">c) Vastaya<br>
                <br></br>

                <Label>3) Zaun é conhecido por ser um lugar...</label1>
                <br></br>
                <input type="radio" name="p3" value="a">a) Limpo e amigável <br>
                <input type="radio" name="p3" value="b">b) Vazio e frio<br>
                <input type="radio" name="p3" value="c">c) Poluido e Perigoso<br>
                <br></br>

                <Label>4) Como é a cultura de Zaun?</label1>
                <br></br>
                <input type="radio" name="p4" value="a">a) Rica e vibrante<br>
                <input type="radio" name="p4" value="b">b) Antiga e tradicional<br>
                <input type="radio" name="p4" value="c">c) Desconhecida e simbólica<br>
                <br></br>

                <Label>5) Caitlyn é conhecida por ...</label1>
                <br></br>
                <input type="radio" name="p5" value="a">a) Ter seus planos arruinados por nunca conseguir capturar alguém<br>
                <input type="radio" name="p5" value="b">b) Acabar sozinha com o crime na cidade de Piltover<br>
                <input type="radio" name="p5" value="c">c) Subir na vida financeiramente e comprar o seu cargo de melhor investigadora de Piltover <br>
                <br></br>

                <Label>6)Qual o nome do clã de Camille</label1>
                <br></br>
                <input type="radio" name="p6" value="a">a) Clã do Progresso<br>
                <input type="radio" name="p6" value="b">b) Clã Ferro<br>
                <input type="radio" name="p6" value="c">c) Clã Bronze<br>
                <br></br>

                <Label>7) Onde Ezreal achou sua manopla?</label1>
                <br></br>
                <input type="radio" name="p7" value="a">a) Shurima<br>
                <input type="radio" name="p7" value="b">b) Piltover<br>
                <input type="radio" name="p7" value="c">c) Targon<br>
                <br></br>

                <Label>8) Quem é Heimerdinger ?</label1>
                <br></br>
                <input type="radio" name="p8" value="a">a) Cientista lunático<br>
                <input type="radio" name="p8" value="b">b) Inventor com uma mente inovadora<br>
                <input type="radio" name="p8" value="c">c) Inventor rigido que não preza por uma evolução<br>
                <br></br>

                <Label>9) Quem se juntou a pesquisa de Jayce?</label1>
                <br></br>
                <input type="radio" name="p9" value="a">a) Caitlyn <br>
                <input type="radio" name="p9" value="b">b) Heimerdinger <br>
                <input type="radio" name="p9" value="c">c) Viktor<br>
                <br></br>

                <Label>10) Por que Orianna é um corpo de engrenagens?</label1>
                <br></br>
                <input type="radio" name="p10" value="a">a) Por conta do seu corpo que era enfraquecido<br>
                <input type="radio" name="p10" value="b">b) Por causa de um acidente que sofreu <br>
                <input type="radio" name="p10" value="c">c) Ela nunca foi humana de carne e osso <br>
                <br></br>


                <Label>11)  Quem a Vi possui ligação onde fez ela se aliar com Caitlyn</label1>
                <br></br>
                <input type="radio" name="p11" value="a">a) Viktor<br>
                <input type="radio" name="p11" value="b">b) jayce<br>
                <input type="radio" name="p11" value="c">c) Jinx<br>
                <br></br>

                <Label>12) O que é Blitzcrank?</label1>
                <br></br>
                <input type="radio" name="p12" value="a">a) Um das maiores invenções de jinx para o caos<br>
                <input type="radio" name="p12" value="b">b) Um golem movido a vapor<br>
                <input type="radio" name="p12" value="c">c) Uma maquina comum entre todas as outras<br>
                <br></br>

                <Label>13) Quem é o ekko?</label1>
                <br></br>
                <input type="radio" name="p13" value="a">a) O prodígio das ruas de Zaun<br>
                <input type="radio" name="p13" value="b">b) Um ladrão muito habilidoso rival de Caitlyn<br>
                <input type="radio" name="p13" value="c">c) Um terrorista que quer destruir o tempo<br>
                <br></br>

                <Label>14) Quem é que assina seus atos com chamativos grafites?</label1>
                <br></br>
                <input type="radio" name="p14" value="a">a) Ekko<br>
                <input type="radio" name="p14" value="b">b) Singed<br>
                <input type="radio" name="p14" value="c">c) Jinx<br>
                <br></br>

                <Label>15) Quem é Singed?</label1>
                <br></br>
                <input type="radio" name="p15" value="a">a) Um alquimista zaunita<br>
                <input type="radio" name="p15" value="b">b) Um inventor prestigio de Piltover<br>
                <input type="radio" name="p15" value="c">c) O melhor mercador de Zaun que presa pela proteção de Piltover e Zaun<br>
                <br></br>

                <Label>16) Qual profissão do Dr.Mundo ?</label1>
                <br></br>
                <input type="radio" name="p16" value="a">a) Médico<br>
                <input type="radio" name="p16" value="b">b) Terrorista<br>
                <input type="radio" name="p16" value="c">c) Mecânico<br>
                <br></br>

                <Label>17) Quem é Twitch ?</label1>
                <br></br>
                <input type="radio" name="p17" value="a">a) Uma rede social <br>
                <input type="radio" name="p17" value="b">b) Um rato zaunita<br>
                <input type="radio" name="p17" value="c">c) Uma peste de Piltover<br>
                <br></br>

                <Label>18) Onde Viktor nasceu ?</label1>
                <br></br>
                <input type="radio" name="p18" value="a">a) Piltover<br>
                <input type="radio" name="p18" value="b">b) Zaun<br>
                <input type="radio" name="p18" value="c">c) Noxus<br>
                <br></br>

                <Label>19) Quem é Warwick?</label1>
                <br></br>
                <input type="radio" name="p19" value="a">a) Um monstro que caça pelas ruas cinzentas de Zaun<br>
                <input type="radio" name="p19" value="b">b) Um protetor que faz de tudo em Piltover<br>
                <input type="radio" name="p19" value="c">b) Um assassino louco<br>
                <br></br>

                <Label>20) o que é o zac ?</label1>
                <br></br>
                <input type="radio" name="p20" value="a">a) Produto de um experimento <br>
                <input type="radio" name="p20" value="b">b) Uma ação quimica produzida de um erro em piltover<br>
                <input type="radio" name="p20" value="c">c) Um criação complexa para destruir Piltover e Zaun<br>
                <br></br>

                        
                <button type="submit">Enviar Respostas</button>
                
                <br></br>
                            
        </form>
</main> 

<br></br>

 <footer>
    <p>&copy;2020 - Paula Martins</p>
</footer>

</body>
</html>