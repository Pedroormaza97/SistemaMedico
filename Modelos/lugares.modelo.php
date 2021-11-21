<?php
    class mdl_lugares{
        private $conexion;
        function __construct(){
            require_once 'ConexionLugar.php';
            $this->conexion = new conexion_l();
            $this->conexion->conectar();

        }
        function listar_provincias(){
            $sql = "call SP_LISTAR_COMBO_PROVINCIA";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {
                        $arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }
           function listar_canton($idprovincia){
            $sql = "call SP_LISTAR_COMBO_CANTON('$idprovincia')";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                        $arreglo[] = $consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

            function listar_parroquia($idCanton){
                        $sql = "call SP_LISTAR_COMBO_PARROQUIA('$idCanton')";
                        $arreglo = array();
                        if ($consulta = $this->conexion->conexion->query($sql)) {
                            while ($consulta_VU = mysqli_fetch_array($consulta)) {
                                    $arreglo[] = $consulta_VU;
                            }
                            return $arreglo;
                            $this->conexion->cerrar();
                        }
                    }        

    }
?>