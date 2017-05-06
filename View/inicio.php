  <?php $endereco = $_SERVER ['SERVER_NAME'];?>
  <body style="background-color:#eee">
    <!--<div class="container">-->
      <div class="jumbotron" align="center">
        <div class="container">
          <h1>Bem-Vindo, Encontreiro!</h1>
            <p>Se você ainda não é cadastrado acesse a área "Não sou cadastrado", caso já tenha realizado seu cadastro acesse a área "Já sou cadastrado"!</p>
            <p><a href='#' class='btn btn-primary btn-lg' role='button'>Já sou cadastrado</a></p>
            <p><a href='http://ejcbelem.com.br/EjcBelemMVC/Home/Cadastro' class='btn btn-success btn-lg' role='button'>Não sou cadastrado</a></p>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="col-md-2 col-xs-6" align="center">
                <img class="image-responsive image-rounded"  src="DefaultImgs/ejc.png">
              </div>
              <div class="col-md-2 col-xs-6"  align="center">
                <img class="image-responsive image-rounded" src="DefaultImgs/LogoIASD3d.png" alt=""/>
              </div>
                <div class="col-md-4"></div>
          </div>
        </div>
      </div>
      <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>&copy; EJC - OnLine Todos os direitos reservados.</p>

                    </div>
                    <div class="col-md-4">
                        <script language="JavaScript" type="text/javascript">
TrustLogo("<?php echo "http://".$endereco;?>/EjcBelemMVC/DefaultImgs/comodo_secure_100x85_transp.png", "CL1", "none");
</script>
<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>
                    </div>
                </div>
            </div>
        </div>