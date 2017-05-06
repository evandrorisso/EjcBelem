<?php 
	class UsuarioController{
			
			public function Cadastro(){
				include("View/Header.php");
				include("View/Cadastro.php");
				include("View/Footer.php");
		        include("View/js.php");
			}
			public function SobreNos(){
				include("View/Home/Header.php");
				include("View/Home/Menu.php");
				include("View/Home/Sobre.php");
				include("View/Home/Footer.php");
		        include("View/Home/js.php");
			}
		}
?>