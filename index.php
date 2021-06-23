<html>
<head>
<title> Online Calculator </title>
</head>
<body>
<form action = "" method = "post">
Enter a number: <input type = "text" name = "inputNumber"/>
<input type = "submit" name = "submitButton"/>
</form>
<? function hex($n)
{
$char_map = array(0 =>"0",1 =>"1",2 =>"2",3 =>"3",4 =>"4",5
=>"5",6 =>"6",7 =>"7",8 =>"8",9 =>"9",10 =>"A",11 =>"B",12
=>"C",13 =>"D",14 =>"E",15 =>"F");
$result = array();
for($i = 0; $n > 0; $i++)
{
$result[$i] = $char_map[$n % 16];
$n = intval($n / 16);
}
echo "\n- Hex: ";
for($i=$i-1; $i >= 0; $i--)
{
echo "$result[$i]";
}
}
function bin($n)
{
$result = array();
for($i = 0; $n > 0; $i++)
{
$result[$i] = $n % 2;
$n = intval($n / 2);
}
echo "- Bin: ";
for($i=$i-1; $i >= 0; $i--)
{
echo "$result[$i]";
}
}
function oct($n)
{
$result = array();
for($i = 0; $n > 0; $i++)
{
$result[$i] = $n % 8;
$n = intval($n / 8);
}
echo "\n- Oct: ";
for($i=$i-1; $i >= 0; $i--)
{
echo "$result[$i]";
}
}
?>
<?php
$message = "";
if(isset($_POST['submitButton']))
{
$input = $_POST['inputNumber'];
echo "- Dec: $input";
$hex = hex($input);
$bin = bin($input);
$oct = oct($input);
}
echo $message;
?>
</body>
</html>