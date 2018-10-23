@include('includes.upper')

<div class="content-wrapper">

   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div id="pie" ></div>
            <div>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div id="bar" ></div>
            <div>
            </div>
         </div>
      </div>
   </div>

</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>

Highcharts.chart('pie', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'MIIT',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'MIAT',
            y: 11.84
        }, {
            name: 'MIMET',
            y: 10.85
        }, {
            name: 'UBIS',
            y: 4.67
        }, {
            name: 'BMI',
            y: 4.18
        }]
    }]
});
</script>

<script>

Highcharts.chart('bar', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'World\'s largest cities per 2017'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Shanghai', 24.2],
            ['Beijing', 20.8],
            ['Karachi', 14.9],
            ['Shenzhen', 13.7],
            ['Guangzhou', 13.1],
            ['Istanbul', 12.7],
            ['Mumbai', 12.4],
            ['Moscow', 12.2],
            ['São Paulo', 12.0],
            ['Delhi', 11.7],
            ['Kinshasa', 11.5],
            ['Tianjin', 11.2],
            ['Lahore', 11.1],
            ['Jakarta', 10.6],
            ['Dongguan', 10.6],
            ['Lagos', 10.6],
            ['Bengaluru', 10.3],
            ['Seoul', 9.8],
            ['Foshan', 9.3],
            ['Tokyo', 9.3]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
</script>


  @include('includes.footer')
