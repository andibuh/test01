<?php
    require('db.php');
    include_once 'classes/TestProjektSmarty.php';
    $abfrage = "SELECT * FROM personen";
    $ergebnis = mysql_query($abfrage);
    //$res = mysql_result(, $row)
    //$erg[] = $ergebnis;
    
    if ( !$ergebnis ) die('MySQL-Fehler:') ; 
    
    $res = array();
while($row = mysql_fetch_assoc($ergebnis)){
    $res []=$row;

}
    
   echo '<pre>'.print_r($res,true).'</pre>';  
   //echo mysql_result($ergebnis,0,0);
    //$erg = [];
    //while($row = mysql_fetch_object($ergebnis))
    // {
    //$erg[$row->FNR] = $row->FUNKTION;
    // echo $row->FNR.'  '.$row->FUNKTION;   
      
   //}
   
    $smarty = new TestProjektSmarty();
    $smarty->assign('result', $res );
    $smarty->assign('title', 'Startseite');
    $smarty->assign('content', 'content_index.tpl');

   
    
    $smarty->display('layout.html');
?>