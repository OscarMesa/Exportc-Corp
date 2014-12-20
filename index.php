<!DOCTYPE HTML>
</html>
<?php 
     $user ="root";
     $pass = "";
     $server="localhost";
     $db ="tablatarifas";
     $conn = mysql_connect($server,$user,$pass) or die ("Error al conectarse".mysql_error());
     mysql_select_db($db);           
 ?>
<html>
<head>
    <title></title>
</head>
<body>
  
    <form method='POST' name='formselect' action=''>
      <select name="envio">     
             <option value='1' name='envio' onchange='submit()'>
                  correo                  
             </option>
             <option value='2'>
                  carga                  
             </option>

        </select><br/>
       <select name="origene" onchange='Submit()'>     
             <option>
                  AREA - METROPOLITANA
             </option>
        </select><br/>
        <select name="destino" onchange='submit()'>     
             <?php   
                                
                    $sql = "SELECT * FROM CostoEnvio order by destino"; 
                    $query = mysql_query($sql);              
                    while ($row=mysql_fetch_array($query)) {                                       
                       echo "<option value='".$row['sobre']."'"; 
                       if($_POST['destino']==$row['sobre'])  
                       echo "selected";
                       echo ">";                                         
                       echo $row['destino'];
                       echo '</option>'; 
                     }          
                    
              ?>
        </select>
       <input type='txt' name='txtcarga' valua='submit()'>
   </form>
    <?php 
       $resdestino = $_POST['destino'];
       $txt = $_POST['txtcarga'];
       echo "envio ".$resdestino * $txt;
      /* if($_POST['txtcarga'] < 30)
        echo "valor minimo bd";
       else
         ($_POST['txtcarga'] * -30)* $_POST['kilo'] + $_POST['minimogk'];*/
     ?>
</body>
</html>

