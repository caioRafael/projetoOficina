	<?php 

	
	include('conexao.php');

		if(isset($_POST['submit'])){
			
			$nome=$_POST['nome'];
			$endereco=$_POST['endereco'];
			$telefone=$_POST['telefone'];
			$email=$_POST['email'];
			$senha=$_POST['senha'];
			$senhaConfirma=$_POST['senhaConfirma'];
			$query = "INSERT INTO cliente (nome,endereco, telefone,email, senha) VALUES ('".$nome."','".$endereco."','".$telefone."','".$email."','".$senha."')";
			//$q= mysql_query($query);
			//$result = $bd->query("INSERT INTO cliente (nome,endereco, telefone,email, senha) VALUES ('".$nome."','".$endereco."','".$telefone."','".$email."','".$senha."'");
			//$query = "INSERT INTO cliente (nome,endereco, telefone,email, senha) VALUES (?,?,?,?,?)";
			
			$resultado = $bd->query('SELECT * FROM cliente where email ="'.$email.'" ');
			$log = $resultado->num_rows;
			
			if($senha==$senhaConfirma && $log==0){
				$result = $bd->query($query);
				echo "<script> alert('Cadastro realizado com sucesso');";
				echo "location.href='index.php';";
				echo "</script>";
			}
			if ($senha!=$senhaConfirma){
				echo "<script> alert('Senhas não conferem');";
				echo "location.href='register.php';";
				echo "</script>";
			}
				else{
				echo "<script> alert('Email ja cadastrado');";
				echo "location.href='register.php';";
				echo "</script>";
				}
			

		}
		
		if(isset($_POST['enviar'])){
			
			$nome=$_POST['nome'];
			$endereco=$_POST['endereco'];
			$data=$_POST['data'];
			$email=$_POST['email'];
			$descricao=$_POST['descricao'];
			$query = "INSERT INTO contato (nome,email, endereco,descricao, data_servico) VALUES ('".$nome."','".$email."','".$endereco."','".$descricao."','".$data."')";

				$result = $bd->query($query);
				 echo "<script>";
				 echo "location.href='index.php';";				
			    echo  "</script>";
			}

		
		
		
	
	?>