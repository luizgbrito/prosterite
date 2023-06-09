<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.1/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="<?=LIB.'editor.css'.V?>"/>
<div id="adm">
	<div class="pgs">
		<button class="pg" onclick="reset()" uk-tooltip="Resetar cache do site!"></button>
		<ul>
			<?php 
			$path = "site/out/";
			$diretorio = dir($path);
			while($arquivo = $diretorio -> read()){
				if($arquivo!='.'&&$arquivo!='..'){
					$file = str_replace('.php','',$arquivo);
					echo "<li>
						<a href='".URL."/".$file."'>".str_replace('.php','',$file)."</a>
					</li>";
				}
			}$diretorio -> close();
			/*
			foreach($files as $file):
				if($file!='404.php'&&$file!='login.php'&&$file!='error_log'):
				$f=str_replace('-',' ',explode('.',$file)[0]);
				$x=explode('.',$file)[1];	
			?>
			<Li>
				<a href="<?=URL?>/login"><button class="login" uk-tooltip="Ir para Login"></button></a>				
			</Li>
			<?php endif; endforeach;*/?>
		</ul>
	</div>
	<a href="<?=URL?>/login"><button class="login" uk-tooltip="Ir para Login"></button></a>
	<button class="reset" onclick="reset()" uk-tooltip="Resetar cache do site!"></button>
	<form method="post">
		<button class="exit" type="submit" name="exitapp" value="true" uk-tooltip="Sair do modo editor!"></button>
	</form>
</div>

<div id="modal" tabindex="-1">
	<div class="modalClose" onclick="modalHide()"></div>
	<div class="modalBody">
		<div id="images">
			<div class="images"></div>
			<form enctype="multipart/form-data" id="upload" onsubmit="uploading(this);event.preventDefault();">
				<label title="Adicionar imagens á biblioteca">
					<input type="file" name="midia[]" multiple onchange="upload()">
				</label>
			</form>
		</div>
		<form id="editor" onsubmit="crud(this);event.preventDefault();" enctype="multipart/form-data">
			<a rel="noreferrer" class="images" onclick="modalImages()" title="Escolher imagem da biblioteca"></a>
			<div class="fields"></div>
			<p class="textRight">
				<span id="returnmsg"></span>
				<button class="button modalClose" onclick="modalClose()" type="button">Voltar</button>
				<button class="button modalSend" type="submit">Salvar</button>
			</p>
		</form>
	</div>
</div>
<script src="<?=LIB.'main.js'.V?>"></script>