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
	<body style="background-color:#000">
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
      <main>
        <div class="container-fluid">
          <div class="row" style="padding-top: 80px;">
            <div class="col-sm-2 col-xs-2 text-center">
              <img src="img/LOGOpng.png" alt="" style="height: 150px;">
            </div>
            <div class="col-sm-8 col-xs-12" style="padding-top:50px ;">
              <canvas id="myChart"width="300" height="500"></canvas>
            </div>
            <div class="col-sm-1 col-xs-1 text-center" style="color: #000;padding-top:50px; padding-bottom: 50px;">
              <div style="background-color:green ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Strong</div>
              <div style="background-color:orange ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Rising</div>
              <div style="background-color:yellow ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Neutral</div>
              <div style="background-color:red ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Weak</div>
            </div>
          </div>
        </div>
      </main>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  
  <script>

  	var v_arr = [20,20,20,20,20,30,30];
    var l_arr = ["AUD","CAD","CHF","EUR","GBP"];
    var color_code={"AUD":"rgba(255, 99, 132, 1)","CAD":"red","CHF":"yellow", "EUR":"rgba(75, 192, 192, 1)", "GBP":"rgba(153, 102, 255, 1)", "JPY":"rgba(255, 159, 64, 1)", "NZD":"rgba(25, 159, 64, 1)", "USD":"rgba(255, 255, 255, 1)"};
    var color;
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: l_arr,
          datasets: [{
              label: 'Strength Comparison',
              data: v_arr,
              backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'red',
                  'yellow',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(25, 159, 64, 1)',
                  'rgba(255, 255, 255, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        tooltips : true,
        maintainAspectRatio: false,
        legend: {
          labels: {
              // This more specific font property overrides the global property
              fontColor: 'white'
          }
      },
      scales: {
        scaleLabel:{
          fontColor: 'white'
        },
        yAxes: [{
          gridLines: {
            drawBorder: false,
              color: [
              'green', 
              'green', 
              'green', 
              'green',  
              'yellow', 
              'yellow', 
              'yellow', 
              'red', 
              'red', 
              'red'
            ]
        },

        ticks: {
            beginAtZero: true,
            max: 100,
            fontColor: 'white'
        }
      }],
      xAxes: [{
        ticks: {
          fontFamily:'Glyphter',
          fontColor: 'white'
        }
      }]
    }
  }
});

  function updatechart(){
    const request = new XMLHttpRequest();
      request.open('POST', 'index2.php');

        // Callback function for when request completes
        request.onload = () => {
            // Extract JSON data from request
            console.log(request.responseText);
            const data = JSON.parse(request.responseText);
            v_arr = [];
            l_arr = [];
            color = [];
            for(i in data ){
              v_arr.push(data[i]*10);
              l_arr.push(i);
              color.push(color_code[i]);
            }
        }
        request.send();
        myChart.data.labels = l_arr;
        myChart.data.datasets[0].data = v_arr;
        myChart.data.datasets[0].backgroundColor = color;
        myChart.update();
  }
    setInterval(()=>{updatechart();}, 1000);
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