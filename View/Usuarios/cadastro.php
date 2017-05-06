<div class="container">
	<div class="row">
    	<div class="col-md-1">
        	<img class="img-responsive" src="../DefaultImgs/ejc120150.png" alt=""/>
        </div>
        <div class="col-md-11">
        	<h1 align="center">Pré Cadastro de Usuário</h1>
        </div>
    </div>
    <form method="post" action="cadusu.php" id="formencontreiro" name="formencontreiro" class="form-horizontal" enctype="multipart/form-data">
    <div class="panel panel-primary">
    	<div class="panel-heading">
        	<h4 align="center">Dados do Encontreiro</h4>
        </div>
        <div class="panel-body">
			<label for="nome" class="col-sm-2 control-label">Imagem : </label>
            <input type="file" name="arquivo" class="btn btn-warning"/><br />
        	<div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome Completo: </label>
            	<div class="col-sm-10">
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Encontreiro"  required />
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome de Usuário :</label>
                <div class="col-sm-10">
            	    <input type="text" name="login" id="login" class="form-control" placeholder="Usuário para acessar o sistema" onblur="startRequest();" required/>
                </div>
            </div>
            <div class="form-group">
            	<label for="nome" class="col-sm-2 control-label">Senha :</label>
                <div class="col-sm-10">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua Senha" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Confirmar Senha :</label>
                    <div class="col-sm-10">
                        <input type="password" name="senhaconfirmar" id="senhaconfirmar" class="form-control" placeholder="Confirme Sua Senha" required/>
                    </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">CPF :</label>
                <div class="col-sm-10">
                    <input type="number" name="cpf" id="cpf" onblur="return validar(this)" class="form-control" placeholder="Digite seu CPF sem pontuação" required/>
                </div>
            </div>
            <div class="form-group">
            	<label for="nome" class="col-sm-2 control-label">E-mail :</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" id="email" class="form-control" placeholder="e-mail" required/>
                    </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Telefone :</label>
            	    <div class="col-sm-10">
                        <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required/>
                    </div>
            </div>
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">EJC que Participou :</label>
                <div class="col-sm-10">
                    <input type="text" name="Ejcparticipou" list="Ejc" id="Ejcparticipou" class="form-control" placeholder="Ejc que participou?" required/>
                    <datalist id="Ejc">
                        <option value="I EJC BELÉM">
                        <option value="II EJC BELÉM">
                        <option value="III EJC BELÉM">
                        <option value="IV EJC BELÉM">
                        <option value="V EJC BELÉM">
                        <option value="VI EJC BELÉM">
                        <option value="VII EJC BELÉM">
                        <option value="VIII EJC BELÉM">
                        <option value="IX EJC BELÉM">
                        <option value="X EJC BELÉM">
                        <option value="XI EJC BELÉM">
                        <option value="XII EJC BELÉM">
                        <option value="XIII EJC BELÉM">
                        <option value="XIV EJC BELÉM">
                    </datalist>
                </div>
            </div>
        </div>
    </div>
        <input type="submit" value="Cadastrar" class="btn btn-success" onclick="return validar(this)" />
	</form>
    <div id="resultado"></div>
        <div class="alert alert-warning" role="alert">
            <span class="label label-warning">A Vitória Só Vem Do Senhor.</span>
        </div>
    </div>