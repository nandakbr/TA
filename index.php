<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
<body onload="startTime()">
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/index.php?pesan=belum_login");
	}
	?>
   <div class="navbar">
       <h2 class="heading">Dashboard</h2>
       <ul class="menu">
            <li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="logout.php">Logout</a></li>
       </ul>
   </div>
 
	<br/>
	<br/>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card1">
                    <div class="date">
                        <p id="clock"></p>
                        <p id="date"></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card1">
                card 2
                </div>
            </div>
            <div class="col">
                <div class="card1">
                card 3
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-8">
                <div class="card2">
                card 4
                </div>
            </div>
            <div class="col-4">
                <div class="card2">
                card 5
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="/js/main.js"></script>
    <script>
           function startTime() {
           var today = new Date();
           var h = today.getHours();
           var m = today.getMinutes();
           var d = today.getDate();
           var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
           var day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
            document.getElementById("date").innerHTML = d + " " + months[today.getMonth()] + " , " +day[today.getDay()];
            m = checkTime(m);
            document.getElementById('clock').innerHTML = h + ":" + m;
            document.getElementById('date').innerHTML = da + dy + "," + mo ;
           var t = setTimeout(startTime, 500);
           }
            function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
            }
            
        </script>

</body>
    </head>
</html>