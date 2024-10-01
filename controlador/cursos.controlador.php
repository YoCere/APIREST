<?php
class ControladorCursos{

    public function index(){

        $clientes=ModeloCliente::index("clientes");

        if(isset($_SERVER["PHP_AUTH_USER"]) && isset($_SERVER["PHP_AUTH_PW"])){
            foreach($clientes as $key=>$valueCliente){
                if($_SERVER["PHP_AUTH_USER"].":".$_SERVER["PHP_AUTH_PW"]==$valueCliente["id_cliente"].":".$valueCliente["llave_sectreta"]){
                    $cursos=ModeloCursos::index("cursos");
                    $json=array(
                        "status"=>200,
                        "detalle"=>$cursos
                    );
                    echo json_encode($json, true);
                    return;
                }
                
            }
        }

      
    }
}
?>