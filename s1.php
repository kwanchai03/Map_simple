<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "dada";
       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       $sql = "SELECT * FROM rl ORDER BY id desc ";
       $query = mysqli_query($conn,$sql);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
        }
?>
<center>
<table width="700" border="#000000"  bgcolor="#ffffff"  >
  <tr>
    <th width="198"> <div align="center">id </div></th>
    <th width="198"> <div align="center">latitude </div></th>
    <th width="198"> <div align="center">longitude </div></th>
    <th width="250"> <div align="center">date </div></th>
        <th width="250"> <div align="center">time </div></th>
    
  </tr>
<?php
while($objResult = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["id"];?></div></td>
    <td><div align="center"><?php echo $objResult["ranel"];?></td>
    <td><div align="center"><?php echo $objResult["rarara"];?></td>
    <td><div align="center"><?php echo $objResult["date_a"];?></div></td>
     <td><div align="center"><?php echo $objResult["tt"];?></div></td>
   
  </tr>
<?php
}
?>
</table>
</center>
</h4>
<?php
mysqli_close($conn);
?>