<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 4_3 Rohmad jalaludin </title>

</head>
<body>

	<?php
  $d=5;
  echo "Piramida Setengah Kanan";
  echo "<br>";
    for ($a= 1;$a<=$d;$a++){
      echo "<br>";
	   	for ($b=1;$b<=$a;$b++){
       echo "*";
      }
    }

echo "<br>";
echo "<br>";
echo "Piramida Setengah Kiri";
echo "<br>";
  for ($a= 1;$a<=$d;$a++){
      echo "<br>";
    for ($b=$a;$b<=$d-1;$b++){
    echo "&nbsp ";  
    }
      for ($c=$d+1-$a;$c<=$d;$c++){
      echo "*";
      }
  }

echo "<br>";
echo "<br>";
echo "Piramida Penuh";
echo "<br>";
echo "<br>";
for ($a= 1;$a<=$d;$a++){
    
  for ($b=$a;$b<=$d-1;$b++){
     echo "&nbsp ";
  }
    for ($c=$d+1-$a;$c<=$d+$a-1;$c++){
      echo "*";
    }
echo "<br>";
}

  ?>
</body>
</html>