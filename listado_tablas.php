<?php
    $dbhost = "localhost"; 
    $dbuser = "root";
    $dbname = "prueba_ajax";
    mysql_connect($dbhost,$dbuser);
    $gtablas = mysql_list_tables($dbname);
    	while (list($bases) = mysql_fetch_row($gtablas)) {
    echo '
        <form class="f1" action="traertablas.php" class="asidenav">
        <input type="text" name="bases" value="'.$bases.'" style="display:none;"><br>
        <input class="btn_fam" type="submit" name="bases" value="'.$bases.'"><br>
        </form>
    '; 
    }
?>	
