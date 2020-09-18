<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php
session_start();
include('conexao.php');
$result = $bd->query("SELECT * FROM peca");
?>
<head>
<title>Mecânica Gomes</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<?php
							if(isset($_SESSION['usuario'])){
								echo "<li ><a class='lock'> Olá, ".$_SESSION['usuario']."!</a></li>";
								echo "<li><a  href='logout.php'>Sair</a></li>";
							}else{
							echo'<li ><a class="lock"  href="login.php"  >Login</a></li>';
							echo'<li><a  href="register.php"  >Cadastro</a></li>';
							}
						?>
					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty"> Zerar Carrinho</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		<div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Inicio</a></li>	
				      <li><a class="color1" href="#">Mecânica Gomes</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="index.php">Peças</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="contact.php">Serviços</a></li>
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
					</li>
			
				<li><a class="color4" href="blog_single.php">Quem somos</a></li>				
				<li><a class="color6" href="contact.php">Contatos</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Serviços em motor  </h3>
						<p>Fazemos servisos em motor, troca de peças e concerto em motores de caminhões a disel de todos os modelos e marcas </p>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>Suspenção </h3>
						<p>Serviços geral em suspenção, trabalho com feixe de mola, troca de parafuso de centro, braçadeira para feixe de mola, troca de buxas para mola. </p>
												

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Serviços de Freio</h3>
						<p>Serviços de freios a ar e a oleo, fazendo reparos de valvulas, troca de pastilhas e lonas de freio, troca de olheo de ferio, reparos para cuicas. </p>
								

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NAVEGUE EM NOSSO SITE</h1>
		<div class="grid-in">
		<?php
			while($peca = $result->fetch_object()){
				echo'<div class="col-md-4 grid-top simpleCart_shelfItem">';
						echo'<div class="product-at ">';
							echo'<a href="single.php"><img class="img-responsive" src="'.$peca->imagem.'" alt="">';
						echo'</a>';	
						echo'</div>';
						echo'<p><a href="single.php">'.$peca->nome.'</a></p>';
						echo'<a href="#" class="item_add"><p class="number item_price"><i> </i>'.$peca->preco.'</p></a>';						
					echo'</div>';
			
			}
		?>	
		<div class="clearfix"> </div>
	</div>
	<div class="content-top-bottom">
		<h2><br>NOSSAS INSTALAÇÕES</h2>
		<div class="col-md-6 men">
			<a href="contact.php" class="b-link-stripe thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="contact.php" class="b-link-stripe thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="contact.php" class="b-link-stripe thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="contact.php" class="b-link-stripe thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
</div>
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>ONDE NOS ENCONTRAR?</h4>
				<ul class="nav-bottom">
						<p>Avenida Vingt Rosado,280 </p>
						<p>Bairro Nações Unidas </p>
						<p>Pau dos Ferros/RN - Brasil </p>
						<li><a href="contact.php">Como chegar</a></li>
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTATOS</h4>
				
					<p>Contrate nossos serviços</p>
					<p>Atendemos você melhor!</p>
					<p>Escritório: (84) 99615-4795</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
				<img src="images/logo2.png" alt style="height: 200px;">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
			