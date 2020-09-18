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
 

<script src="js/main.js"></script>
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
<div>
	<h1 alt style = "text-align: center;">EM CONSTRUÇÃO</h1>
	
</div>
<!--content-->
<!--
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Navegue</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="index.php">PEÇAS</a>
		</li>
		<li class="item2"><a href="contact.php">SERVIÇOS</a>
		</li>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!----
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">VOLTE A COMPRAR!</h6>
						<a href="index.php" class="shop-now">PEÇAS</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">MOTOR</a></li>
										<li><a href="#">GOMES</a></li>
										<li><a href="#">PEÇAS</a></li>
										
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div>
				<!---
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Mais Vendidos</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/maneco.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="#" >Maneco</a></h6>
								
								<span class=" price-in1"> $120.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/catracaDeFreio.png" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="#" >Catraca de Freio</a></h6>
								
								<span class=" price-in1"> $120.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
			<div class="flexslider">
  <ul class="slides">
    <li data-thumb="images/si.jpg">
      <img src="images/si.jpg" />
    </li>
    <li data-thumb="images/si1.jpg">
      <img src="images/si1.jpg" />
    </li>
    <li data-thumb="images/si2.jpg">
      <img src="images/si2.jpg" />
    </li>
    <li data-thumb="images/si.jpg">
      <img src="images/si.jpg" />
    </li>
  </ul>
</div>
<!-- FlexSlider 
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4>TESTE</h4>
							<div class="star-on">
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">$ 95.00</h5>
							<p>TESTE </p>
							
								<div class="clearfix"> </div>
							</ul>
						</div>
							<a href="#" class="add-cart item_add">ADICIONAR AO CARRINHO</a>
						</div>
					</div>
				<div class="clearfix"> </div>
		

		<div class="clearfix"> </div>
		</div>
		</div>


<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>ONDE NOS ENCONTRAR?</h4>
				<ul class="nav-bottom">
						<p>Rua XXXX, XX </p>
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
		-->
</body>
</html>
			