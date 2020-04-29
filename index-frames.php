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
              padding-right: 2.5rem !important;
              padding-left: 0.5rem;
          }
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
                <a href="index.html"><img src="LOGO.png" style="width:100px"></a>
              </div>
  
              <div class="header__nav--tools-edit" style="padding-top:2rem">
  
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
                <a class="nav-link" href="currence_liquidity.php">Currency Beers Liquidity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index-frames.php">Index Frames</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="currency-basket.php">Currency Basket </a>
                </li>


            </ul>
        </div>
    </nav>

      <!--------------- Review Boxes ------------>
      <main style="margin-top:7rem">
        <div class="container">
            <div id="wrapper">
              <table  class="table table-striped text-center"id="memo">

              </table>
            </div>
        </div>
      </main>

      

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="js/jQuery3.3.1.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->

    

  
  <script>

    var dataToTable = function (dataset) {
      var count = 6 ; 
      var html;

      html = '<tr>';
      for(i=0;i<dataset.length/count;i++) {
        html += '<td>' + dataset[i] + '</td>';
      }
      html += '</tr>';


      html += '<tr>';
      for( i=dataset.length/count ; i<dataset.length/count*2;i++) {
        html += '<td class="oo">' + dataset[i] + '</td>';
      }
      html += '</tr>';

      html += '<tr>';
      for( i=dataset.length/count*2 ; i<dataset.length/count*3;i++) {
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
        html += '<td id="table-cel">' + dataset[i] + '</td>';
      }
      html += '</tr>';

      html += '<tr>';
      for( i=dataset.length/count*4 ; i<dataset.length/count*5;i++) {
        html += '<td id="table-cel">' + dataset[i] + '</td>';
      }
      html += '</tr>';

      html += '<tr>';
      for( i=dataset.length/count*5 ; i<dataset.length/count*6;i++) {
        html += '<td id="table-cel">' + dataset[i] + '</td>';
      }
      html += '</tr>';
    
      document.getElementById('memo').innerHTML=html;
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
        request.open('POST','index-frames-json.php');
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