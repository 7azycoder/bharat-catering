<?php
require_once 'core/init.php';
$results = array();

if(Input::exists()){
  $reference = ($_GET['reference']) ? $_GET['reference'] : $_POST['reference'];
  $date = ($_GET['date']) ? $_GET['date'] : $_POST['date'];
  $first = ($_GET['first']) ? $_GET['first'] : $_POST['first'];
  $last = ($_GET['last']) ? $_GET['last'] : $_POST['last'];
  $address = ($_GET['address']) ? $_GET['address'] : $_POST['address'];
  $from = ($_GET['from']) ? $_GET['from'] : $_POST['from'];
  $to = ($_GET['to']) ? $_GET['to'] : $_POST['to'];
  $venue = ($_GET['venue']) ? $_GET['venue'] : $_POST['venue'];
  $contact = ($_GET['contact']) ? $_GET['contact'] : $_POST['contact'];
  $email = ($_GET['email']) ? $_GET['email'] : $_POST['email'];

    $db = DB::getInstance();
    $db->insert('bookings',array(
                             'reference' =>$reference,     
                             'date' => $date ,
                             'first' => $first,    
                             'last' => $last,
                             'address'=> $address,
                             'contact' => $contact,
                             'email' => $email,
                             'from' =>$from,
                             'to' => $to,        
                             'venue' => $venue
                    ));
    Redirect::to('items.php');
}
else {

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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="items.php">Items</a></li>
        <li><a href="normal.php">Normal Menu</a></li>
        <li><a href="special.php">Special Menu</a></li>
        <li><a href="others.php">Others</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="items.php">Items</a></li>
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
        <h1 class="header center teal-text text-lighten-2">Bharat Catering</h1>
        <div class="row center">
          <h3 class="header col s12  white red-text text-lighten-1">" We serve our best quality without any compromise. "</h3>
        </div>
        <!--div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div-->
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="home.jpg" alt="Unsplashed background img 1"></div>
  </div>


  
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
         
          <h3>Enter Booking Details</h3>
          <div class="row">
                      <form class="col s12" method="post" action="index.php">
                        <div class="row">
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">note_add</i>
                            <input id="reference" name="reference" for="reference" type="text" length="10" class="validate">
                            <label for="reference">Reference No</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">schedule</i>
                            <input id="date" name="date" for="date" type="text" class="validate">
                            <label for="date">Date</label>
                          </div>
                          <div class="clearfix">
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="first" name="first" for="first" type="text" length="20" class="validate">
                            <label for="first">First Name</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="last" name="last" for="last" type="text" length="20" class="validate">
                            <label for="last">Last Name</label>
                          </div>
                            <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">store</i>
                            <textarea id="address" name="address" for="address" class="materialize-textarea" length="100"></textarea>
                            <label for="address">Address</label>
                          </div>
                          
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <input id="contact" name="contact" for="contact" type="tel" class="validate" length="12">
                            <label for="contact">Contact No</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="email" for="email" type="email" class="validate" length="50">
                            <label for="email">Email</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">schedule</i>
                            <input id="from" name="from" for="from" type="text" class="validate">
                            <label for="from">From</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">schedule</i>
                            <input id="to" name="to" for="to" type="text" class="validate">
                            <label for="to">To</label>
                          </div>
                         
                          <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">business</i>
                            <textarea id="venue" name="venue" for="venue" class="materialize-textarea" length="100"></textarea>
                            <label for="venue">Venue</label>
                          </div>
                          <div class="input-field col s12 m12 l12 center">
                             <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                          </div>
                        </div>
                      </form>
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

<?php
}

?>