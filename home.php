<marquee>Selamat Datang <?php echo $_SESSION['nama']; ?> di Sistem Informasi Gudang AsmaHill Farm</marquee>


           <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                 <h2>Admin Dashboard</h2>   
                        
                    </div>
                </div>              
                
                  <hr />
               <!--     <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
		     </div>
			</div>
            -->

  
        <!-- Bootsrap -->
     

        <meta charset="utf-8" />
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

      
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootsrap -->
        

        <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
        <link rel="stylesheet" href="css/eventCalendar.css">

        <!-- Theme CSS file: it makes eventCalendar nicer -->
        <link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/jquery.min.js" type="text/javascript"></script>


        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <h2 class="h4">Kalender</h2>
                 
                    <div id="eventCalendarHumanDate"></div>
                    <script>
                        $(document).ready(function() {
                            $("#eventCalendarHumanDate").eventCalendar({
                                eventsjson: 'json/json.php',
                                jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        
 




