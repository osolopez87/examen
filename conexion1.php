<?php

    $con = new mysqli("localhost", "root", " ", "informacion");

    if($con){
        $sql = "SELECT * FROM datos";
        $query = $con -> query($sql);
        
        $data = array();
        while($r=$query->fetch_assoc()){
            $data[]=$r;
        }
        echo json_encode(array("contactos"=>$data));
    }
    else{
        echo("no existe coneccion");
    }
?>
