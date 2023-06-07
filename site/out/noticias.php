<?php $S='advOut';?>
<style>
	.adv *:not(i) { font-family: 'Roboto', sans-serif; }
	#footer{display: none;}
</style>
<div class="adv">
	 <div class="mm">
		<div class="uk-container">
			<div>
				<ul>
					<li><a href="./"></a></li>
					<li><a href="./"></a></li>
					<li><a href="./"></a></li>
					<li><a href="./"></a></li>
					<li><a href="./"></a></li>
				</ul>
			</div>
			<div>
				<a href="./"><span>ASSINE JÁ</span></a>
				<a href="./"><span>E-MAIL<i uk-icon="chevron-down"></i></span></a>
				<a href="./" class="m2">ENTRAR<i class="bi bi-chevron-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="topo">
		<div class="uk-container">
			<div>
				<a href="./" class="uk-button">
				<i class="bi bi-list"></i>
				<span>MENU</span>
				</a>
				<a href="./" class="g1"><img src="<?=IMG?>g1.png" alt="g1"></a>
			</div>
			<a href="./" class="titulo">BEM ESTAR</a>
			<label for="">
				 <input type="text" placeholder="Busca...">
				<i class="bi bi-search"></i> 
			</label>
		</div>
	</div>
	
	<div class="content">
		<div class="uk-container">
			<div class="article">
				<div class="header">
					<h1 <?=G($S,1,A)?>><?=Q($S,1,A)?></h1>
					<h2 <?=G($S,2,T)?>><?=Q($S,2,T)?></h2>
					<div class="share">
						<span <?=G($S,3,T)?>><?=Q($S,3,T)?></span>
						<ul>
							<li><i class="bi bi-facebook"></i></li>
							<li><i class="bi bi-twitter"></i></li>
							<li><i class="bi bi-whatsapp"></i></li>
							<li><i class="bi bi-linkedin"></i></li>
							<li><i class="bi bi-pinterest"></i></li>
						</ul>
					</div>
					<p <?=G($S,4,T)?>><?=Q($S,4,T)?></p>
				</div>
				
				<hr>
				
				<div class="editorial">
					<figure>
						<img <?=G($S,5,M)?>>
					</figure>
					<div class="txt" <?=G($S,6,E)?>><?=Q($S,6,E)?></div>
					
					<figure>
						<img <?=G($S,7,M)?>>
					</figure>
					<div class="txt" <?=G($S,8,E)?>><?=Q($S,8,E)?></div>

					<figure>
						<img <?=G($S,9,M)?>>
					</figure>
					<div class="txt" <?=G($S,10,E)?>><?=Q($S,10,E)?></div>

					<figure>
						<img <?=G($S,11,M)?>>
					</figure>
					<div class="txt" <?=G($S,12,E)?>><?=Q($S,12,E)?></div>

					<div class="center">
						<a class="uk-button" <?=G($S,13,L)?>><?=Q($S,13,L)?></a>
					</div>
					<br>
					<div class="txt" <?=G($S,14,E)?>><?=Q($S,14,E)?></div>		
					<figure>
						<a <?=G($S,1,C)?>><?=Q($S,1,C)?>
							<img <?=G($S,15,D)?>>
						</a>
					</figure>		
					<div class="center">
						<a class="uk-button" <?=G($S,16,L)?>><?=Q($S,16,L)?></a>
					</div>					
				</div>
			</div>
			
			
			<?php $S='advOutAside';?>
			<div class="aside">
				<div class="conteudo">
					<h4><p>Primeira página</p></h4>
					<ul>
						<?php for($i=1;$i<=2;$i++): ?>
						<li>
							<a href="<?=URL?>">
								<img <?=G($S,"e$i",M)?>>
								<p <?=G($S,"f$i",T)?>><?=Q($S,"f$i",T)?></p>
							</a>
						</li>
						<?php endfor; ?>	
					</ul>
				</div>
				<div class="conteudo" uk-sticky>
					<figure>
						<a <?=G($S,"9l",C)?>><?=Q($S,"9l",C)?>
							<img <?=G($S,19,D)?>>
						</a>
					</figure>
				</div>
			</div>
	</div>
	</div>
</div>
<div class="advfooter">
	<div class="uk-container">
		<p>© Copyright 2000-2022 Globo Comunicação e Participações S.A.</p>
		<ul>
			<li><a <?=G($S,20,L)?>><?=Q($S,20,L)?></a></li>
			<li><a href="./">minha conta</a></li>
			<li><a href="./">anuncie conosco</a></li>
		</ul>
	</div>
</div>


