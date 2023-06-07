<?php 
	define("DT", json_decode($DATA,true)[1]);

	define("T",1);
	define("L",2);
	define("M",3);
	define("A",4);
	define("E",5);
	define("I",6);
	define("B",7);
	define("C",8);
	define("P",9);
	define("D",10); // dev

	function Q($h,$i,$t){
		$h = md5($h);
		$h = substr($h,0,10).$i;
		if($t==1||$t==2){
			if(isset(DT[$h])){
				return DT[$h][0];
			}else{
				return 'editar...';				
			}
		}elseif($t==4){
			if(isset(DT[$h])){
				return nl2br(DT[$h][0]);				
			}else{
				return 'editar...';
			}
		}elseif($t==5){
			if(isset(DT[$h])){
				return DT[$h][0];
			}else{
				return 'editar...';
			}
		}elseif($t==6){
			if(isset($_SESSION["editor"])){
				if(isset(DT[$h])){
					return DT[$h][0].'<div class="videoEd" onclick="editar(\''.$h.'\',\''.$t.'\'); return false;"></div>';
				}else{
					return '<div class="videoEd" onclick="editar(\''.$h.'\',\''.$t.'\'); return false;"></div>';
				}
			}else{
				return DT[$h][0];	
			}
		}elseif($t==7){
			return '<div class="bgEdt" onclick="editar(\''.$h.'\',\''.$t.'\'); return false;"></div>';
		}elseif($t==8){
			if(isset($_SESSION["editor"])){
				return '<div class="codeEd" onclick="editar(\''.$h.'\',\''.$t.'\'); return false;"></div>';
			}			
		}elseif($t==9){
			if(isset(DT[$h])){
				return DT[$h][0];
			}else{
				return 1;				
			}
		}
	}

	
	function G($h,$i,$t){
		$h = md5($h);
		$h = substr($h,0,10).$i;
		$r = '';
		if(isset($_SESSION["editor"])){
			if(
				$t!=10 && $t!=8 && $_SESSION["editor"]==1 
				|| $_SESSION["editor"]==2 && $t!=8
			){
				$r .= ' onclick="editar(\''.$h.'\',\''.$t.'\'); return false;"';				
			}
		}
		if($t==1||$t==4||$t==5||$t==6||$t==9){
			return $r;			
		}elseif($t==2){
			if(isset(DT[$h])){
				$r = 'href="'.DT[$h][1].'"'.$r;
			}else{
				$r = 'href=""'.$r;
			}
			return $r;				
		}elseif($t==8){
			if(!isset($_SESSION["editor"])){
				if(isset(DT[$h])){
					$r = 'href="'.DT[$h][1].'"';
				}else{
					$r = 'href=""';
				}
			}
			return $r;	
		}elseif($t==3||$t==7||$t==10){
			$size = 'width="100%" height="100%"';
			$dire = '';
			$alt = 'tmp';
			$src = IMG.'img.svg';
			if(isset(DT[$h])){
				$siz = ['a'=>'1000','b'=>'750','c'=>'500','d'=>'250','x'=>'1250'];
				$alt = DT[$h][0];
				$img = explode('/',DT[$h][1]);
				$ext = explode('.',$img[1])[1];
				if($img[0]==1 && $ext!='gif' && DT[$h][3]!='x'){
					$src = URL.'/files/'.DT[$h][3].'/'.explode('.',$img[1])[0].'.webp';
					$dire = './files/'.DT[$h][3].'/'.explode('.',$img[1])[0].'.webp';
				}else{
					$src = URL.'/files/'.DT[$h][3].'/'.$img[1];	
					$dire = './files/'.DT[$h][3].'/'.$img[1];	
				}
				list($wl, $ha) = getimagesize($dire);
				$size = 'width="'.$wl.'" height="'.$ha.'"';	
			}
			if($t==3||$t==10){
				return 'src="'.$src.'" alt="'.$alt.'" '.$size.$r.' style="'.DT[$h][2].'"';
			}else{
				return 'style="background-image: url('.$src.');"'.$r;	
			}
		}
	}
	function edx($h){
		if(!isset($SE)):
			return '<button class="bdx" onClick="bdx(\''.$h.' edx\');"></button>';
		endif;
	}

	$backredirect = '';
	if(!empty($rota)):
		if(!empty(SEO['pages'][$rota])):
			$backredirect = SEO['pages'][$rota];
		endif;
	else:
		if(!empty(SEO['backredirect'])){$backredirect = SEO['backredirect'];}
	endif;
?>

<script id="node">
	"index.php" == window.location.href.split("/")[4] && window.history.pushState("object or string", "Title", "./");
	const ss = sessionStorage;
	const sURL = '<?=URL?>'; 
	const MOB = '<?=MOB?>';
	const SA = <?=(isset($_SESSION["editor"]))?1:0;?>;
	
	var urlBackRedirect = '<?=$backredirect?>';
	if(urlBackRedirect!=''){
		window.history.pushState(null, "", window.location.href);
		window.onpopstate = function () {
			window.history.pushState(null, "", window.location.href);
			if(urlBackRedirect!=''){
				location.href=urlBackRedirect;			
			}else{
				location.href=URL
				//window.history.go(-1);
			}
		};
	}
	
	const DT = <?=$DATA?>;
	const ED = <?=$EDX?>;
</script>
