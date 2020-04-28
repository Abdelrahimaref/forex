<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>
	   
	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">
	   
	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   
        <meta name="description"content="mt company">
        <title> Stacknet | Medical Insurance Conpany</title>
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
	   <!---->
	</head>
	<body>
      <!---- NavBar Section ---->
      <header class="header">
        <div class="container">
          <nav class="header__nav">
            <div class="header__nav--tools">
              <div class="header__nav--tools-notifications" style="padding-top: 2.2rem;">
                <a href="index.html">Home</a>
              </div>
              <div class="header__nav--tools-notifications">
  
                <div class="dropdown">
                  <a href="#"class="dropdown__dropbtn"><i class="far fa-bell"></i></a>
                  <div class="dropdown__content" style="right: -140px !important;">
  
                    <div class="dropdown__content--box">
                      <div class="text-right d-flex justify-content-between">
                        <a  style="font-size:1rem">Alico</a>
                        <a style="font-size:1rem">3-5-2005 12:15 AM</a>
                      </div>
                      <a><span>Alico</span> Send <span>Case-Investigation</span> Request</a>
                    </div>
  
                    <div class="dropdown__content--box">
                      <div class="text-right d-flex justify-content-between">
                        <a  style="font-size:1rem">Alico</a>
                        <a style="font-size:1rem">3-5-2005 12:15 AM</a>
                      </div>
                      <a><span>Alico</span> Send <span>Case-Investigation</span> Request</a>
                    </div>
  
                    <div class="dropdown__content--box">
                      <div class="text-right d-flex justify-content-between">
                        <a  style="font-size:1rem">Alico</a>
                        <a style="font-size:1rem">3-5-2005 12:15 AM</a>
                      </div>
                      <a><span>Alico</span> Send <span>Case-Investigation</span> Request</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header__nav--tools-edit">
  
                <div class="dropdown">
                  <a href="#"class="dropdown__dropbtn"><i class="far fa-envelope"></i></a>
                  <div class="dropdown__content" style="right: -7.3rem !important;">
                    <div class="dropdown__content--box">
                      <div class="text-right d-flex justify-content-between">
                        <a  style="font-size:1rem">Alico</a>
                        <a style="font-size:1rem">3-5-2005 12:15 AM</a>
                      </div>
                      <a><span>Alico</span> Send <span> 2</span> Messages To you</a>
                    </div>
                    <div class="dropdown__content--box">
                      <div class="text-right d-flex justify-content-between">
                        <a  style="font-size:1rem">Alico</a>
                        <a style="font-size:1rem">3-5-2005 12:15 AM</a>
                      </div>
                      <a><span>Alico</span> Send <span> 2</span> Messages To you</a>
                    </div>
                  </div>
                </div>
  
              </div>
  
              <div class="header__nav--tools-edit">
  
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

      <!--------------- Review Boxes ------------>
      <main style="margin-top:7rem">
        <div class="container">
            <div id="wrapper">

            </div>
        </div>
      </main>

      

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="js/jQuery3.3.1.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->

    

  
  <script>

    var dataToTable = function (dataset) {
    var html = '<table class="table table-striped text-center">';
    html += '<thead><tr><th style="width:120px;">#</th>';
    
    var columnCount = 0;
    jQuery.each(dataset.datasets, function (idx, item) {
        html += '<th style="background-color:' + item.fillColor + ';">' + item.label + '</th>';
        columnCount += 1;
    });

    html += '</tr></thead>';

    jQuery.each(dataset.labels, function (idx, item) {
        html += '<tr><td>' + item + '</td>';
        for (i = 0; i < columnCount; i++) {
            html += '<td style="background-color:' + dataset.datasets[i].fillColor + ';">' + (dataset.datasets[i].data[idx] === '0' ? '-' : dataset.datasets[i].data[idx]) + '</td>';
        }
        html += '</tr>';
    });

    html += '</tr><tbody></table>';

    return html;
};
var usd_arr = [1,4,0],
    jpy_arr = [0,0,0],
    gbp_arr = [0,0,0],
    eur_arr = [0,0,0],
    aud_arr = [0,0,0],
    nzd_arr = [0,0,0],
    cad_arr = [0,0,0],
    chf_arr = [0,0,0];
var data = new data({
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
});

    function updatechart(){
        const request = new XMLHttpRequest();
        request.open('POST', 'liquidity-Json.php');
        // Callback function for when request completes
        request.onload = () => {
            // Extract JSON data from request
            console.log(request.responseText);
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
                jpy_arr.push(i);

            }
        }
        request.send();
        data.datasets[0].data = usd_arr;
        data.update();
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
		<script src="js/form.js"></script>
	</body>
    


</html>