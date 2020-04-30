@extends('contenido')
<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-light">

    <!-- Highchart-->
    <script src="{{ asset('js/highcharts.js') }}"></script>
    <script src="{{ asset('js/modules/exporting.js') }}"></script>
    <script src="{{ asset('js/modules/export-data.js') }}"></script>
    <script src="{{ asset('js/modules/accessibility.js') }}"></script>

    <section class="page-section bg-light">
        <div class="container">

            <ul class="nav nav-tabs nav-fill" id="mytab" role="tablist">
                <li class="nav-item">
                    <a href="#home" class="nav-link active" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Bar Agave</a>
                </li>
                <li class="nav-item">
                    <a href="#home2" class="nav-link" data-toggle="tab" role="tab" aria-controls="home2" aria-selected="false">Salon del Mar</a>
                </li>
                <li class="nav-item">
                    <a href="#home3" class="nav-link" data-toggle="tab" role="tab" aria-controls="home3" aria-selected="false">Montecarlo</a>
                </li>
                <li class="nav-item">
                    <a href="#home4" class="nav-link" data-toggle="tab" role="tab" aria-controls="home4" aria-selected="false">Salon Loxus</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <figure class="highcharts-figure">
                        <div id="table1"></div>
                        <p class="highcharts-description">
                            Chart showing stacked horizontal bars. This type of visualization is
                            great for comparing data that accumulates up to a sum.
                        </p>
                    </figure>
                </div>
                <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                    <figure class="highcharts-figure">
                        <div id="table2"></div>
                        <p class="highcharts-description">Chart showing stacked horizontal bars. This type of visualization is
                            great for comparing data that accumulates up to a sum.</p>
                    </figure>
                </div>
                <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                    <figure class="highcharts-figure">
                        <div id="table3"></div>
                        <p class="highcharts-description">
                            Chart showing stacked horizontal bars. This type of visualization is
                            great for comparing data that accumulates up to a sum.
                        </p>
                    </figure>
                </div>
                <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                    <figure class="highcharts-figure">
                        <div id="table4"></div>
                        <p class="highcharts-description">Chart showing stacked horizontal bars. This type of visualization is
                            great for comparing data that accumulates up to a sum.</p>
                    </figure>
                </div>
            </div>
            <!--<div style="width: 100%">
                {!! $EventosChart->container() !!}
            </div>-->
        </div> 
    </section>
</main>

<script type="text/javascript">
    Highcharts.chart('table1', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafica de Barras Bar Agave'
        },
        subtitle: {
            text: 'Copacabana'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'] // dias 
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{ // se le pasan la consulta 
            name: 'Disponibles',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Ocupado',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'DIsponible',
            data: [3, 4, 4, 2, 5]
        }]
    });

    Highcharts.chart('table2', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafica de Barras Salon del mar'
        },
        subtitle: {
            text: 'Copacabana'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Jane',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5]
        }]
    });

    Highcharts.chart('table3', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafica de Barras Montecarlo'
        },
        subtitle: {
            text: 'Centro de Congreso'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Jane',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5]
        }]
    });

    Highcharts.chart('table4', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafica de Barras Luxos'
        },
        subtitle: {
            text: 'Centro de Congreso'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit consumption'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Jane',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5]
        }]
    });
</script>


<!--{!! $EventosChart->script() !!}-->