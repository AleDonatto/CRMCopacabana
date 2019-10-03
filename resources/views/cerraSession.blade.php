<?php 
session_start();
session_destroy();
header('Location: http://crm.test/iniciar');
//return redirect('/welcome');
?>