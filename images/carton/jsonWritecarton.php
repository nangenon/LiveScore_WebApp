<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$strsortie = base64_decode( $_REQUEST['strcarton'] );   
$fic=fopen('tmp/carton_table'.$_REQUEST['table'].'.json','w');
fwrite($fic, $strsortie);
fclose($fic);  