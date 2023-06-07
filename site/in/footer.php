<!-- Footer !-->
<?php $S='footerIn';?>
<footer class="footer" id="footer">
	<div class="contato">
		<ul class="uk-container">
			<li class="left">
				<h4>LINKS ÚTEIS</h4>
				<div class="links">
					<a <?=G($S,3,L)?> target="_blank"><?=Q($S,3,L)?></a>
					<a <?=G($S,4,L)?> target="_blank"><?=Q($S,4,L)?></a>
					<a <?=G($S,5,L)?> target="_blank"><?=Q($S,5,L)?></a>
					<p <?=G($S,2,T)?> target="_blank"><?=Q($S,2,T)?></p>
				</div>
			</li>
			<li class="center">
				<h4>FORMAS DE PAGAMENTO</h4>
				<img <?=G($S,6,M)?>>
			</li>
			<li class="right">
				<h4>COMPRA 100% SEGURA</h4>
				<img <?=G($S,7,M)?>>
			</li>
		</ul>
	</div>
	<div class="aviso">
		<div class="uk-container">
			<p <?=G($S,9,T)?>><?=Q($S,9,T)?></p>
			<hr>
			<p>Copyright <?=date("Y")?> © Prosterite. Todos os direitos reservados.</p>
		</div>
	</div>
</footer>
<!-- Footer !-->