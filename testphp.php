
<?php 
//string variable
    /* $namePerson="myName";
     $lastPerson="myLastName";
     $person=$namePerson.$lastPerson; //to concat strings
     $phrase=$namePerson." the name and his last is ". $lastPerson;
     $newPhrase="$namePerson and $lastPerson";
     $ch1="hello this is \"waaaaaaaaaw\" and wow";
     echo $newPhrase;
     echo strtoupper($phrase);*/
//string variable

//number variable
//$age=24;//integer variable
//echo $age++;//24
//echo $age;//25 because it's continue (synchronous)
//$height=1.82;//decimal variable
//ceil($height)
//number variable

//indexed Arrays
//$tab=["hello","welcome","hi"];
//$multivariable=["person",2,4,true];

//echo expects a string
//print_r($multivariable);//print readable
//$multivariable[1]="animal";
//$multivariable[]="element";//add element
//echo count($multivariable);//get the size of the multivari
//print_r($multivariable);
//$mergedtab=[$multivariable,"merged",$tab];
//print_r($mergedtab);

//Associative Arrays[key pairs value]
//$categories=["flower"=>"jurys","parfum"=>"interdit","color"=>"bleu"];
//echo $categories["parfum"];

//multidimensional array
/*$persons=[
    ["mark",25,"markous"],
    ["john",25,"johnsh"],
    ["bruno",25,"bro"],
];
$fullpersons=[
    ["name"=>"mark","age"=>25,"kickName"=>"markous"],
    ["name"=>"john","age"=>25,"kickName"=>"johnsh"],
    ["name"=>"bruno","age"=>25,"kickName"=>"bro"],
];
echo $fullpersons[1]["name"];
print_r($persons[1]);*/

//factoriel
//$fact=4;
//$somme=1;
//for($i=$fact;$i>0;$i--){
    //$somme=$somme*$i;
//}
//echo "le factoriel de $fact est $somme";

//forEach loop
//$persons=[["mark",25,"markous"],
//["john",25,"johnsh"],
//["bruno",25,"bro"],];
//foreach($persons as $person){
//    echo "$person[0]<br/>";
//};
//$fullpersons=[
//    ["name"=>"mark","age"=>25,"kickName"=>"markous"],
//    ["name"=>"john","age"=>25,"kickName"=>"johnsh"],
//    ["name"=>"bruno","age"=>25,"kickName"=>"bro"],
//];
//foreach($fullpersons as $fullperson){
//    echo  $fullperson['name'];
//}

//while
/* $counter=0;
while($counter<15){
    echo $counter;
    $counter++;
};
//do while
do{
    echo $counter;
    $counter++;
} while($counter<15) */

//comparaison
/* echo true;//1
 echo false;//0
 echo 1==1;//1
 echo "yoshi">"abdereferf";//1
 echo "yoshi">"Yoshi";//1

$isHigher=true;
if($isHigher){
    echo "higher";
}
else{
    echo "lower";
}*/


/*function factorial($fact=3){//parameter
    $somme=1;
    for($i=$fact;$i>0;$i--){
        $somme=$somme*$i;
    }
    return $somme;

}
$xnumbr=factorial(4); //argument
echo $xnumbr;*/

//variable scope

/*$name="mario";

function printName(){
    global $name; //to access th name in the global
    $name="Yoshi";//change the variable in the global scope.
    echo $name;
}
printName();
echo $name//Yoshi*/
//include('index.php');
//require('index.php') ;//when error it blocks the code
?>