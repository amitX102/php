<?php

//string
   $name="amit kuili";
   echo $name;
   
   echo var_dump($name);    //data type 
   
//number
   $num=10*10;
   echo $num;
   echo var_dump($num);

//float
$num=100.10;
echo $num;
echo var_dump($num);


//boolean
$bool=true;
echo var_dump($bool);


//null
$empty=null;
echo var_dump($empty);


//array
$arr=["amit","ankit",10,100.10];
echo var_dump($arr);

//object(class)
$connection =ftp_connect("127.0.0.1")or die("local hot not found");
echo var_dump($connection);

//recoures


?>