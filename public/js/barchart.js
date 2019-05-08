
var datas = [];
var series = [];
var para = [];
// console.log(bar);
console.log(para);

for(var i =0; i < bar.length; i++){
    var data = 
        {
            "name": bar[i].cause,
            "y": parseInt(bar[i].defect),
            "drilldown": bar[i].cause
        }
    datas.push(data);
    var small = type.filter( type => type.cause === bar[i].cause && type.types === 'Small bag');
    if(small !== ''){
        var s=0;
        for(var s = 0; s < small.length; s++){
            var sm =+ small[s].defect;
        }
    }else{
        sm = 0
    }

    
    var medium = type.filter( type => type.cause === bar[i].cause && type.types === 'Medium');
    if(medium !== ''){
        var md = 0;
        for(var d = 0; d < medium.length; d++){
            var md =+ medium[d].defect;
        }
    }else {
        md = 0;
    }
    var tanner = type.filter( type => type.cause === bar[i].cause && type.types === 'Tanner');
    if(tanner !== ''){
        var lg =0;
        for(var t = 0; t < tanner.length; t++){
            var lg =+ tanner[t].defect;
        }
    }else{
        lg = 0;
    }
    console.log(medium);
    var smal = 
        [
            "Small bag",
            sm
        ]
    var md =
        [
            "Medium",
            md
        ]
    var lg = 
        [
            "Tanner",
            lg
        ]
    

    
    var sers = {
        "name": bar[i].cause,
        "id": bar[i].cause,
        "data": [
            smal,
            md,
            lg
        ]
    }
    series.push(sers);
}
// console.log(datas);
// console.log(series);

Highcharts.chart('barchart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Defects cement bags 2018'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: '# of defect cement bag'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            // "data": data
            "data": datas
        }
    ],
    "drilldown": {
        "series": series
    }
});