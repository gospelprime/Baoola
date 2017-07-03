<?php 

/*
* Plugin Name: Baoola
* Description: Suporte para afiliados com produtos recomendados.
* Version: 0.1
* Author: Bíblia Academy
* Author URI: https://www.bibliaacademy.com.br
*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bíblia Academy Ads - Gerador de Anúncios</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

<div class="container">

	<br>
	<form class="well form-horizontal" action="index.php" method="post">
	<fieldset>

	<!-- Form  -->
	<legend>Bíblia Academy <b>Ads</b> <small class="pull-right">Gerador de Anúncios</small></legend> 

	<!-- Seminario de Pregadores -->
	<div class="form-group">
	  <label class="col-md-4 control-label">Seminário de Pregadores</label>  
	  <div class="col-md-6 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-fire"></i></span>
	  <input  name="urlSeminario" placeholder="Link de Afiliado Hotmart" class="form-control"  type="text" value="<?php if(isset($_POST['urlSeminario'])) echo $_POST['urlSeminario'] ?>">
	    </div>
	  </div>
	</div>


	<!-- Seminario de Pregadores -->
	<div class="form-group">
	  <label class="col-md-4 control-label">Seminário de Pregadores p/ Mulheres</label>  
	  <div class="col-md-6 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-fire"></i></span>
	  <input  name="urlSeminarioMulher" placeholder="Link de Afiliado Hotmart" class="form-control"  type="text" value="<?php if(isset($_POST['urlSeminarioMulher'])) echo $_POST['urlSeminarioMulher'] ?>">
	    </div>
	  </div>
	</div>



	<!-- Escola do Louvor -->
	<div class="form-group">
	  <label class="col-md-4 control-label">Escola do Louvor</label>  
	  <div class="col-md-6 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-fire"></i></span>
	  <input  name="urlLouvor" placeholder="Link de Afiliado Hotmart" class="form-control"  type="text" value="<?php if(isset($_POST['urlLouvor'])) echo $_POST['urlLouvor'] ?>">
	    </div>
	  </div>
	</div>

	<!-- Escola do Louvor -->
	<div class="form-group">
	  <label class="col-md-4 control-label">Método 15p</label>  
	  <div class="col-md-6 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-fire"></i></span>
	  <input  name="urlMetodo15p" placeholder="Link de Afiliado Hotmart" class="form-control"  type="text" value="<?php if(isset($_POST['urlMetodo15p'])) echo $_POST['urlMetodo15p'] ?>">
	    </div>
	  </div>
	</div>


	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label"></label>
	  <div class="col-md-4">
	    <button type="submit" class="btn btn-warning" >Gerar Código de Anúncios <span class="glyphicon glyphicon-cog"></span></button>
	  </div>
	</div>

	</fieldset>
	</form>
	<?php if($_POST) { ?>



	<form class="well form-horizontal" action="#" method="post">
	<fieldset>
	<legend><small>Código dos Anúncios</small></legend> 

	<!-- Success message -->
	<div class="alert alert-success" role="alert" id="success_message">Selecione e copie o <strong>Código Fonte</strong> <i class="glyphicon glyphicon-check"></i>. Cole no seu site para promover e começar a vender os produtos <b>Bíblia Academy</b>.</div>	

	<!-- Código de Anuncios --> 
	<div class="form-group">
	  <label class="col-md-4 control-label">Código dos Anúncios</label>
	    <div class="col-md-8 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
	        	<textarea class="form-control" rows="4" name="comment" onclick="this.focus();this.select()"><?php 

				echo preg_replace('/\s+/S', " ", "<script type='text/javascript'>
				     	var produtos = { 
				     		urlSeminario: '".$_POST['urlSeminario']."',
				     		urlSeminarioMulher: '".$_POST['urlSeminarioMulher']."',
				     		urlLouvor:    '".$_POST['urlLouvor']."',
				     		urlMetodo15p: '".$_POST['urlMetodo15p']."',
				     		charset: document.characterSet,
				     	};
				  	</script>
				  	<script type='text/javascript' src='https://www.bibliaacademy.com.br/wp-content/plugins/baoola/biblia-academy-ads.js?ba' charset='UTF-8'></script>
				    <div id='ba-ads'></div>");

				?></textarea>				
	  </div>
	  <div><small><b>Copie</b> e <b>Cole</b> o código dentro das TAGs <b>&lt;body&gt; &lt;/body&gt;</b></small></div>
	  </div>
	</div>

	</fieldset>
	</form>

	<?php } ?>


	</div>
    </div><!-- /.container -->

  </body>
</html>
