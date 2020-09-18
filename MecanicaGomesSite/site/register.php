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
												<p><a href="javascript:;" class="simpleCart_empty">Zerar Carrinho</a></p>

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


	
	
<!--content-->
<div class=" container">
<div class=" register">
	<h1>Cadastro</h1>
		  	  <form method="POST" action="cadastro.php"> 
				 <div class="col-md-6 register-top-grid ">
					<h3>Informações Pessoais</h3>
					 <div>
						<span>Nome</span>
						<input name="nome" type="text" required> 
					 </div>
					 <div>
						<span>Endereço</span>
						<input name="endereco" type="text" required> 
					 </div>
					 <div>
						<span>Telefone</span>
						<input name="telefone" type="text" id="telefone" onkeypress="this.value = formatarTelefone(event)" maxlength = "15"required> 
					 </div>
							 <div>
								<span>Email</span>
								<input name="email" type="text" required>
							 </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Aceito os termo de uso e condições</label>
					   </a>
					 </div>
					 
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Informações de Login</h3>
							 
							 <div>
								<span>Senha</span>
								<input name="senha" type="password" minlength="6"required>
							 </div>
							 <div>
								<span>Confirmar senha</span>
								<input name="senhaConfirma" type="password" onpaste= "return false" required>
							 </div>
							 <input type="submit" name="submit" value="Cadastra-se">
							
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>

<script type="text/javascript">


		
	function formatarTelefone(evt){
		
		vr = (navigator.appName == 'Netscape') ?evt.target.value: evt.srcElement.value;
		if(vr.length == 2) vr ="("+ vr + ")";
		if(vr.length == 9) vr = vr + "-";
		
		return vr;
	}
	


</script>

<!--//content-->
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
			