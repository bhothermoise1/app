<?php
require '../procesos/reporte_asistencias.php';
$reporte_asistencias = new reporte_asistencias();
?>
<!DOCTYPE html>
<html>

<head>
    <title>SIAA-APP</title>
    <link rel="shortcut icon" href="../img/school.ico" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="loader.css">
    <link rel="stylesheet" type="text/css" href="../librerias/css/alertify.css">

    <!--Libreria de para la grafica-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-gl/dist/echarts-gl.min.js"></script>


</head>

<body class="hidden" style="background-color: #339FFF; ">



    <div class="centrado" id="onload">

        <div class="lds-facebook">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <?php
    include 'includes/menu-secretaria.php';
    ?>


    <div class="container">
        <div class="col-sm-12">
            <br>
            <h2 class="text-center">
                Reporte anual de asistencias
            </h2>
            <br>
            <br>
            <br>

            <div class="card mb-5">
                <div style="position: relative;right: 0;z-index:9999">
                <input class="btn btn-primary" type="button" name="imprimir" value="Imprimir" onclick="window.print();">
                </div>
                <div class="card-body vh-100">

                    <div id="grafica" style="height: 100%; width: 100%;"></div>

                    <script type="text/javascript">
                        var dom = document.getElementById("grafica");
                        var myChart = echarts.init(dom);
                        var app = {};
                        option = null;
                        var dataAxis = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                        var data = [<?php $reporte_asistencias->get_data_year(); ?>];
                        var yMax = <?php $reporte_asistencias->get_total_docentes(); ?>;
                        var dataShadow = [];

                        for (var i = 0; i < data.length; i++) {
                            dataShadow.push(yMax);
                        }

                        option = {
                            title: {
                                subtext: 'Registro estadistico del promedio de global de asistencias de los trabajadores.'
                            },
                            xAxis: {
                                data: dataAxis,
                                axisLabel: {
                                    inside: true,
                                    textStyle: {
                                        color: '#363636'
                                    }
                                },
                                axisTick: {
                                    show: false
                                },
                                axisLine: {
                                    show: false
                                },
                                z: 10
                            },
                            yAxis: {
                                axisLine: {
                                    show: false
                                },
                                axisTick: {
                                    show: false
                                },
                                axisLabel: {
                                    textStyle: {
                                        color: '#999'
                                    }
                                }
                            },
                            dataZoom: [{
                                type: 'inside'
                            }],
                            series: [{
                                    // For shadow
                                    type: 'bar',
                                    itemStyle: {
                                        color: 'rgba(0,0,0,0.05)'
                                    },
                                    barGap: '-100%',
                                    barCategoryGap: '40%',
                                    data: dataShadow,
                                    animation: true
                                },
                                {
                                    type: 'bar',
                                    itemStyle: {
                                        color: new echarts.graphic.LinearGradient(
                                            0, 0, 0, 1,
                                            [{
                                                    offset: 0,
                                                    color: '#83bff6'
                                                },
                                                {
                                                    offset: 0.5,
                                                    color: '#188df0'
                                                },
                                                {
                                                    offset: 1,
                                                    color: '#188df0'
                                                }
                                            ]
                                        )
                                    },
                                    emphasis: {
                                        itemStyle: {
                                            color: new echarts.graphic.LinearGradient(
                                                0, 0, 0, 1,
                                                [{
                                                        offset: 0,
                                                        color: '#2378f7'
                                                    },
                                                    {
                                                        offset: 0.7,
                                                        color: '#2378f7'
                                                    },
                                                    {
                                                        offset: 1,
                                                        color: '#83bff6'
                                                    }
                                                ]
                                            )
                                        }
                                    },
                                    data: data
                                }
                            ]
                        };

                        // Enable data zoom when user click bar.
                        var zoomSize = 6;
                        myChart.on('click', function(params) {
                            console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
                            myChart.dispatchAction({
                                type: 'dataZoom',
                                startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
                                endValue: dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
                            });
                        });
                        if (option && typeof option === "object") {
                            myChart.setOption(option, true);
                        }
                    </script>
                </div>
            </div>



            <script type="text/javascript" src="jquery-.js"></script>
            <script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../librerias/alertify.js"></script>
            <script type="text/javascript" src="../js/loader.js"></script>


</body>

</html>