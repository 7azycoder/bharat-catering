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
        <li><a href="items.php">Items</a></li>
        <li class="active"><a href="normal.php">Normal Menu</a></li>
        <li><a href="special.php">Special Menu</a></li>
        <li><a href="others.php">Others</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="items.php">Items</a></li>
        <li class="active"><a href="normal.php">Normal Menu</a></li>
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
        <h1 class="header center white teal-text text-lighten-2">Normal Menu</h1>
        <!--div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div-->
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="normal.jpg" alt="Unsplashed background img 1"></div>
  </div>
<form method="post" action="view.php">
<div class="container">
<div class="section">
  <div class="row">
    <div class="col s12 m12 l12">
      <ul class="tabs">
        <li class="tab col s3 m3 l3"><a href="#breakfast">Breakfast</a></li>
        <li class="tab col s3 m3 l3"><a href="#lunch">Lunch</a></li>
        <li class="tab col s3 m3 l3"><a href="#snacks">Snacks</a></li>
        <li class="tab col s3 m3 l3"><a href="#dinner">Dinner</a></li>
       </ul>
    </div>
   
    <div id="breakfast" class="col s12">
        <div class="section">
        <div class="row">
            <h3 class="center">Fill in the Details</h3>
            <div class="card-panel">
            <div class="row">
            <div class="input-field col s12 m3">
            <input id="bfdate" name="bfdate" type="text" class="validate">
            <label for="bfdate">Date</label>
            </div>
            <div class="input-field col s12 m3">
            <input id="bffrom" name="bffrom" type="text" class="validate">
            <label for="bffrom">Timing From</label>
            </div>
            <div class="input-field col s12 m3">
            <input id="bfupto" name="bfupto" type="text" class="validate">
            <label for="bfupto">Timing Upto</label>
            </div>  
            <div class="input-field col s12 m3">
            <input id="bfpersons" name="bfpersons" type="text" class="validate">
            <label for="bfpersons">No of Persons</label>
            </div>            
            </div>
            </div> 
        </div>
        </div>
        <!-- Sweet Corner starts here -->
        <div class="section">
         <div class="row">
            <h3 class="center">Sweet Counter</h3>
          <div class="col s12 m12 l12">
            <div class="card-panel">
                <div class="space">
                    <div class="row">
                            <?php
                            $result = $db->get('breakfast',array('itemType', '=', 'sweet'));        
                            $count =  $result->count();    
                            for($i=0;$i<$count;$i++){
                            $itemId   =  $result->results()[$i]->itemId;
                            $itemName =  $result->results()[$i]->itemName;
                            $itemType =  $result->results()[$i]->itemType;                                            
                            ?>
                            <div class="col s6 m4 l3">
                            <input type="checkbox" id="<?php echo escape($itemId); ?>" name="<?php echo escape($itemId); ?>" value="<?php echo escape($itemName); ?>" />
                            <label for="<?php echo escape($itemId); ?>"><?php echo escape($itemName); ?></label>
                            </div>
                            <?php                         
                            }
                            ?>
                    </div>                                                       
                    </div>                                        
                 </div>
               </div>
              </div>
           </div><!--sweets ends here -->

           <!-- Snacks section starts here -->
        <div class="section">
         <div class="row">
            <h3 class="center">Snacks</h3>
          <div class="col s12 m12 l12">
            <div class="card-panel">
                <div class="space">
                    <div class="row">
                            <?php
                            $result = $db->get('breakfast',array('itemType', '=', 'snack'));        
                            $count =  $result->count();                            
                            for($i=0;$i<$count;$i++){
                            $itemId   =  $result->results()[$i]->itemId;
                            $itemName =  $result->results()[$i]->itemName;
                            $itemType =  $result->results()[$i]->itemType;                                           
                            ?>
                            <div class="col s6 m4 l3">
                            <input type="checkbox" id="<?php echo escape($itemId); ?>" name="<?php echo escape($itemId); ?>" value="<?php echo escape($itemName); ?>" />
                            <label for="<?php echo escape($itemId); ?>"><?php echo escape($itemName); ?></label>
                            </div>
                            <?php                            
                            }
                            ?>
                    </div>                                        
                    </div>                                        
                </div>
              </div>
            </div>
        </div>
           <!-- Snacks section ends here -->

           <!-- Namkeen section starts here -->
            <div class="section">
             <div class="row">
                <h3 class="center">Namkeen</h3>
              <div class="col s12 m12 l12">
                <div class="card-panel">
                    <div class="space">
                        <div class="row">
                                <?php
                                $result = $db->get('breakfast',array('itemType', '=', 'namkeen'));        
                                $count =  $result->count();                            
                                for($i=0;$i<$count;$i++){
                                $itemId   =  $result->results()[$i]->itemId;
                                $itemName =  $result->results()[$i]->itemName;
                                $itemType =  $result->results()[$i]->itemType;                                           
                                ?>
                                <div class="col s6 m4 l3">
                                <input type="checkbox" id="<?php echo escape($itemId); ?>" name="<?php echo escape($itemId); ?>" value="<?php echo escape($itemName); ?>" />
                                <label for="<?php echo escape($itemId); ?>"><?php echo escape($itemName); ?></label>
                                </div>
                                <?php                            
                                }
                                ?>
                        </div>                                        
                        </div>                                        
                    </div>
                  </div>
                </div>
            </div>
           <!-- Namkeen section ends here -->
        

    </div><!--breakfast ends here -->


    <div id="lunch" class="col s12">

        

    </div>


    <div id="snacks" class="col s12">
        

    </div>


    <div id="dinner" class="col s12">
        

    </div>
  </div>
</div>
</div>
        
  
  <div class="section">
  <div class="input-field col s12 m12 l12 center">
          <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
          <i class="material-icons right">send</i>
          </button>
  </div>
  </div>


  </form>


  
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
