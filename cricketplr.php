<html>
<center>
<body bgcolor="lightblue">
<?php
$name=["virat kohle","Rohith sharma","Shikar Dhavan","Hardik pandya","Shuhaib Akther"];
echo"<h4> Cricket Team Players Name </h4>
<table border='1px'>
<tr><th>S1 no </th> <th> Name </th> </tr>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo"<tr> <td> $sl</td> <th>$name[$i]</th></tr>";
}
echo"</table>";
?>
</body>
</html>
