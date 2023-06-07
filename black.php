<!doctype html>
<html lang="pt-br">
<head>
<?php 
	require('app/api/editor.php');
	require('app/api/logar.php');
	require('head.php');
?>
</head>

<body>
	<main class="main" id="main">	
	<?php 
	if(isset($SA)):
		include("app/api/modal.php");
	endif;
	if(!empty($rota)):
		if($rota=='login'):
			include("app/api/login.php");
		else:
			if(file_exists("$OUT/$rota.php")):
				include("$OUT/$rota.php");
			else:
				include("$OUT/404.php");
			endif;
		endif;
	else:
		include	"$IN/header.php";
		include	"$IN/dores.php";
		include	"$IN/depoimentos.php";
		include	"$IN/usar.php";
		include	"$IN/composicao.php";
		include	"$IN/garantia.php";
		include	"$IN/oferta.php";
		include	"$IN/duvidas.php";
		include	"$IN/whatsapp.php";
	endif;
	?>
	</main>
	<?php if(!empty($rota)&&$rota!='login'||empty($rota)):
		include	"$IN/footer.php";
	endif; ?>
	<?=(isset(SEO['body']))?stripslashes(SEO['body']):'';?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.18/js/uikit.min.js"></script>
	<script src="<?=URL.'/src/main.js'.V?>"></script>
</body>
</html>