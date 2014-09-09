<form action="1.php" method="post">
Выберите здания, которые необходимо посетить. <br />
<input type="text" name="formDoor[]" value="A" />Acorn Building<br />

<input type="text" name="formDoor[]" value="B" />Brown Hall<br />
<input type="text" name="formDoor[]" value="C" />Carnegie Complex<br />

<input type="text" name="formDoor[]" value="D" />Drake Commons<br />
<input type="text" name="formDoor[]" value="E" />Elliot House

<input type="submit" name="formSubmit" value="Submit" />
</form> 
<?php
  $aDoor = $_POST['formDoor'];
  if(empty($aDoor))
  {
    echo("Вы ничего не выбрали.");
  }
  else
  {
    $N = count($aDoor);
    echo("Вы выбрали $N здание(й): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>  