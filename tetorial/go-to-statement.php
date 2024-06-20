<?php
 $a=10;
 echo "my name is amit";
 echo "<br>";
 if($a==10){ //this condition will not match thne print name section
    goto jump;
 }
 $name="amit";
 echo $name;


 //eneting code 

 jump:
 echo " this condition will jumpp 4 line to 13 line ";
 
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";


?>

<?php
for($i=1;$i<10;$i++){
    echo $i;
    echo "<br>";
    if($i==5){
        goto out;
    }
   // echo $i;
   echo "<br>";
}
out:
echo " code jump";
?>