<?php
if(isset($_SESSION['tipo']) and $_SESSION['tipo']=='admin'){
    
}else{
    echo "<h1>no tienes acceso porfavor inicia sesion</h1>";
    return view('login');
    die();
}

?>