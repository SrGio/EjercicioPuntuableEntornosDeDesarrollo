<?php
	function printsudoku ($m){
		echo "<table border=10px>";
		for ($i=0; $i<=8; $i++){
			for ($j=0; $j<=8; $j++){
				echo "<td>".$m[$i][$j]."</td>";
			}
			echo "</tr>";
		}
		echo "<br>";
	}
	function casilla (&$m,$a,$b,$c,$x,$y){
	$cont=0;
	$re=array(0,0,0,0,0,0,0,0,0);
	for($i=0;$i<=8;$i++){
			for($l=1;$l<=9;$l++){
				if($a[$i]==$l){
					$re[$l-1]=1;
				}elseif($b[$i]==$l){
					$re[$l-1]=1;
				}elseif($c[$i]==$l){
					$re[$l-1]=1;
				}
			}
		}
		for($i=0;$i<=8;$i++){
			if($re[$i]==0){
				$cont++;
			}
		}
		if($m[$x][$y]==0&&$cont==1){
			for($i=0;$i<=8;$i++){
				if($re[$i]==0){
					$m[$x][$y]=$i+1;
				}		
			}	
		}
	}

	function rellenar(&$m,$a,$b){
		$c1=array($m[0][0],$m[1][0],$m[2][0],$m[3][0],$m[4][0],$m[5][0],$m[6][0],$m[7][0],$m[8][0]);
		$c2=array($m[0][1],$m[1][1],$m[2][1],$m[3][1],$m[4][1],$m[5][1],$m[6][1],$m[7][1],$m[8][1]);
		$c3=array($m[0][2],$m[1][2],$m[2][2],$m[3][2],$m[4][2],$m[5][2],$m[6][2],$m[7][2],$m[8][2]);
		$c4=array($m[0][3],$m[1][3],$m[2][3],$m[3][3],$m[4][3],$m[5][3],$m[6][3],$m[7][3],$m[8][3]);
		$c5=array($m[0][4],$m[1][4],$m[2][4],$m[3][4],$m[4][4],$m[5][4],$m[6][4],$m[7][4],$m[8][4]);
		$c6=array($m[0][5],$m[1][5],$m[2][5],$m[3][5],$m[4][5],$m[5][5],$m[6][5],$m[7][5],$m[8][5]);
		$c7=array($m[0][6],$m[1][6],$m[2][6],$m[3][6],$m[4][6],$m[5][6],$m[6][6],$m[7][6],$m[8][6]);
		$c8=array($m[0][7],$m[1][7],$m[2][7],$m[3][7],$m[4][7],$m[5][7],$m[6][7],$m[7][7],$m[8][7]);
		$c9=array($m[0][8],$m[1][8],$m[2][8],$m[3][8],$m[4][8],$m[5][8],$m[6][8],$m[7][8],$m[8][8]);
		$f1=array($m[0][0],$m[0][1],$m[0][2],$m[0][3],$m[0][4],$m[0][5],$m[0][6],$m[0][7],$m[0][8]);
		$f2=array($m[1][0],$m[1][1],$m[1][2],$m[1][3],$m[1][4],$m[1][5],$m[1][6],$m[1][7],$m[1][8]);
		$f3=array($m[2][0],$m[2][1],$m[2][2],$m[2][3],$m[2][4],$m[2][5],$m[2][6],$m[2][7],$m[2][8]);
		$f4=array($m[3][0],$m[3][1],$m[3][2],$m[3][3],$m[3][4],$m[3][5],$m[3][6],$m[3][7],$m[3][8]);
		$f5=array($m[4][0],$m[4][1],$m[4][2],$m[4][3],$m[4][4],$m[4][5],$m[4][6],$m[4][7],$m[4][8]);
		$f6=array($m[5][0],$m[5][1],$m[5][2],$m[5][3],$m[5][4],$m[5][5],$m[5][6],$m[5][7],$m[5][8]);
		$f7=array($m[6][0],$m[6][1],$m[6][2],$m[6][3],$m[6][4],$m[6][5],$m[6][6],$m[6][7],$m[6][8]);
		$f8=array($m[7][0],$m[7][1],$m[7][2],$m[7][3],$m[7][4],$m[7][5],$m[7][6],$m[7][7],$m[7][8]);
		$f9=array($m[8][0],$m[8][1],$m[8][2],$m[8][3],$m[8][4],$m[8][5],$m[8][6],$m[8][7],$m[8][8]);
		$z1=array($m[0][0],$m[1][0],$m[2][0],$m[0][1],$m[1][1],$m[2][1],$m[0][2],$m[1][2],$m[2][2]);
		$z2=array($m[0][3],$m[1][3],$m[2][3],$m[0][4],$m[1][4],$m[2][4],$m[0][5],$m[1][5],$m[2][5]);
		$z3=array($m[0][6],$m[1][6],$m[2][6],$m[0][7],$m[1][7],$m[2][7],$m[0][8],$m[1][8],$m[2][8]);
		$z4=array($m[3][0],$m[4][0],$m[5][0],$m[3][1],$m[4][1],$m[5][1],$m[3][2],$m[4][2],$m[5][2]);
		$z5=array($m[3][3],$m[4][3],$m[5][3],$m[3][4],$m[4][4],$m[5][4],$m[3][5],$m[4][5],$m[5][5]);
		$z6=array($m[3][6],$m[4][6],$m[5][6],$m[3][7],$m[4][7],$m[5][7],$m[3][8],$m[4][8],$m[5][8]);
		$z7=array($m[6][0],$m[7][0],$m[8][0],$m[6][1],$m[7][1],$m[8][1],$m[6][2],$m[7][2],$m[8][2]);
		$z8=array($m[6][3],$m[7][3],$m[8][3],$m[6][4],$m[7][4],$m[8][4],$m[6][5],$m[7][5],$m[8][5]);
		$z9=array($m[6][6],$m[7][6],$m[8][6],$m[6][7],$m[7][7],$m[8][7],$m[6][8],$m[7][8],$m[8][8]);
		$re=array(0,0,0,0,0,0,0,0,0);
			for($i=0;$i<=8;$i++){
				for($l=1;$l<=9;$l++){
					if($c1[$i]==$l){
						$re[$l-1]=1;
					}elseif($f1[$i]==$l){
						$re[$l-1]=1;
					}elseif($z1[$i]==$l){
						$re[$l-1]=1;
					}
				}
			}
			for($i=0;$i<=8;$i++){
				if($re[$i]==0){
					$m[$a][$b]=$i+1;
					return;
				}
			}
	}
	
	function resolver(&$m,&$fin){
		$suma=0;
		$k=0;
		$c=0;
		while($suma<405&&$k<100){
			$c1=array($m[0][0],$m[1][0],$m[2][0],$m[3][0],$m[4][0],$m[5][0],$m[6][0],$m[7][0],$m[8][0]);
			$c2=array($m[0][1],$m[1][1],$m[2][1],$m[3][1],$m[4][1],$m[5][1],$m[6][1],$m[7][1],$m[8][1]);
			$c3=array($m[0][2],$m[1][2],$m[2][2],$m[3][2],$m[4][2],$m[5][2],$m[6][2],$m[7][2],$m[8][2]);
			$c4=array($m[0][3],$m[1][3],$m[2][3],$m[3][3],$m[4][3],$m[5][3],$m[6][3],$m[7][3],$m[8][3]);
			$c5=array($m[0][4],$m[1][4],$m[2][4],$m[3][4],$m[4][4],$m[5][4],$m[6][4],$m[7][4],$m[8][4]);
			$c6=array($m[0][5],$m[1][5],$m[2][5],$m[3][5],$m[4][5],$m[5][5],$m[6][5],$m[7][5],$m[8][5]);
			$c7=array($m[0][6],$m[1][6],$m[2][6],$m[3][6],$m[4][6],$m[5][6],$m[6][6],$m[7][6],$m[8][6]);
			$c8=array($m[0][7],$m[1][7],$m[2][7],$m[3][7],$m[4][7],$m[5][7],$m[6][7],$m[7][7],$m[8][7]);
			$c9=array($m[0][8],$m[1][8],$m[2][8],$m[3][8],$m[4][8],$m[5][8],$m[6][8],$m[7][8],$m[8][8]);
			$f1=array($m[0][0],$m[0][1],$m[0][2],$m[0][3],$m[0][4],$m[0][5],$m[0][6],$m[0][7],$m[0][8]);
			$f2=array($m[1][0],$m[1][1],$m[1][2],$m[1][3],$m[1][4],$m[1][5],$m[1][6],$m[1][7],$m[1][8]);
			$f3=array($m[2][0],$m[2][1],$m[2][2],$m[2][3],$m[2][4],$m[2][5],$m[2][6],$m[2][7],$m[2][8]);
			$f4=array($m[3][0],$m[3][1],$m[3][2],$m[3][3],$m[3][4],$m[3][5],$m[3][6],$m[3][7],$m[3][8]);
			$f5=array($m[4][0],$m[4][1],$m[4][2],$m[4][3],$m[4][4],$m[4][5],$m[4][6],$m[4][7],$m[4][8]);
			$f6=array($m[5][0],$m[5][1],$m[5][2],$m[5][3],$m[5][4],$m[5][5],$m[5][6],$m[5][7],$m[5][8]);
			$f7=array($m[6][0],$m[6][1],$m[6][2],$m[6][3],$m[6][4],$m[6][5],$m[6][6],$m[6][7],$m[6][8]);
			$f8=array($m[7][0],$m[7][1],$m[7][2],$m[7][3],$m[7][4],$m[7][5],$m[7][6],$m[7][7],$m[7][8]);
			$f9=array($m[8][0],$m[8][1],$m[8][2],$m[8][3],$m[8][4],$m[8][5],$m[8][6],$m[8][7],$m[8][8]);
			$z1=array($m[0][0],$m[1][0],$m[2][0],$m[0][1],$m[1][1],$m[2][1],$m[0][2],$m[1][2],$m[2][2]);
			$z2=array($m[0][3],$m[1][3],$m[2][3],$m[0][4],$m[1][4],$m[2][4],$m[0][5],$m[1][5],$m[2][5]);
			$z3=array($m[0][6],$m[1][6],$m[2][6],$m[0][7],$m[1][7],$m[2][7],$m[0][8],$m[1][8],$m[2][8]);
			$z4=array($m[3][0],$m[4][0],$m[5][0],$m[3][1],$m[4][1],$m[5][1],$m[3][2],$m[4][2],$m[5][2]);
			$z5=array($m[3][3],$m[4][3],$m[5][3],$m[3][4],$m[4][4],$m[5][4],$m[3][5],$m[4][5],$m[5][5]);
			$z6=array($m[3][6],$m[4][6],$m[5][6],$m[3][7],$m[4][7],$m[5][7],$m[3][8],$m[4][8],$m[5][8]);
			$z7=array($m[6][0],$m[7][0],$m[8][0],$m[6][1],$m[7][1],$m[8][1],$m[6][2],$m[7][2],$m[8][2]);
			$z8=array($m[6][3],$m[7][3],$m[8][3],$m[6][4],$m[7][4],$m[8][4],$m[6][5],$m[7][5],$m[8][5]);
			$z9=array($m[6][6],$m[7][6],$m[8][6],$m[6][7],$m[7][7],$m[8][7],$m[6][8],$m[7][8],$m[8][8]);
			$re=array(0,0,0,0,0,0,0,0,0);
			$suma=0;
			casilla($m,$c1,$f1,$z1,0,0);//Fila 1, Columna 1
			casilla($m,$c2,$f1,$z1,0,1);//Fila 1, Columna 2
			casilla($m,$c3,$f1,$z1,0,2);//Fila 1, Columna 3
			casilla($m,$c4,$f1,$z2,0,3);//Fila 1, Columna 4
			casilla($m,$c5,$f1,$z2,0,4);//Fila 1, Columna 5
			casilla($m,$c6,$f1,$z2,0,5);//Fila 1, Columna 6
			casilla($m,$c7,$f1,$z3,0,6);//Fila 1, Columna 7
			casilla($m,$c8,$f1,$z3,0,7);//Fila 1, Columna 8
			casilla($m,$c9,$f1,$z3,0,8);//Fila 1, Columna 9
			casilla($m,$c1,$f2,$z1,1,0);//Fila 2, Columna 1
			casilla($m,$c2,$f2,$z1,1,1);//Fila 2, Columna 2
			casilla($m,$c3,$f2,$z1,1,2);//Fila 2, Columna 3
			casilla($m,$c4,$f2,$z2,1,3);//Fila 2, Columna 4
			casilla($m,$c5,$f2,$z2,1,4);//Fila 2, Columna 5
			casilla($m,$c6,$f2,$z2,1,5);//Fila 2, Columna 6
			casilla($m,$c7,$f2,$z3,1,6);//Fila 2, Columna 7
			casilla($m,$c8,$f2,$z3,1,7);//Fila 2, Columna 8
			casilla($m,$c9,$f2,$z3,1,8);//Fila 2, Columna 9
			casilla($m,$c1,$f3,$z1,2,0);//Fila 3, Columna 1
			casilla($m,$c2,$f3,$z1,2,1);//Fila 3, Columna 2
			casilla($m,$c3,$f3,$z1,2,2);//Fila 3, Columna 3
			casilla($m,$c4,$f3,$z2,2,3);//Fila 3, Columna 4
			casilla($m,$c5,$f3,$z2,2,4);//Fila 3, Columna 5
			casilla($m,$c6,$f3,$z2,2,5);//Fila 3, Columna 6
			casilla($m,$c7,$f3,$z3,2,6);//Fila 3, Columna 7
			casilla($m,$c8,$f3,$z3,2,7);//Fila 3, Columna 8
			casilla($m,$c9,$f3,$z3,2,8);//Fila 3, Columna 9
			casilla($m,$c1,$f4,$z4,3,0);//Fila 4, Columna 1
			casilla($m,$c2,$f4,$z4,3,1);//Fila 4, Columna 2
			casilla($m,$c3,$f4,$z4,3,2);//Fila 4, Columna 3
			casilla($m,$c4,$f4,$z5,3,3);//Fila 4, Columna 4
			casilla($m,$c5,$f4,$z5,3,4);//Fila 4, Columna 5
			casilla($m,$c6,$f4,$z5,3,5);//Fila 4, Columna 6
			casilla($m,$c7,$f4,$z6,3,6);//Fila 4, Columna 7
			casilla($m,$c8,$f4,$z6,3,7);//Fila 4, Columna 8
			casilla($m,$c9,$f4,$z6,3,8);//Fila 4, Columna 9
			casilla($m,$c1,$f5,$z4,4,0);//Fila 5, Columna 1
			casilla($m,$c2,$f5,$z4,4,1);//Fila 5, Columna 2
			casilla($m,$c3,$f5,$z4,4,2);//Fila 5, Columna 3
			casilla($m,$c4,$f5,$z5,4,3);//Fila 5, Columna 4
			casilla($m,$c5,$f5,$z5,4,4);//Fila 5, Columna 5
			casilla($m,$c6,$f5,$z5,4,5);//Fila 5, Columna 6
			casilla($m,$c7,$f5,$z6,4,6);//Fila 5, Columna 7
			casilla($m,$c8,$f5,$z6,4,7);//Fila 5, Columna 8
			casilla($m,$c9,$f5,$z6,4,8);//Fila 5, Columna 9
			casilla($m,$c1,$f6,$z4,5,0);//Fila 6, Columna 1
			casilla($m,$c2,$f6,$z4,5,1);//Fila 6, Columna 2
			casilla($m,$c3,$f6,$z4,5,2);//Fila 6, Columna 3
			casilla($m,$c4,$f6,$z5,5,3);//Fila 6, Columna 4
			casilla($m,$c5,$f6,$z5,5,4);//Fila 6, Columna 5
			casilla($m,$c6,$f6,$z5,5,5);//Fila 6, Columna 6
			casilla($m,$c7,$f6,$z6,5,6);//Fila 6, Columna 7
			casilla($m,$c8,$f6,$z6,5,7);//Fila 6, Columna 8
			casilla($m,$c9,$f6,$z6,5,8);//Fila 6, Columna 9
			casilla($m,$c1,$f7,$z7,6,0);//Fila 7, Columna 1
			casilla($m,$c2,$f7,$z7,6,1);//Fila 7, Columna 2
			casilla($m,$c3,$f7,$z7,6,2);//Fila 7, Columna 3
			casilla($m,$c4,$f7,$z8,6,3);//Fila 7, Columna 4
			casilla($m,$c5,$f7,$z8,6,4);//Fila 7, Columna 5
			casilla($m,$c6,$f7,$z8,6,5);//Fila 7, Columna 6
			casilla($m,$c7,$f7,$z9,6,6);//Fila 7, Columna 7
			casilla($m,$c8,$f7,$z9,6,7);//Fila 7, Columna 8
			casilla($m,$c9,$f7,$z9,6,8);//Fila 7, Columna 9
			casilla($m,$c1,$f8,$z7,7,0);//Fila 8, Columna 1
			casilla($m,$c2,$f8,$z7,7,1);//Fila 8, Columna 2
			casilla($m,$c3,$f8,$z7,7,2);//Fila 8, Columna 3
			casilla($m,$c4,$f8,$z8,7,3);//Fila 8, Columna 4
			casilla($m,$c5,$f8,$z8,7,4);//Fila 8, Columna 5
			casilla($m,$c6,$f8,$z8,7,5);//Fila 8, Columna 6
			casilla($m,$c7,$f8,$z9,7,6);//Fila 8, Columna 7
			casilla($m,$c8,$f8,$z9,7,7);//Fila 8, Columna 8
			casilla($m,$c9,$f8,$z9,7,8);//Fila 8, Columna 9
			casilla($m,$c1,$f9,$z7,8,0);//Fila 9, Columna 1
			casilla($m,$c2,$f9,$z7,8,1);//Fila 9, Columna 2
			casilla($m,$c3,$f9,$z7,8,2);//Fila 9, Columna 3
			casilla($m,$c4,$f9,$z8,8,3);//Fila 9, Columna 4
			casilla($m,$c5,$f9,$z8,8,4);//Fila 9, Columna 5
			casilla($m,$c6,$f9,$z8,8,5);//Fila 9, Columna 6
			casilla($m,$c7,$f9,$z9,8,6);//Fila 9, Columna 7
			casilla($m,$c8,$f9,$z9,8,7);//Fila 9, Columna 8
			casilla($m,$c9,$f9,$z9,8,8);//Fila 9, Columna 9
			for ($i=0; $i<=8; $i++){
				for ($j=0; $j<=8; $j++){
					$suma=$suma+$m[$i][$j];
					
				}
			}
			$k++;
		}
		if($suma==405&&$k<100&&$fin==0){
			printsudoku($m);
			$fin=1;
			return $k;
		}
		return $k;
	}
	$m=array(
		array(0,6,0,1,0,4,0,5,0),
		array(0,0,8,3,0,5,6,0,0),
		array(2,0,0,6,0,0,0,0,1),
		array(8,0,0,4,0,7,0,0,6),
		array(0,0,6,0,0,0,3,0,0),
		array(7,0,0,9,0,1,0,0,4),
		array(5,0,0,0,0,0,0,0,2),
		array(0,0,7,2,0,6,9,0,0),
		array(0,4,0,5,0,8,0,7,0)
	);
	$fin=0;
	printsudoku($m);
	$k=resolver($m,$fin);
	echo "Dificultad: $k";
	$i=0;
	$j=0;
	while ($k==100&&$i<9&&$j<9&&$fin==0){
		$n=$m;
		rellenar($n,$i,$j);	
		resolver($n,$fin);
		$i++;
		if($i=9){
			$i=0;
			$j++;
		}
	}
	
?>	