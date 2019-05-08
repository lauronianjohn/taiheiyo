// console.log(array);
    var good = parseFloat(good_percentage_pie);
    var defect = parseFloat(defect_percentage_pie);
    Highcharts.chart('piechart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Cements report for 2018 <br><p>Total good : '+total_good+'</p><br><p>Total Defect : '+total_defect+'</p>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Good Cement Bags',
                y: good,
                sliced: true,
                selected: true
            }, {
                name: 'Defect',
                y:  defect
            }]
        }]
    });