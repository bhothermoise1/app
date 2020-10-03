<?php

class reporte_asistencias
{
    public $max_personas;
    
    public function get_total_docentes(){
        include 'conexion.php';
        $sql = "SELECT COUNT(*) as total_docentes FROM docentes";
        $res_query =  mysqli_query($mysqli, $sql);
        $res_query = mysqli_fetch_array($res_query);
        print_r ($res_query[0]);
    }
    public function get_data_year()
    {
        include 'conexion.php';
        /** Ultimo dia del mes **/
        function ultimo_dia_mes($mes)
        {
            $month = date($mes);
            $year = date('Y');
            $day = date("d", mktime(0, 0, 0, $month + 1, 0, $year));
            return date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
        }

        /** Primer dia del mes **/
        function prime_dia_mes($mes)
        {
            $month = date($mes);
            $year = date('Y');
            return date('Y-m-d', mktime(0, 0, 0, $month, 1, $year));
        }


        // Inicializamos el array para que no de error   
        $array_fechas = array();

        for ($x = 1; $x <= 12; $x++) {

            $sql_trabajadores_cant = "SELECT fecha, COUNT(*) AS total_personas, SUM(asistencia) AS total_asistencias
FROM asistencia_personal WHERE (fecha>='" . prime_dia_mes($x) . "' and fecha<='" . ultimo_dia_mes($x) . "') GROUP BY fecha";
            $cantidad_trabajadores = mysqli_query($mysqli, $sql_trabajadores_cant);
            $cantidad_trabajadores = mysqli_fetch_all($cantidad_trabajadores);
            array_push($array_fechas, $cantidad_trabajadores);
        }
        // die();
        $count = 0;
        $array_max_person=array();
        foreach ($array_fechas as $mes) {
            $count++;
            if (!$mes) {
                echo '0';
            } else {
                $suma_asistentes_dia = 0;
                $total_personas = 0;
                
                foreach ($mes as $key => $value) {
                    $cantidad_a_dividir = count($mes);
                    $suma_asistentes_dia = $suma_asistentes_dia + $value[2];
                    $total_personas = $total_personas + $value[1];
                    
                    array_push($array_max_person ,(int)$value[1]);
                    
                    // print_r($array_max_person);
                }

                $total_personas = $total_personas / $cantidad_a_dividir;

                print_r($suma_asistentes_dia / $cantidad_a_dividir);
                // echo "<br>".($total_personas);
                $cantidad_a_dividir = 0;
                $suma_asistentes_dia = 0;
                $total_personas = 0;
            }

            if ($count <= 11) {
                echo ",";
            }
        }
    }
}


