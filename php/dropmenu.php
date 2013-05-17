<?php
   //Creates a Drop Down List Contating Names of Municipalities
   // Create connection
   $con=mysqli_connect("127.0.0.1","root","","terveyspuu");

   // Check connection
   if (!mysqli_connect_errno($con)) {

      $query="SELECT DISTINCT `AreaName` FROM `indicators`";
      $data=mysqli_query($con, $query);
   
      echo "<select name = \"webmenu\" id = \"select\" onchange=\"drawToMainPaper()\">";
      $id = 1;
      while($row=mysqli_fetch_row($data))
      {
         echo "<option value=\"".$id."\" data-image=\"pics/municipality_logos/".$id.".png\">".utf8_encode($row[0])."</option>";
         $id++;
      }
      echo "</select>";
   }
   else
   {
      echo "Database is down for maintenance";
   }

?>
