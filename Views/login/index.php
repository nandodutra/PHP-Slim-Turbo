{% include "layout/header.php" %}
<div class="container-fluid">
	<div class="well">
		<div class="page-header">
			<h2>Acesso ao sistema</h2>
		</div>
		<form class="form-horizontal" method="post" action="/auth">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">E-mail</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Senha</label>
		    <div class="controls">
		      <input type="password" id="inputPassword" placeholder="Password">
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <label class="checkbox">
		        <input type="checkbox"> Lembrar me
		      </label>
		      <button type="submit" class="btn btn-primary">Logar</button>
		    </div>
		  </div>
		</form>
	</div>
</div>
{% include "layout/footer.php" %}