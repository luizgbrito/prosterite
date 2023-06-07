<?php $S='ofertaIn';?>
<section class="oferta" id="oferta">
	<div class="uk-container">
		<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
		<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h2>
		<figure class="anvisa"><img <?=G($S,3,M)?>></figure>
		<ul>
			<?php for($i=1;$i<=4;$i++): 
			if($i!=1){ ?>
			<li class="anvisa"><img <?=G($S,3,M)?>></li>
			<?php }?>
			<li>
				<a target="_blank" <?=G($S,"a$i",C)?>>
					<?=Q($S,"a$i",C)?>
					<img <?=G($S,"b$i",D)?>>
				</a>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</section>