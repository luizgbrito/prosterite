<style>
	.politicas{
		padding: 50px 0;
	}
	.politicas img{
		max-width: 500px;
		margin: 0 auto;
	}
	.politicas ul{
		padding-left: 30px;
	}
	.politicas li{
		list-style: disc;
	}
	.politicas span{
		font-weight: 700;
	}
</style>
<?php $S='politicasOut';?>
<div class="politicas">
	<div class="uk-container">
		<h1 <?=G($S,1,T)?>><?=Q($S,1,T)?></h1>
		<div class="txt" <?=G($S,2,A)?>><?=Q($S,2,A)?></div>
	</div>
</div>