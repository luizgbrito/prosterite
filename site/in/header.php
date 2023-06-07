<?php $S='headerIn';?>
<header class="header" id="header">
	<section class="tarja">
		<div class="uk-container">
			<h4 <?=G($S,1,T)?>><?=Q($S,1,T)?></h4>
		</div>
	</section>
	<section class="principal">
		<div class="uk-container">
			<div class="text">
				<h1 <?=G($S,2,E)?>><?=Q($S,2,E)?></h1>
				<h2 <?=G($S,3,E)?>><?=Q($S,3,E)?></h2>
				<figure class="background mob"><img <?=G($S,6,M)?>></figure>
				<ul class="lista">
					<?php for($i=1;$i<=7;$i++): ?>
					<li <?=G($S,"a$i",T)?>>
					<i class="bi bi-check-circle-fill"></i>
					<?=Q($S,"a$i",T)?></li>
					<?php endfor; ?>
				</ul>
			</div>
			<figure class="background"><img <?=G($S,6,M)?>></figure>
		</div>
	</section>
</header>