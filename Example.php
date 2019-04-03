<?php
include "JsonParser.php";
/* Version: 2.2+ */
print $json->encode([1,2,3,4])."\n";
print $json->encode([1,2,[94,15,34,67],3,4,["name"=>"max"]])."\n";
print $json->encode(["name"=>"max","age"=>49,"username"=>"BaseMax"])."\n";
print $json->encode(["0"=>"max","1"=>49,"2"=>"BaseMax"])."\n";
print $json->encode([0=>"max",1=>49,2=>"BaseMax"])."\n";
print $json->encode([0=>"max","1.5"=>49,2=>"BaseMax"])."\n";
print "\n\n";
print $json->decode('[]')."\n";
print $json->decode('{}')."\n";
print $json->decode('["1"]')."\n";
print $json->decode('["123456"]')."\n";
print $json->decode('["hi"]')."\n";
print $json->decode('["hi\""]')."\n";
print $json->decode('["hi\"!"]')."\n";
print $json->decode('[13]')."\n";
print $json->decode('[134]')."\n";
print $json->decode('[8]')."\n";
print $json->decode('[0]')."\n";
print $json->decode('[-9]')."\n";
print $json->decode('[-945]')."\n";
print $json->decode('[3.1]')."\n";
print $json->decode('[3.145]')."\n";
print_r($json->decode('			  [  -3.145,4,"test"]'));
print_r($json->decode('			  [  -3.145,4,"test","name":"max"]'));
print_r($json->decode('			  [  -3.145,4,"name","max",]'));
print_r($json->decode('			  [  -3.145,4,"name","max",,,,,,,]'));
print_r($json->decode('			  [,]'));
print_r($json->decode('			  [,,,,]'));
print_r($json->decode('			  [,,,,4]'));
print_r($json->decode('{}'));
print_r($json->decode('{"a":4,"6":945,,,}'));
print_r($json->decode('{"a":4,"b":456,,,,}'));
print_r($json->decode('{,"a":4,}'));
print_r($json->decode('{,,,"a":4,"b":456,,,,}'));
print_r($json->decode('{,,,,"a":4,,,,,,"6":945,,,}'));
print_r($json->decode('[,,,,]'));
print_r($json->decode('[4]'));
print_r($json->decode(' [,,,,4]'));
print_r($json->decode(' [  , , , , 4]'));
print_r($json->decode(' [  , , , , 4 ]    '));
print_r($json->decode(' [  , , 	,	 , 	4	 ]    '));
print_r($json->decode("[\n]"));
print_r($json->decode('["max",49,"BaseMax"]'));
print_r($json->decode('[1,[]]'));
print_r($json->decode('[1,[4]]'));
print_r($json->decode('[1,[4,,,6,[8]]]'));
print_r($json->decode('{"name":"Max","line":456,,,,}'));
print_r($json->decode('{"name":"Max","line":456,,,,}'));
// print_r($json->decode('{"name":"Max",4:555,,,,}')); // Error!
print_r($json->decode('[null,false,true]'));
$res=($json->decode('[null,false,true]'));
var_dump($res[1]);
var_dump($res);
var_dump($json->decode('[null,false,true,]'));
print_r($json->decode("[\"45\\\\\"]"));
$arg='["4\\\\"]';
var_dump($arg);
print $arg."\n";
print_r($json->decode($arg));
print_r($json->decode('["1\u05B5"]'));
print_r($json->decode('["1\u05F1"]'));
print_r($json->decode('["1\u05F"]'));
print_r($json->decode('["1\u05FX"]'));
print_r($json->decode('["1\uM05F"]'));
print_r($json->decode('["1\uM0\'5F"]'));

/* Version: 0 - 2.0
$data=json_encode([1,2,3,4,5,"n\"am':=>[]{}e"=>"ali"]);
$data=json_encode(["name"=>"ali","int"=>110,"float"=>19.98,"-int"=>-110,"-float"=>-19.98,"bool"=>true]);
//$data=json_encode(["name"=>"ali","int"=>110,"float"=>19.98,"-int"=>-110,"-float"=>-19.98,"bool"=>true,"list"=>[1,2,3,4,5]]);
//$data=json_encode(["name"=>"ali","int"=>110,"float"=>19.98,"-int"=>-110,"-float"=>-19.98,"bool"=>true,"list"=>["name"=>"ali","family"=>"ahmadi"]]);
//print $data."\n";
//$array=$json->decode($data);
//$array=$json->decode('{"list":{"name":"ali","family":"ahmadi"}}');
$array=$json->decode('{"list":{"name":"ali","family":"ahmadi"},"age":18}');
//$array=$json->decode('{"name":"ali","int":110,"float":19.98,"-int":-110,"-float":-19.98,"bool":TRUE,"bbb":false}');
print_r($array);
//print_r($json->array);
*/
