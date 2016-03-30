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
					  <a href="administracao.php" class="list-group-item">Administração</a>
					  <a href="financeiro.php" class="list-group-item">Financeiro</a>
					  <a href="comercial.php" class="list-group-item">Comercial</a>
					  <a href="operacional.php" class="list-group-item">Operacional</a>
					  <a href="memorandos.php" class="list-group-item">Memorandos</a>
					  <a href="configuracoes.php" class="list-group-item">Configurações</a>
				</div>
			  </div>
			</div>
		</div>
<?php include("footer.php"); ?>