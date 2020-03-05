<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet"  type="text/css">
    <script src="js/script.js"></script>
<title> WM Contact Us</title>

</head>
    
    <body>
    <header class="header">
    <nav class="navbar navbar-style">
        <div class ="container">
            <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                
                    </button>
                <a href="index.html"><img class="logo" src="images/WM.png"></a>
                <h3 class="wm-title">WARPED MINDS</h3>
                </div>
            
                <div class="collapse navbar-collapse" id="micon">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="gigs.html">Gigs</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a class="active" href="contact.html">Contact</a></li>
                    </ul>  
                </div>
        </div>
    </nav>
    </header>
    <h1 class="heading"> WM <span>Contact Us</span></h1>
<!--    <a style="text-align: center" class="btn btn-first" href="mailto:warpedband2014@gmail.com">Email Us Directly!</a>     -->

<!--
    <div class="container-contact">
      <form action="mailto:conor.byrne2@esb.ie" method="post" enctype="text/plain">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">


        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
-->        
    <div class="container-contact" >
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
 
                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="email" name="Email" placeholder="Your Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <br>  
    <br>
    <div class="footer">
        <br>
        <hr>
        <ul>    
            <br>
            <li><p><strong>Follow Us!</strong></p> </li>
            <br>
            <li><a href="https://www.facebook.com/warpedmindsmusic/" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/warpedmindsmusic/" class="fa fa-instagram"></a>
            <a href="https://www.spotify.com/" class="fa fa-spotify"></a>
            <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
            <a href="https://www.soundcloud.com/warpedmindsmusic/" class="fa fa-soundcloud"></a></li>
        </ul>
        <br>
        <p>Warped Minds 2020 &#x00AE;</p>   
    </div>
     

   
  
</body> 
</html>