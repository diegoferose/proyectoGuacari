<?php


function listar_archivos($carpeta){
$dir="";

	echo "
<body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"50\">

<div id=\"osdo\" class=\"container\">

		<div>


				";
    if(is_dir($carpeta)){
        if($dir = opendir($carpeta)){
            while(($archivo = readdir($dir)) !== false){
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){

                	  echo '<td align="center"><a target="_blank" href="'.$carpeta.'/'.$archivo.'">'.$archivo.'</a></td>';



                }
            }
            closedir($dir);

            echo "

			</div>		



			";
        }
    }
}

echo listar_archivos('../archivos');

?>
