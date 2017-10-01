<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
<script type="text/javascript" src="./admin/chart/js/fusioncharts.js"></script>
<script type="text/javascript" src="./admin/chart/js/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>

</head>
<body>
  <div id="chart-container">FusionCharts XT will load here!</div>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'msline',
    renderAt: 'chart-container',
    width: '500',
    height: '300',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Number of visitors last week",
            "subCaption": "Bakersfield Central vs Los Angeles Topanga",
            "captionFontSize": "14",
            "subcaptionFontSize": "14",
            "subcaptionFontBold": "0",
            "paletteColors": "#0075c2,#1aaf5d",
            "bgcolor": "#ffffff",
            "showBorder": "0",
            "showShadow": "0",
            "showCanvasBorder": "0",
            "usePlotGradientColor": "0",
            "legendBorderAlpha": "0",
            "legendShadow": "0",
            "showAxisLines": "0",
            "showAlternateHGridColor": "0",
            "divlineThickness": "1",
            "divLineIsDashed": "1",
            "divLineDashLen": "1",
            "divLineGapLen": "1",
            "xAxisName": "Day",
            "showValues": "0"
        },
        "categories": [{
            "category": [{
                "label": "Mon"
            }, {
                "label": "Tue"
            }, {
                "label": "Wed"
            }, {
                "vline": "true",
                "lineposition": "0",
                "color": "#6baa01",
                "labelHAlign": "center",
                "labelPosition": "0",
                "label": "National holiday",
                "dashed": "1"
            }, {
                "label": "Thu"
            }, {
                "label": "Fri"
            }, {
                "label": "Sat"
            }, {
                "label": "Sun"
            }]
        }],
        "dataset": [{
            "seriesname": "Bakersfield Central",
            "data": [{
                "value": "0"
            }, {
                "value": "0"
            }, {
                "value": "2"
            }, {
                "value": "0"
            }, {
                "value": "0"
            }, {
                "value": "5"
            }, {
                "value": "1"
            }]
        }, {
            "seriesname": "Los Angeles Topanga",
            "data": [{
                "value": "0"
            }, {
                "value": "0"
            }, {
                "value": "3"
            }, {
                "value": "2"
            }, {
                "value": "5"
            }, {
                "value": "5"
            }, {
                "value": "0"
            }]
        }],
        "trendlines": [{
            "line": [{
                "startvalue": "3",
                "color": "#6baa01",
                "valueOnRight": "1",
                "displayvalue": "Average"
            }]
        }]
    }
}
);
    fusioncharts.render();
});
</script>  
</body>
</html>