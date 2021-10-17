<!Doctype html>
<head>
    <title>Matrix Calculator</title>
</head>
<?php
$c=array();
$c[0][0]="";
$c[0][1]="";
$c[1][0]="";
$c[1][1]="";
if(isset($_POST['operator'])){
  $arr1_0_0=$_POST['arr1_0_0'];
  $arr1_0_1=$_POST['arr1_0_1'];
  $arr1_1_0=$_POST['arr1_1_0'];
  $arr1_1_1=$_POST['arr1_1_1'];
  $arr2_0_0=$_POST['arr2_0_0'];
  $arr2_0_1=$_POST['arr2_0_1'];
  $arr2_1_0=$_POST['arr2_1_0'];
  $arr2_1_1=$_POST['arr2_1_1'];
  $operator=$_POST['operator'];
 if(is_numeric($arr1_0_0)&&is_numeric($arr1_0_1)&&is_numeric($arr1_1_0)&&is_numeric($arr1_1_1)&&is_numeric($arr2_0_0)&&is_numeric($arr2_0_1)&&is_numeric($arr2_1_0)&&is_numeric($arr2_1_1))
 {
  $a=array(
      array($arr1_0_0,$arr1_0_1),
      array($arr1_1_0,$arr1_1_1)
  );
  $b=array(
      array($arr2_0_0,$arr2_0_1),
      array($arr2_1_0,$arr2_1_1)
  );
  //$c=array();
  for($row=0;$row<count($a);$row++)
{
    $size_of_col=count($a[$row]);
    for($col=0;$col<$size_of_col;$col++)
    {   
      if($operator=="   +   ")
      {
        $c[$row][$col]=$a[$row][$col]+$b[$row][$col];
      } 
      else if($operator=="   -   ")
      {
        $c[$row][$col]=$a[$row][$col]-$b[$row][$col];
      } 
      else
      {
          $c[0][0]= $a[0][0]*$b[0][0]+ $a[0][1]*$b[1][0];
          $c[0][1]= $a[0][0]*$b[0][1]+ $a[0][1]*$b[1][1];
          $c[1][0]= $a[1][0]*$b[0][0]+ $a[1][1]*$b[1][0];
          $c[1][1]= $a[1][0]*$b[0][1]+ $a[1][1]*$b[1][1];
      }        
    }   
}
}

//print_r($c[0][1]);


}
?>
<body>
    <h2>Lets Build a Matrix Calculator</h2>
    <form method="POST" >
    <lavel><p>Matrix 1 </p></lavel>
      <input type="number" step="0.01" placeholder="[0][0]" name="arr1_0_0">
      <input type="number" step="0.01" placeholder="[0][1]" name="arr1_0_1">
    <p>  
      <input type="number" step="0.01" placeholder="[1][0]" name="arr1_1_0">
      <input type="number" step="0.01" placeholder="[1][1]" name="arr1_1_1">  
    </p>  
    <lavel><p>Matrix 2 </p></lavel>
      <input type="number" step="0.01" placeholder="[0][0]" name="arr2_0_0">
      <input type="number" step="0.01" placeholder="[0][1]" name="arr2_0_1">
    <p>  
      <input type="number" step="0.01" placeholder="[1][0]" name="arr2_1_0">
      <input type="number" step="0.01" placeholder="[1][1]" name="arr2_1_1">  
    </p> 
    <p>
        <input type = "submit" value="   +   " name ="operator">
        <input type = "submit" value="   -   " name ="operator" >
        <input type = "submit" value="   *   " name ="operator"> 
    </p>

    <lavel><p>Result </p></lavel>
      <input placeholder="[0][0]"  value="<?php print_r($c[0][0]); ?>">
      <input placeholder="[0][1]"  value="<?php print_r($c[0][1]); ?>">
    <p>  
      <input placeholder="[1][0]" value="<?php print_r($c[1][0]); ?>">
      <input placeholder="[1][1]" value="<?php print_r($c[1][1]); ?>">  
    </p>   


    </from>
</body>


</html>
