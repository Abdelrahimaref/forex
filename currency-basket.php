<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>
	   
	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">
	   
	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   
        <meta name="description"content="mt company">
        <title>Forex</title>
        <link   
             rel = "icon" 
            href ="img/logo.png" 
            type = "image/x-icon">
        <!--call bootstrap-->
	    <link rel="stylesheet"href="css/bootstrap.css"/>
        <!--Page Style-->	   
        <link rel="stylesheet"href="css/main.css"/>
       <!--Animate.css-->
       <link rel="stylesheet"href="css/animate.min.css"/>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>  
       <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">      
       <script src="https://kit.fontawesome.com/ef503aa28e.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
	    <script src="js/html5shiv.min.js"></script>
       <script src="js/respond.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

       <style>
        .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav 
        .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
            color: rgba(255, 255, 255, 0.9) !important;
        }
        .navbar-light .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }
        @media (min-width: 992px) {
          .navbar-expand-lg .navbar-nav .nav-link {
              padding-right: 1.8rem !important;
              padding-left: 2.8rem;
              padding-top: 1.5rem;
              padding-bottom: 1.5rem;
              color: #FFF;
              font-size: 14px;
          }
        }
        table {
          border: 15px solid #d5d5d5 !important;
        }
       </style>
	   <!---->
	</head>
	<body style="background-color:#000">
      <!---- NavBar Section ---->
      <header class="header">
        <div class="container">
          <nav class="header__nav">
            <div class="d-flex justify-content-between">
              <div class="header__nav--tools-notifications">
                <a href="index.html"><img src="LOGO.png" style="width:170px ; height:100px"></a>
              </div>
  
              <div class="header__nav--tools-edit" style="padding-top:3.3rem">
  
                <div class="dropdown">
                  <a href="#"class="dropdown__dropbtn"><img src="img/user.png" alt="" style="width: 40px;border-radius: 50%;"></a>
                  <div class="dropdown__content">
                    <a href="my-profile.html">Edit Profile</a>
                    <a href="#">Logout</a>
                  </div>
                </div>
  
              </div>
  
            </div>
          </nav>
        </div>
      </header>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="padding:2rem">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-auto ml-auto">
                <li class="nav-item  active">
                    <a class="nav-link" href="index.php">Forex Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index-liquidity.php">Index Liquidity </a> 
                </li>
                <li class="nav-item">
                <a class="nav-link" href="currence_liquidity.php">Currency Pairs Liquidity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index-frames.php">Index Frames</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="currency-basket.php">Currency Basket </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index-frames.php">Performance Index</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="currency-basket.php">Daily Market Liquidity </a>
                </li>

            </ul>
        </div>
      </div>
 

    </nav>

      <!--------------- Review Boxes ------------>
      <main style="margin-top:7rem">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">AUD</h3>
                    <table class="table  table-striped text-center" id="memo"></table>
                </div>

                <div class="col-md-12" style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">CAD</h3>
                    <table class="table  table-striped text-center" id="memo2"></table>
                </div>

                <div class="col-md-12" style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">CHF</h3>
                    <table class="table  table-striped text-center" id="memo3"></table>
                </div>

                <div class="col-md-12" style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">EUR</h3>
                    <table class="table  table-striped text-center" id="memo4"></table>
                </div>

                <div class="col-md-12"style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">GBP</h3>
                    <table class="table  table-striped text-center" id="memo5"></table>
                </div>

                <div class="col-md-12" style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">JPY</h3>
                    <table class="table  table-striped text-center" id="memo6"></table>
                </div>

                <div class="col-md-12" style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">NZD</h3>
                    <table class="table  table-striped text-center" id="memo7"></table>
                </div>

                <div class="col-md-12" style="margin-top:2rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border-right:15px solid #d5d5d5 !important;border-left:15px solid #d5d5d5 !important;border-top:15px solid #d5d5d5 !important;  padding:10px; margin-bottom:0px">USD</h3>
                    <table class="table  table-striped text-center" id="memo8"></table>
                </div>

            </div>
        </div>
      </main>

      

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="js/jQuery3.3.1.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->

    

  
  <script>

    var dataToTable = function (dataset) {
        var count = 56 ; 
        var html  ,
            html2 ,
            html3 ,
            html4 ,
            html5 ,
            html6 ,
            html7 ;

      console.log(dataset.length);

      html = '<tr>';    
      for(i=0 ; i<dataset.length/count ; i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';


      html += '<tr>';
      for( i=dataset.length/count ; i<dataset.length/count*2;i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';


      html += '<tr>';
      for( i= dataset.length/count*2; i<dataset.length/count*3;i++) {
        html += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html += '</tr>';




        html += '<tr>';
      for( i=dataset.length/count*3 ; i<dataset.length/count*4;i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';



      html += '<tr>';
      for( i=dataset.length/count*4 ; i<dataset.length/count*5;i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';



      html += '<tr>';
      for( i=dataset.length/count*5 ; i<dataset.length/count*6;i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';



      html += '<tr>';
      for( i=dataset.length/count*6; i<dataset.length/count*7;i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';


      html2 = '<tr>';    
      for(i=dataset.length/count*7;i<dataset.length/count*8;i++) {
        html2 += '<td>' + dataset[i] + '</td>';
      }
      html2 += '</tr>';


      html2 += '<tr>';
      for( i=dataset.length/count*8 ; i<dataset.length/count*9;i++) {
        html2 += '<td>' + dataset[i] + '</td>';
      }
      html2 += '</tr>';


      html2 += '<tr>';
      for( i=dataset.length/count*9 ; i<dataset.length/count*10;i++) {
        html2 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html2 += '</tr>';




        html2 += '<tr>';
      for( i=dataset.length/count*10 ; i<dataset.length/count*11;i++) {
        html2 += '<td>' + dataset[i] + '</td>';
      }
      html2 += '</tr>';



      html2 += '<tr>';
      for( i=dataset.length/count*11 ; i<dataset.length/count*12;i++) {
        html2 += '<td>' + dataset[i] + '</td>';
      }
      html2 += '</tr>';



      html2 += '<tr>';
      for( i=dataset.length/count*12 ; i<dataset.length/count*13;i++) {
        html2 += '<td>' + dataset[i] + '</td>';
      }
      html2 += '</tr>';



      html2 += '<tr>';
      for( i=dataset.length/count*13; i<dataset.length/count*14;i++) {
        html2 += '<td>' + dataset[i] + '</td>';
      }
      html2 += '</tr>';



      html3 = '<tr>';    
      for(i=dataset.length/count*14;i<dataset.length/count*15;i++) {
        html3 += '<td>' + dataset[i] + '</td>';
      }
      html3 += '</tr>';


      html3 += '<tr>';
      for( i=dataset.length/count*15 ; i<dataset.length/count*16;i++) {
        html3 += '<td>' + dataset[i] + '</td>';
      }
      html3 += '</tr>';


      html3 += '<tr>';
      for( i=dataset.length/count*16 ; i<dataset.length/count*17;i++) {
        html3 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html3 += '</tr>';




        html3 += '<tr>';
      for( i=dataset.length/count*17 ; i<dataset.length/count*18;i++) {
        html3 += '<td>' + dataset[i] + '</td>';
      }
      html3 += '</tr>';



      html3 += '<tr>';
      for( i=dataset.length/count*18 ; i<dataset.length/count*19;i++) {
        html3 += '<td>' + dataset[i] + '</td>';
      }
      html3 += '</tr>';



      html3 += '<tr>';
      for( i=dataset.length/count*19 ; i<dataset.length/count*20;i++) {
        html3 += '<td>' + dataset[i] + '</td>';
      }
      html3 += '</tr>';



      html3 += '<tr>';
      for( i=dataset.length/count*20; i<dataset.length/count*21;i++) {
        html3 += '<td>' + dataset[i] + '</td>';
      }
      html3 += '</tr>';





      html4 = '<tr>';    
      for(i=dataset.length/count*21;i<dataset.length/count*22;i++) {
        html4 += '<td>' + dataset[i] + '</td>';
      }
      html4 += '</tr>';


      html4 += '<tr>';
      for( i=dataset.length/count*22 ; i<dataset.length/count*23;i++) {
        html4 += '<td>' + dataset[i] + '</td>';
      }
      html4 += '</tr>';


      html4 += '<tr>';
      for( i=dataset.length/count*23 ; i<dataset.length/count*24;i++) {
        html4 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html4 += '</tr>';




        html4 += '<tr>';
      for( i=dataset.length/count*24; i<dataset.length/count*25;i++) {
        html4 += '<td>' + dataset[i] + '</td>';
      }
      html4 += '</tr>';



      html4 += '<tr>';
      for( i=dataset.length/count*25 ; i<dataset.length/count*26;i++) {
        html4 += '<td>' + dataset[i] + '</td>';
      }
      html4 += '</tr>';



      html4 += '<tr>';
      for( i=dataset.length/count*26 ; i<dataset.length/count*27;i++) {
        html4 += '<td>' + dataset[i] + '</td>';
      }
      html4 += '</tr>';



      html4 += '<tr>';
      for( i=dataset.length/count*27; i<dataset.length/count*28;i++) {
        html4 += '<td>' + dataset[i] + '</td>';
      }
      html4 += '</tr>';





      html5 = '<tr>';    
      for(i=dataset.length/count*28;i<dataset.length/count*29;i++) {
        html5 += '<td>' + dataset[i] + '</td>';
      }
      html5 += '</tr>';


      html5 += '<tr>';
      for( i=dataset.length/count*29 ; i<dataset.length/count*30;i++) {
        html5 += '<td>' + dataset[i] + '</td>';
      }
      html5 += '</tr>';


      html5 += '<tr>';
      for( i=dataset.length/count*30 ; i<dataset.length/count*31;i++) {
        html5 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html5 += '</tr>';




        html5 += '<tr>';
      for( i=dataset.length/count*31 ; i<dataset.length/count*32;i++) {
        html5 += '<td>' + dataset[i] + '</td>';
      }
      html5 += '</tr>';



      html5 += '<tr>';
      for( i=dataset.length/count*32 ; i<dataset.length/count*33;i++) {
        html5 += '<td>' + dataset[i] + '</td>';
      }
      html5 += '</tr>';



      html5 += '<tr>';
      for( i=dataset.length/count*33 ; i<dataset.length/count*34;i++) {
        html5 += '<td>' + dataset[i] + '</td>';
      }
      html5 += '</tr>';



      html5 += '<tr>';
      for( i=dataset.length/count*34; i<dataset.length/count*35;i++) {
        html5 += '<td>' + dataset[i] + '</td>';
      }
      html5 += '</tr>';





      html6 = '<tr>';    
      for(i=dataset.length/count*35;i<dataset.length/count*36;i++) {
        html6 += '<td>' + dataset[i] + '</td>';
      }
      html6 += '</tr>';


      html6 += '<tr>';
      for( i=dataset.length/count*36 ; i<dataset.length/count*37;i++) {
        html6 += '<td>' + dataset[i] + '</td>';
      }
      html6 += '</tr>';


      html6 += '<tr>';
      for( i=dataset.length/count*37 ; i<dataset.length/count*38;i++) {
        html6 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html6 += '</tr>';




        html6 += '<tr>';
      for( i=dataset.length/count*38 ; i<dataset.length/count*39;i++) {
        html6 += '<td>' + dataset[i] + '</td>';
      }
      html6 += '</tr>';



      html6 += '<tr>';
      for( i=dataset.length/count*39 ; i<dataset.length/count*40;i++) {
        html6 += '<td>' + dataset[i] + '</td>';
      }
      html6 += '</tr>';



      html6 += '<tr>';
      for( i=dataset.length/count*40 ; i<dataset.length/count*41;i++) {
        html6 += '<td>' + dataset[i] + '</td>';
      }
      html6 += '</tr>';



      html6 += '<tr>';
      for( i=dataset.length/count*41; i<dataset.length/count*42;i++) {
        html6 += '<td>' + dataset[i] + '</td>';
      }
      html6 += '</tr>';





      html7 = '<tr>';    
      for(i=dataset.length/count*42;i<dataset.length/count*43;i++) {
        html7 += '<td>' + dataset[i] + '</td>';
      }
      html7 += '</tr>';


      html7 += '<tr>';
      for( i=dataset.length/count*43 ; i<dataset.length/count*44;i++) {
        html7 += '<td>' + dataset[i] + '</td>';
      }
      html7 += '</tr>';


      html7 += '<tr>';
      for( i=dataset.length/count*44 ; i<dataset.length/count*45;i++) {
        html7 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html7 += '</tr>';




        html7 += '<tr>';
      for( i=dataset.length/count*45 ; i<dataset.length/count*46;i++) {
        html7 += '<td>' + dataset[i] + '</td>';
      }
      html7 += '</tr>';



      html7 += '<tr>';
      for( i=dataset.length/count*46 ; i<dataset.length/count*47;i++) {
        html7 += '<td>' + dataset[i] + '</td>';
      }
      html7 += '</tr>';



      html7 += '<tr>';
      for( i=dataset.length/count*47 ; i<dataset.length/count*48;i++) {
        html7 += '<td>' + dataset[i] + '</td>';
      }
      html7 += '</tr>';



      html7 += '<tr>';
      for( i=dataset.length/count*48; i<dataset.length/count*49;i++) {
        html7 += '<td>' + dataset[i] + '</td>';
      }
      html7 += '</tr>';


      html8 = '<tr>';    
      for(i=dataset.length/count*49;i<dataset.length/count*50;i++) {
        html8 += '<td>' + dataset[i] + '</td>';
      }
      html8 += '</tr>';


      html8 += '<tr>';
      for( i=dataset.length/count*50 ; i<dataset.length/count*51;i++) {
        html8 += '<td>' + dataset[i] + '</td>';
      }
      html8 += '</tr>';


      html8 += '<tr>';
      for( i= dataset.length/count*51; i<dataset.length/count*52;i++) {
        html8 += '<td id="table-cel">' + dataset[i] + '</td>';
        if(dataset[i] <= 5) {
          console.log($('#table-cel').text());
          $('#table-cel').css({
            "background-color": "red",
          });
        }
      }
        html8 += '</tr>';




        html8 += '<tr>';
      for( i=dataset.length/count*52 ; i<dataset.length/count*53;i++) {
        html8 += '<td>' + dataset[i] + '</td>';
      }
      html8 += '</tr>';



      html8 += '<tr>';
      for( i=dataset.length/count*53 ; i<dataset.length/count*54;i++) {
        html8 += '<td>' + dataset[i] + '</td>';
      }
      html8 += '</tr>';



      html8 += '<tr>';
      for( i=dataset.length/count*54 ; i<dataset.length/count*55;i++) {
        html8 += '<td>' + dataset[i] + '</td>';
      }
      html8 += '</tr>';



      html8 += '<tr>';
      for( i=dataset.length/count*55; i<dataset.length/count*56;i++) {
        html8 += '<td>' + dataset[i] + '</td>';
      }
      html8 += '</tr>';



        document.getElementById('memo').innerHTML  =html;
        document.getElementById('memo2').innerHTML =html2;
        document.getElementById('memo3').innerHTML =html3;
        document.getElementById('memo4').innerHTML =html4;
        document.getElementById('memo5').innerHTML =html5;
        document.getElementById('memo6').innerHTML =html6;
        document.getElementById('memo7').innerHTML =html7;
        document.getElementById('memo8').innerHTML =html8;
};
var usd_arr = [1,4,0],
    jpy_arr = [0,0,0],
    gbp_arr = [0,0,0],
    eur_arr = [0,0,0],
    aud_arr = [0,0,0],
    nzd_arr = [0,0,0],
    cad_arr = [0,0,0],
    chf_arr = [0,0,0];
var data = {
    labels: ["January", "February", "March"],
    datasets: [
        {
            label: "USD",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: usd_arr
        },
        {
            label: "JPY",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: jpy_arr
        },
        {
            label: "GBP",
            fillColor: "rgba(55,187,205,0.2)",
            strokeColor: "rgba(55,187,205,1)",
            pointColor: "rgba(55,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: gbp_arr
        },
        {
            label: "EUR",
            fillColor: "rgba(55,187,205,0.2)",
            strokeColor: "rgba(55,187,205,1)",
            pointColor: "rgba(55,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: eur_arr
        },
        {
            label: "AUD",
            fillColor: "rgba(55,187,205,0.2)",
            strokeColor: "rgba(55,187,205,1)",
            pointColor: "rgba(55,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: aud_arr
        },
        {
            label: "NZD",
            fillColor: "rgba(55,187,205,0.2)",
            strokeColor: "rgba(55,187,205,1)",
            pointColor: "rgba(55,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: nzd_arr
        },
        {
            label: "CAD",
            fillColor: "rgba(55,187,205,0.2)",
            strokeColor: "rgba(55,187,205,1)",
            pointColor: "rgba(55,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: cad_arr
        },
        {
            label: "CHF",
            fillColor: "rgba(55,187,205,0.2)",
            strokeColor: "rgba(55,187,205,1)",
            pointColor: "rgba(55,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: chf_arr
        },
    ]
};

    function updatechart(){
        const request = new XMLHttpRequest();
        request.open('POST', 'currency-basket-json.php');
        // Callback function for when request completes
        request.onload = () => {
            // Extract JSON data from request
            const data = JSON.parse(request.responseText);
            usd_arr = [];
            jpy_arr = [];
            gbp_arr = [];
            eur_arr = [];
            aud_arr = [];
            nzd_arr = [];
            cad_arr = [];
            chf_arr = [];
            for(i in data ){
                usd_arr.push(data[i]);
            }
            // console.log(usd_arr)
            
        // alert(data.datasets[0].data[0])
        // data.update();
            dataToTable(usd_arr);
        }
        request.send();
        // alert(usd_arr)
        
    }
        
  setInterval(()=>{updatechart();}, 1000);

  
jQuery('#wrapper').html(dataToTable(data));

//   function updatechart(){
//     const request = new XMLHttpRequest();
//       request.open('POST', 'index2.php');

//         // Callback function for when request completes
//         request.onload = () => {
//             // Extract JSON data from request
//             console.log(request.responseText);
//             const data = JSON.parse(request.responseText);
//             v_arr = [];
//             l_arr = [];
//             color = [];
//             for(i in data ){
//                v_arr.push(data[i]*10);
//                l_arr.push(i);
//                color.push(color_code[i]);
//             }
//         }
//         request.send();
//         myChart.data.labels = l_arr;
//         myChart.data.datasets[0].data = v_arr;
//         myChart.data.datasets[0].backgroundColor = color;
//         myChart.update();
//   }
//     setInterval(()=>{updatechart();}, 1000);
       

    

        
        
    </script>
        
        


        
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="../js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
		<script src="js/jQuery3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="js/e.js"></script>
	</body>
    


</html>