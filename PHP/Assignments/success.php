 <?php
 echo '<table border="1">';
   foreach ($_GET AS $key=>$value){
	  echo '<tr>';	
      echo '<td><h3/>' .$key.'</td><td>'.$value.'<h3/></td>';
	  echo '</tr>';
   }
 echo '</table>';
 ?>