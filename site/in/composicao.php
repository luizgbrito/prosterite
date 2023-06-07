<?php $S='compositionIn';?>
<section class="composicao">
	<div class="uk-container">
		<h2 <?=G($S,1,E)?>><?=Q($S,1,E)?></h2>
		<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>
		<ul>
			<?php for($i=1;$i<=6;$i++): ?>
			<li>
				<figure><img <?=G($S,"b$i",M)?>></figure>
				<h4 <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></h4>
				<p <?=G($S,"c$i",T)?>><?=Q($S,"c$i",T)?></p>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</section>