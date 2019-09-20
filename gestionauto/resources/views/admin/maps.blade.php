
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.css">
<body>
    <div class="container-fluid">
        <div id="world-map-gdp" style="width: 600px; height: 400px"></div>

    </div>

    <script>
        (function map(){
            $('#world-map-gdp').vectorMap({
              map: 'world_mill',
              series: {
                regions: [{
                  values: gdpData,
                  scale: ['#C8EEFF', '#0071A4'],
                  normalizeFunction: 'polynomial'
                }]
              },
              onRegionTipShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
              }
            });
          });
     </script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<!-- jvectormap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.js"></script>




