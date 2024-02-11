<?php
echo "hello world <br>";
$charchterName= "string type";
$charchterName=25;
$charchterAge= 35;
define('PI',3.14);//to declare constant
// if($charchterAge==25){
//     echo "you re authorized to work";
// }
// else if ($charchterAge<25){
//     echo "i think you re under age ";
// }
// else{
//     echo "i think you re not accepted ";
// }

// $userAge = 24;

// $isAdult = ($userAge >= 18) ? true : false;

// // Ou mieux, dans ce cas précis
// $isAdult = ($userAge >= 18);
// $num1= 25;
// $num2=5;
// $sum= $num1+$num2;
// $sub=$num1-$num2;
// $mod=$sum% $num2;
// echo "somme $sum <br>";
// echo "sous $sub <br>";
// echo "modulo $mod ";
// echo 'hello 2' .$charchterName. 'deux fois';
// echo "bonjour $charchterAge it's nice $charchterName"
// echo "hello $charchterName you re $charchterAge";
// echo strlen($charchterName);
// $num= 10;
// $num2= 10.01;
// $num3= -10;
// $num4= $num++;
// $num5= $num4--;
// $num5+=100;
// $num5-=100;
// $num5/=5; 
// $num5=$num5/5;
// $num5%=10;
// echo abs($num2);
// echo pow($num4,5);
// echo $_GET["username"];
// $friends= array("Jane",1,true,"Mike","Mahe");
// echo $friends[0];
// echo $friends; //Array
// echo count($friends);
// $tempVerif=25;
// $weather= ($tempVerif==25) ? true:false;
// echo $weather;
$tab1= ["green","bleu","purple","orange"];
$tab2=["berries","oranges","apples","pinapple"];
$tab3=["cats","tigers","giraffe","horses"];
$tab4=[$tab1,$tab2,$tab3];
echo $tab4[1][3];
?>
<?php 
// echo "Cette ligne a été écrite \"uniquement\" en PHP.";
 ?>
 <?php
 $increment=10;
//  while($increment>0){
    
//     echo "you re number $increment : <br> ";
//     $increment--;
//  }
for ($decrement=0;$decrement<10;$decrement++){
    echo '<li>hello to number' .$decrement. 'yes yes </li><br>';

}
 ?>