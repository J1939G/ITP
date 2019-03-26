<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>José Smutný</title>
    <style id="compiled-css" type="text/css">
        @font-face {
            font-family: SSPB;
            src: url("../www/wp-content/themes/pittsburg/fonts/SSPB.ttf")
        }
        body {
            margin: 0px;
            padding: 0px;
        }

        h2 {
            font-family: SSPB;
            position: fixed;
            display: block;
            width: 100%;
            margin: 0px;
            height: 4rem;
            font-size: 3rem;
            line-height: 4rem;
            vertical-align: middle;
            font-weight: 900;
            text-transform: uppercase;
            text-align: center;
        }
        #m {
            display: block;
            position: fixed;
            width: calc(100% - 4rem);
            height: calc(100% - 6rem) !important;
            top: 4rem;
            left: 2rem;
            padding: 0rem;
        }
        #m img {
            box-shadow: none !important;
            padding: 0px !important;
            background: transparent !important;
        }
    </style>

<link rel="stylesheet" type="text/css" href="https://api.mapy.cz/css/api/v4/smap-jak.css?v4.13.34">


<body id="advanced-markers" class="vsc-initialized">


    <h2>José was here</h2>
        <script type="text/javascript" src="https://api.mapy.cz/loader.js"></script>
        <script type="text/javascript">Loader.load();</script><script charset="utf-8" type="text/javascript" src="https://api.mapy.cz/js/api/v4/smap-jak.js?v=4.13.34"></script><script charset="utf-8" type="text/javascript" src="https://api.mapy.cz/config.js?key=&v=4.13.34"></script><script charset="utf-8" type="text/javascript" src="https://api.mapy.cz/js/lang/cs.js?v=4.13.34"></script>
        <div id="m" style="height:360px" class="smap"></div>
    
    <script type="text/javascript">
    var obrazek = "https://api.mapy.cz/img/api/marker/drop-red.png";
    var m = new SMap(JAK.gel("m"));
    m.addControl(new SMap.Control.Sync()); /* Aby mapa reagovala na změnu velikosti průhledu */
    m.addDefaultLayer(SMap.DEF_BASE).enable(); /* Turistický podklad */
    var mouse = new SMap.Control.Mouse(SMap.MOUSE_PAN | SMap.MOUSE_WHEEL | SMap.MOUSE_ZOOM); /* Ovládání myší */
    m.addControl(mouse); 
    var data = {
        "Rome": 	"41.8802142N, 12.4709444E",
        "Innsbruck":	"47.2654294N, 11.3927686E",
        "Prague":	"50.0835494N, 14.4341414E",
        "London":		"51.4897694N, 0.1431919W",
        "Birmingham":		"52.4950306N, 1.8516994W",
        "Madrid":	"40.4777914N, 3.6858231W",
        "Toledo":		"39.8683817N, 3.9945181W",
        "Banát":		"44.6800361N, 21.6855228E",
        "Temeshvar":	"45.7588883N, 21.2214853E",
        "Grado": "45.7154486N, 13.3805600E",
        "Milano": "45.4613431N, 9.1723294E",
        "Lake district": "54.4680328N, 3.0715019W",
        "Peak district": "53.3059447N, 1.6933819W",
        "Brno": "49.2002211N, 16.6078411E",
        "Tatry": "49.1403200N, 20.2233000E",
        "Berlin": "52.5074008N, 13.3979547E",
        "Vienna": "48.2083536N, 16.3725042E",
        "Dresden": "51.0493286N, 13.7381436E",
        "Karpacz": "50.7639983N, 15.7451981E",
        "Bratislava": "48.1492400N, 17.1070000E",
        "Austrian Alps": "46.8705908N, 13.3859114E",
        "Lausanne": "46.5535281N, 6.6953794E",
        "Bolzano": "46.4876989N, 11.3435650E",
        "Amsterdam": "52.3745403N, 4.8979756E",
        "Bruges": "51.2085525N, 3.2267719E",
        
        
        /*"Colima": "19.1666669N, 104.0000000W",
        "Estado de México": "19.4326008N, 99.1333417W",
        "Guadalajara": "20.6761431N, 103.3469983W",
        "Guanajuato": "21.0158997N, 101.2528436W",
        "Cancún": "21.1214289N, 86.8451950W",
        "Tulum": "20.2106708N, 87.4629469W",
        "Houston": "29.7589381N, 95.3676975W",
        "Flagstaff": "35.1987522N, 111.6518231W",
        "Los Angeles": "34.0536833N, 118.2427669W",
        "San Diego": "32.7174208N, 117.1627714W",
        "Islas Marietas": "20.6999972N, 105.5775089W",
        "Vancouver": "49.2608725N, 123.1139531W"*/
    };
    var znacky = [];
    var souradnice = [];
    for (var name in data) { /* Vyrobit značky */
    var c = SMap.Coords.fromWGS84(data[name]); /* Souřadnice značky, z textového formátu souřadnic */
    var options = {
        url:obrazek,
        title:name,
        anchor: {left:10, bottom: 1}  /* Ukotvení značky za bod uprostřed dole */
    }
    var znacka = new SMap.Marker(c, null, options);
    souradnice.push(c);
    znacky.push(znacka);
    }
    
    var options = {
    anchor: {left:0.5, top:0.5}
    }
    znacky[1].decorate(SMap.Marker.Feature.RelativeAnchor, options);
    
    var vrstva = new SMap.Layer.Marker();     /* Vrstva se značkami */
    m.addLayer(vrstva);                          /* Přidat ji do mapy */
    vrstva.enable();                         /* A povolit */
    for (var i=0;i<znacky.length;i++) {
    vrstva.addMarker(znacky[i]);
    }
    var cz = m.computeCenterZoom(souradnice); /* Spočítat pozici mapy tak, aby značky byly vidět */
    m.setCenterZoom(cz[0], cz[1]);        
    m.addDefaultControls();
    </script>
    <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "UQ6uR"
      }], "*")
    }
    </script>
</head>
<body>
</html>