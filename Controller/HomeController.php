<?php  
	class HomeController{
		
		public function Home(){
			include("View/HeaderInicio.php");
			include("View/inicio.php");
			include("View/jsInicio.php");
		}
		public function Cadastro(){
			include("View/Header.php");
			include("View/Usuarios/cadastro.php");
			include("View/Footer.php");
	        include("View/js.php");
		}
	}
?>