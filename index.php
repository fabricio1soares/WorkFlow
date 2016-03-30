<?php include("header.php"); ?>
		<div class="container">
			<form>
				<label for="busca">Procurar Cliente:</label>
				<input type="search" name="busca">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</form>
		</div>
		<p></p>
		<div class="container">

			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Work Flow - Início</h3>
			  </div>
			  <div class="panel-body">
					  <div class="list-group">
					  <a href="administracao.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Administração</a>
					  <a href="financeiro.php" class="list-group-item"><span class="glyphicon glyphicon-usd"></span> Financeiro</a>
					  <a href="comercial.php" class="list-group-item"><span class="glyphicon glyphicon-lock"></span> Comercial</a>
					  <a href="operacional.php" class="list-group-item"><span class="glyphicon glyphicon-scale"></span> Operacional</a>
					  <a href="memorandos.php" class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> Memorandos</a>
					  <a href="configuracoes.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Configurações</a>
				</div>
			  </div>
			</div>
		</div>
<?php include("footer.php"); ?>