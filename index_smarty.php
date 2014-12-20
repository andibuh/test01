<?php
    include_once 'classes/TestProjektSmarty.php';
    $smarty = new TestProjektSmarty();

    $smarty->assign('title', 'Startseite');
    $smarty->assign('content', 'content_index.tpl');

    $smarty->display('layout.html');
?>