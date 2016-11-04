<?php  

include("license_key.class.php");

$pass=new license_key();

$numkeys=1;
$keylen=20;

for($i=0;$i<$numkeys;$i++){
	$pass->keylen=$keylen;
	echo $key= $pass->codeGenerate();
	//echo "$key <br/>";
}

?>