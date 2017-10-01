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
    renderAt: 'kepuasan-tahun',
    width: '500',
    height: '400',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Statistik Kepuasan Pelayanan Jurnal",
            "subCaption": "Tahun 2016",
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
                    foreach ($bulan_teks as $keybulan => $namabulan)
                    {
                        echo '
                          {
                             "label": "'.$namabulan.'",
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
                    foreach ($bulan as $key => $value)
                    {
                        $sql    = 'SELECT COUNT(*) AS jml FROM log_jurnal WHERE YEAR(waktu_kembali) = '.$tahun.' AND MONTH(waktu_kembali)='.$value.' AND feedback="Puas"';
                        $exe    = $db->custom_query($sql);
                        foreach ($exe as $jml)
                        {
                            echo '
                              {
                                 "value": "'.$jml->jml.'"
                              },
                            ';
                        } // Close Foreach 1
                    } // Close Foreach 2
                ?>            
            ] // Tutup Data
        }, {
            "seriesname": "Tidak Puas",
            "data": [
                <?php
                    foreach ($bulan as $keya => $valuea)
                    {
                        $sql    = 'SELECT COUNT(*) AS jmls FROM log_jurnal WHERE YEAR(waktu_kembali) = '.$tahun.' AND MONTH(waktu_kembali)='.$valuea.' AND feedback="Tidak"';
                        $exe    = $db->custom_query($sql);
                        foreach ($exe as $jmla)
                        {
                            echo '
                              {
                                 "value": "'.$jmla->jmls.'"
                              },
                            ';
                        } // Close Foreach 1
                    } // Close Foreach 2
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