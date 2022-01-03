<?php 
#1
 echo  nl2br ("hello \n php");  /*nl2br to make html uderstands that \n is new line*/
 echo "<br>";
 echo "<br>"."*************************************"."<br>";
#2
$trimit = 'junk awesome stuff junk'; /* trim delete  selected string from major string
we can use it to remove spaces from string " " */ 
$trimmed = trim ( $trimit, 'junk' ); /*oup put >>> awesome stuff  */
echo $trimmed."<br>"; /*there is space before awesome  and after stuff*/ 

$awesome = "Super Awesome!"; /* strpos fun return the position of 
enire letter one char. only  and the last parameter from point to start the search */
echo strpos($awesome, 'A' , 3)."<br>";

$url = 'vegibit.com'; /* checkin g if string or not return 1 or 0 */
$num=50;
 if ( is_string( $url )==1){
echo "$url"." is string"."<br>";
 }
 if(is_string($num)==0){
    echo "$num"." is not a string"."<br>";
 }
 echo "<br>"."*************************************"."<br>";
    #3
    foreach ($_SERVER as $key => $value) { /* display _server in readable way*/ 
       echo "$key ===>>> $value"."<br>";
    }
    echo "<br>"."*************************************"."<br>";
    #4
 $array=array(); /*create array*/
 switch($array){  /*fill the array */
    case $array[0]:
        $array[0]=12;
        echo "the frist index is ".$array[0]."<br>";
        case $array[1]:
            $array[1]=45;
            echo "the second index is ".$array[1]."<br>";
            case $array[2]:
                $array[2]=10;
                echo "the third index is ".$array[2]."<br>";
                 case $array[3]:
                     $array[3]=25;
                      echo "the fourth index is ".$array[3]."<br>";
                       default:
 } 
print_r($array);
 echo "<br>" ;  /*print the array*/
 rsort($array);/**sorting reverse order */
 print_r($array);
echo "<br>"."*************************************"."<br>";
 #5
 /*sorting associative array by ky and value*/
 $ar=array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
 foreach($ar as $key=>$value ){
    echo "sort by value "."$key ===>> $value"."<br>";
}
echo "////////////////////"."<br>";
 asort($ar); 
 echo "<h3>sort by value from low to high</h3>"."<br>";
 foreach($ar as $key=>$value ){
    echo "$key ===>> $value"."<br>";
}
echo "<h3>sort by value from high to low t</h3>"."<br>";
arsort($ar);
foreach($ar as $key=>$value ){
   
   echo "$key ===>> $value"."<br>";
}
echo "<h3> sort by key from low to high"."<br>";
ksort($ar);
foreach($ar as $key=>$value ){
   
    echo "$key ===>> $value"."<br>";
 }
 krsort($ar);
 echo "<h3> sorty by key from high to low"."<br>";
 foreach($ar as $key=>$value ){
   
    echo "$key ===>> $value"."<br>";
 }

?>
 
