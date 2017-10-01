<?php
    $tahun  = 2016;
    $bulan  = range(1,12);
    $bulan_teks     = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
?>
<script type="text/javascript" src="./admin/chart/js/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'msline',
    renderAt: 'kepuasan-antar-tahun',
    width: '500',
    height: '400',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Statistik Kepuasan Pelayanan Jurnal",
            "subCaption": "dari Tahun 2016 - Tahun 2017",
            "captionFontSize": "14",
            "subcaptionFontSize": "14",
            "subcaptionFontBold": "0",
            "paletteColors": "#0075c2,#D9534F",
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
            "xAxisName": "Bulan",
            "showValues": "0"
        },
        "categories": [{
            "category": [
                <?php
                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun FROM log_jurnal GROUP BY Tahun';
                    $exe    = $db->custom_query($sql);
                    foreach ($exe as $jml)
                    {
                        echo '
                          {
                             "label": "'.$jml->Tahun.'",
                          },
                        ';
                    } // Close Foreach 1
                ?>
            ]
        }],
        "dataset": [{
            "seriesname": "Puas",
            "data": [
                <?php
                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun, COUNT(*) AS jml FROM log_jurnal WHERE feedback="Puas" GROUP BY Tahun';
                    $exe    = $db->custom_query($sql);
                    foreach ($exe as $jml)
                    {
                        echo '
                          {
                             "value": "'.$jml->jml.'"
                          },
                        ';
                    } // Close Foreach 1
                ?>           
            ] // Tutup Data
        }, {
            "seriesname": "Tidak Puas",
            "data": [
                <?php
                    $sql    = 'SELECT YEAR(waktu_kembali) AS Tahun, COUNT(*) AS jml FROM log_jurnal WHERE feedback="Tidak" GROUP BY Tahun';
                    $exe    = $db->custom_query($sql);
                    foreach ($exe as $jml)
                    {
                        echo '
                          {
                             "value": "'.$jml->jml.'"
                          },
                        ';
                    } // Close Foreach 1
                ?> 
                ]
            }],
        "trendlines": [{
            "line": [{
                "startvalue": "0",
                "color": "#CCC",
                "valueOnRight": "1",
                "displayvalue": ""
            }]
        }]
    }
}
);
    fusioncharts.render();
});
</script>