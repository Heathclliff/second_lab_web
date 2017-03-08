<?php 
$bool1=True; //a boolean
echo $bool1;
echo"<br/>";
print $bool1;
echo  "<br/>";
#$bool {color:red;};
echo gettype($bool1); 
echo"<br/>";
echo"<br/>";

$str="Mama mila ramy!";
echo $str;
echo"<br/>";
print $str;
echo"<br/>";
echo gettype($str);
echo"<br/>";
echo"<br/>";

$integer=12;
echo $integer;
echo"<br/>";
print $integer;
echo"<br/>";
echo gettype($integer);
echo"<br/>";
echo"<br/>";

$double=1.1;
echo $double;
echo"<br/>";
print $double;
echo"<br/>";
echo gettype($double);
echo"<br/>";
echo"<br/>";


$array = array( 1=> "one",2=>"two");
echo $array[1];
echo"<br/>";
print $array[2];
echo"<br/>";
echo gettype($array);
echo"<br/>";
echo"<br/>";

class test
  {
    function output()
	{
	  echo "<p style='color:red'>I outputing func</p>";
	  echo"<br/>";	
	}
    function output2()
	{
	  print "I outputing func2";
          echo"<br/>";	
	}
   }
$obj = new test;
$obj->output();
$obj->output2();
echo gettype($obj);
echo"<br/>";
echo"<br/>";

$null1= NULL;
echo $null1;
print $null1;
echo gettype($null1);
echo"<br/>";
echo"<br/>";
print_R(get_defined_vars());
?>
