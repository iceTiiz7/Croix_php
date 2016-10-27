<?php
		
		$taille=30;
		$i=0;
		$j=0;

		echo"voici votre croix:";
		echo"</br>";
		for($i=0 ; $i<$taille ; $i++){
				if ($i>0 || $i<$taille-1){
					for($j=0 ; $j<$taille ; $j++){
						if ($j==$i || $j==$taille-$i-1){

							echo"[]";
						}else{
							echo"&#160;";
						}
					}
					echo"</br>";
				}
			}
?>