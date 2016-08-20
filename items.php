<?php

require_once 'core/init.php'; 
$db = DB::getInstance();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Bharat Catering</title>
 <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
   <div class="navbar-fixed">
   <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="logo"><img src="logo.png" style="width=300px;height:60px;margin-to:10px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="items.php">Items</a></li>
        <li><a href="normal.php">Normal Menu</a></li>
        <li><a href="special.php">Special Menu</a></li>
        <li><a href="others.php">Others</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="items.php">Items</a></li>
        <li><a href="normal.php">Normal Menu</a></li>
        <li><a href="special.php">Special Menu</a></li>
        <li><a href="others.php">Others</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white teal-text text-lighten-2">Items</h1>
        <!--div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div-->
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="plates.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12">

          <h3 class="center">Booking Details</h3>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-panel">
                      <div class="row">
                            <div class="col s12 m6">
                              <?php
                                      $result = $db->get('bookings',array('test', '=', '0'));
                                      $count =  $result->count();

                                      $reference   =  $result->results()[$count-1]->reference;
                                      $first =  $result->results()[$count-1]->first;
                                      $last =  $result->results()[$count-1]->last;
                                      $date =  $result->results()[$count-1]->date;
                                      $email =  $result->results()[$count-1]->email;
                                      $contact =  $result->results()[$count-1]->contact;
                                      $address =  $result->results()[$count-1]->address;
                                      $venue =  $result->results()[$count-1]->venue;
                                      $from =  $result->results()[$count-1]->from;
                                      $to =  $result->results()[$count-1]->to;

                                ?>


                              <p>Reference No&nbsp: <?php echo $reference; ?><br>Name  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp : <?php echo $first . ' ' . $last; ?> <br>Contact  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo $contact; ?> <br>From  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp  : <?php echo $from; ?> <br>Venue  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp: <?php echo $venue; ?>
                              </p>
                            </div>
                            <div class="col s12 m6">
                              <p>Date  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp : <?php echo $date; ?> <br> Address &nbsp: <?php echo $address; ?><br>Email  &nbsp&nbsp&nbsp &nbsp&nbsp: <?php echo $email; ?> <br>To  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp : <?php echo $to; ?>
                               </p>
                            </div>
                      </div>
                    </div>
                  </div>

                </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m6">

                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="normal.php"><img class="activator" src="normal.jpg"></a>
                    </div>
                    <div class="card-content">
                      <a href="normal.php"><span class="card-title activator grey-text text-darken-4">Normal Menu</span></a>
                    </div>
                  </div>
            </div>

            <div class="col s12 m6">

                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="special.php"><img class="activator" src="special.jpg"></a>
                    </div>
                    <div class="card-content">
                      <a href="special.php"><span class="card-title activator grey-text text-darken-4">Special Menu</span></a>
                    </div>
                  </div>
            </div>
        </div>
  </div>
  </div>



 <!-- footer starts here -->
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">BHARAT CATTER$</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Social</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">Google+</a></li>
            <li><a class="white-text" href="#!">LinkedIn</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact Us</h5>
          <ul>
            <li><a class="white-text" href="#!">9560925110</a></li>
            <li><a class="white-text" href="#!">8883303030</a></li>
            <li><a class="white-text" href="#!">2826363636</a></li>
            <li><a class="white-text" href="#!">bharatcatters@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="">Lovepreet Singh</a>
      </div>
    </div>
  </footer>
  <!--footer ends -->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
