<?php  

if(isset($_POST['submit']))
{
  

    include_once('conexaofutsal.php');

          $posicao =  $_POST['posicao'];
          $sala = $_POST['sala'];
          $pontos = $_POST['pontos'];
          $quantidadejogos = $_POST['quantidadejogos'];

      $result = mysqli_query($conexao, "INSERT INTO textos(posicao, sala, pontos, quantidadejogos)
     VALUES ('$posicao','$sala', '$pontos', '$quantidadejogos')");


}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link rel="stylesheet" href="../css/futsal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" type="image/x-icon" href="../../Site mercury home e about/Site mercury home e about/img/icone miesc.png">
</head>

<body>
	<header>
    <nav class="miesc">
        <div class="logo">
            <img src="../../Site mercury home e about/Site mercury home e about/img/miesc.png" widht="30px" height="60px">       
        </div>
        <div class="nav-list">
        	<ul>
            <li class="nav-item"><a href="../../Site mercury home e about/Site mercury home e about/htmls/home.html" class="nav-link">Home</a></li>  
            <li class="nav-item"><a href="../../Site mercury home e about/Site mercury home e about/htmls/index.html" class="nav-link">About</a></li> 
            <li class="nav-item"><a href="" class="nav-link">Feed</a></li>
			<li class="nav-item"><a href="" class="nav-link">Resources</a>
              <ul>
                <li class="updraft"><a href="camisas.html" class="nav-link">Camisas</a></li>
                <li class="updraft"><a href="campeoes.html" class="nav-link">Campeões</a></li>
                <li class="updraft"><a href="../resultados futsal/resultado.php" class="nav-link">Resultados</a></li>
                <li class="updraft"><a href="classificacao.html" class="nav-link">Classificação</a></li>
             </ul>
             </li>
			</ul>
	  </div>
      <div class="mobile-menu-icon">
        <button onclick="menuShow()"><img class="icon" src="../img/menu.svg" alt=""></button>
    </div>
    </nav>
    <div class="mobile-menu">
      <ul>
        <li class="nav-item"><a href="../../Site mercury home e about/Site mercury home e about/htmls/home.html" class="nav-link">Home</a></li>  
        <li class="nav-item"><a href="../../Site mercury home e about/Site mercury home e about/htmls/index.html" class="nav-link">About</a></li> 
        <li class="nav-item"><a href="" class="nav-link">Feed</a></li>
        <li class="nav-item"><a href="" class="nav-link">Events</a></li>
    </ul>
  </div>
</header>
	
	 <div class="fundo">
      
	</div>
	  <center> 
<div class="textos">
  <h1>Se cadastre como jogador</h1>
  <br>
  <div class="botao3">
  	<a href="../../Cadastro/html (1).html">
		<button>Se cadastre</button>
	</a>
  </div>
	  </center>
	oi<Br>
	oi<Br>
	oi<Br>
	oi<Br>
	oi<Br>
	oi<Br>
    <form action="futsal.php" method="post">
          
          <br><br>
      <div class= "geral">
       <div class="box">
       <div class="inputBox">
              <input type="text" name="jogos" id="jogos" class="inputUser" required>
              <label for="jogos" class="caixa"> Digite o horário</label>
              </div>
              </div>
          <br><br>
          <div class="box2">
         <div class="inputBox">
              <input type="text" name="turma" id="turma" class="inputUser" required>
              <label for="turma" class="caixa">Turma 1</label>
            </div>
            </div>

            <div class="box3">
            <div class="inputBox">
              <input type="text" name="turma2" id="turma2" class="inputUser" required>
              <label for="turma2" class="caixa">Turma 2</label>
            </div>
          
          </div>
 
          <div class="enviarbd">
            <input type="submit" name="submit" id="submit"> 
          
            </div>
      </div>
	<!-- Começo Rodapé -->
              <footer>
                  <div id="footer_content">
                      <div id="footer_contacts">
                         <img src="../../Site mercury home e about/Site mercury home e about/img/mercury.png" widht="20" height="60">
                  <br>
                          <font color="0E3659">
                  <p>Organização, comunicação e <br> união, na palma da sua mão. </p>
                  </font>
          
                          <div id="footer_social_media">
                              <a href="https://instagram.com/mercury_.br?igshid=ZDdkNTZiNTM=" class="footer-link" id="instagram">
                                <i class="fa-brands fa-instagram"></i>
                              </a>
                              <a href="#" class="footer-link" id="whatsapp">
                                  <i class="fa-brands fa-whatsapp"></i>
                              </a>
                          </div>
                      </div>
                      
                      <ul class="footer-list">
                          <li>
                              <h3>Home</h3>
                          </li>
                          <li>
                              <a href="#" class="footer-link">Feed</a>
                          </li>
                          <li>
                              <a href="#" class="footer-link">Events</a>
                          </li>
                          <li>
                              <a href="index.html" class="footer-link">About</a>
                          </li>
                      </ul>
          
                      <ul class="footer-list">
                          <li>
                              <h3>Events</h3>
                          </li>
                          <li>
                              <a href="#" class="footer-link">Evento 1</a>
                          </li>
                           <li>
                              <a href="#" class="footer-link">Evento 2</a>
                          </li>
                           <li>
                              <a href="#" class="footer-link">Evento 3</a>
                          </li>
                          
                      </ul>
          
                      <div id="footer_subscribe">
                          <h3>Utilize o MIESC</h3>
                  <div class="botao2">
                      <a href="../../Site mercury home e about/Cadastro/html (1).html">
					      <button>Se cadastre</button>
					  </a>
                  </div>
                      </div>
                  </div>
          
                  <div id="footer_copyright">
                      &#169
                      2023 Mercury
                  </div>
              </footer>              
</body>
</html>
