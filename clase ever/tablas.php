<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
  <title>Tablas</title>
</head>
<body>

<?php  
 
 // mostramos numeros con el arraynt recorremos todos para poder recorrer hasta el final,,con el count(funcion)
 $array = [1,2,3,"kenmer","Mariana"];

 for($i=0; $i<count($array); $i++)
 {
  echo $array[$i]. "</br>";
 }

 //los array sin indice
  $array_without__indice = [0,2,3,1];
 
 //array con indice
  $array_with_indice = array(
    "D1" => "Kenmer",
    "D2" => "Mariana"

     );

  //ARRAY MULTIDIMENSIONAL
$array_multi = array(
   array(
  "item" => 1 ,
  "nombre" => "Mariana",
  "Codigo" => 87776,
  "asistencia" => true
  ),
array(
  "item" => 1 ,
  "nombre" => "Kenmer",
  "Codigo" => 87777,
  "asistencia" => true
  ),
array(
  "item" => 1 ,
  "nombre" => "liz",
  "Codigo" => 87778,
  "asistencia" => true
  ),

);

  echo "</br><h1>" . $array_with_indice["D2"]."</h1>";

?>

  <table border="1" align="center">

<!--el tr es para colocar una fila más -->
<!--el td es para colocar columnas -->
       <tr> 
           <th>item</th>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Asistencias</th>  
       </tr>

       <!-- a continuación se muestra como se imprime las tablas -->
      <?php for($i=0 ; $i<count($array_multi); $i++) 
      {
          ?>
       <tr>
           <td><?php echo $array_multi[$i]["item"]?></td>
           <td><?php echo $array_multi[$i]["nombre"]?></td>
           <td><?php echo $array_multi[$i]["Codigo"]?></td>
           <td><?php echo $array_multi[$i]["asistencia"]?></td>
      
           
       </tr>
      <?php } ?>

    
   </table>


</body>
</html> 
