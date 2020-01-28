<!DOCTYPE html>
<html>
    <head>
        <title>HOME PAGE</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <style>
        #loading{
          position: fixed;
        width: 100%;
        height: 100vh;
        background: #fff url('http://bit.ly/3akDzit') no-repeat center;
          z-index: 99999;
      }
        #popUpMain{
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        z-index: 1001;
    }
    #popup{
        width: 700px;
        height: 300px;
        background-image: url(https://bit.ly/2NDhFwZ);
        background-size: cover;
        position: absolute;
        top: 30%;
        left: 30%;
        transform: (-50%,-50%);
        box-shadow: 2px 2px 5px 3px white;
        text-align: center;
    }
    .submitId{
      background-color: #0fc0fa;
      border: none;
      font-size: 1rem;
      padding: 0.6rem 1rem;
      color: white;
    }
    .lk{
      height: 250px;
    }
    </style>
    </head>
    <body onload="myFunction()">
      <div id="loading">

      </div>
      <div class="container-fluid">
    <div id="popUpMain" style="display: none" class="container-fluid">
        <div id="popup">
          <h1 class="notice text-white text-center p-3">Important Notice</h1>
          <?php
              require "dbcon.php";
              $sql="SELECT * FROM notice where CURDATE()<=to_date order by to_date ";
              $rec=mysqli_query($db,$sql);
              if(mysqli_num_rows($rec)){
                  $res=mysqli_fetch_array($rec);
                  echo "<h4 id='h'>TITLE: ".$res['subject']."</h4><br>";
                  echo "<h4 id='h'>DETAIL: ".$res['detail']."</h4><br>";
              }
              else{
                echo "<h4 id='h'>NO NOTICE NOW</h4>";
              }
              ?>
          <button class="submitId">OK</button>
        </div>
    </div>
    <?php include 'menu.php' ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://bit.ly/3a6SDQD" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>University Campus</h3>
        <p>We had such a great time in campus!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://bit.ly/3ahHzQS" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Goa</h3>
        <p>Learn to build a better future!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://bit.ly/2TmwnMB" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>NIT Goa</h3>
        <p>National Institue of technology!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
    <div class='py-5'>
        <h2 class="text-center">About us</h2>
    </div>
    <div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-6 col-md-6 col-12 wow fadeInLeft'>
            <img src="http://bit.ly/30jv3eU" class='img-fluid aboutimg'>
        </div>
        <div class='col-lg-6 col-md-6 col-12 wow fadeInRight'>
            <h3 class="display-4">Alumni Tracking System</h3>
            <p class="py-3">The aim of this Alumni Management System project is to build a system that will be able to manage alumni data of a college and provide easy access to the same. Alumni of a college generally stay in touch with their immediate friends but find it hard to stay connected with other college mates. Contact between alumni can be used to forge business connections and to gain references or insight in a new field. New college students will be initially given a student login ID. Access to the system can help them in building connections to help them in their projects or for placements.</p>
            <br>
            <a href="about.php" class="btn btn-success wow flash">Continue reading</a>
        </div>
    </div>
</div>
</section>
<section class="my-5">
    <div class='py-5'>
        <h2 class="text-center">Gallery</h2>
    </div>
    <div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-4 col-md-4 col-12 wow rotateInDownLeft'>
            <img src="http://bit.ly/3a4ZxGd" class='img-fluid pb-4'>
        </div>
        <div class='col-lg-4 col-md-4 col-12 wow slideInDown'>
            <img src="http://bit.ly/36OJBpk" class='img-fluid pb-4'>
        </div>
        <div class='col-lg-4 col-md-4 col-12 wow rotateInDownRight'>
            <img src="http://bit.ly/2uNWVME" class='img-fluid pb-4'>
        </div>
        <div class='bb'>
        <a href="gallery.php" class="btn btn-success wow flash">see more</a>
        </div>
</div>
</section>
<section class="my-5">
    <div class='py-5'>
        <h2 class="text-center">Feedback</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email-Id</label>
                <input type="text" name="email-id" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile-no.</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comment</label>
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
<section class='my-5'>
<div class='py-5'>
            <h2 class="p-2 bg-dark text-white text-center"><b>CONTACT US</b></h2>
            <br>
            <div class="containerfluid">
            <div class="row">
            <div class='col-lg-4 col-md-4 col-12'>
              <div id="add">
            <img src="https://bit.ly/2qEsHcG" class=' akgx img-fluid pb-4'>
            <address title=" Address ">
                27th Km Stone<br>
                Delhi - Hapur Bypass Road,<br>
                Adhyatmik Nagar<br>
                Ghaziabad - 201009
            </address>
            <img class='akg1' src="https://bit.ly/36CxFH1">
             <h4>8744052891,7290034978/79</h4>
             <hr>
</div>
        </div>
        <div class='col-lg-4 col-md-4 col-12 vl'>
          <div id="ima">
        <h3>CLICK to visit or contact us</h3>
                    <a href="https://www.unigoa.ac.in/"><img class='akg2' src="http://bit.ly/2Nq1nHJ"></a>
                    <a href="directorate2goa@gmail.com"><img class='akg2' src="https://bit.ly/2Q273tN" ></a>
        </div>
</div>
        <div class='col-lg-4 col-md-4 col-12'>
                    <h3>DEVELOPED BY</h3>
                    <a href="https://www.akgec.ac.in/"><img class="akg" src="http://www.akgec-siemens.org/images/akgeci.jpg"></a>
        </div>
</div>
</div>
</div>
  </div>
</section>
<section>
<div class="py-5">
<h2 class="p-2 text-white bg-dark text-center">Team Members</h2>
    <div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-2 col-md-2 col-6 wow rotateInDownLeft'>
            <img src="priyanshu.jpeg" class='img-fluid pb-4 lk'>
            <h4>Priyanshu Goel</h4>
        </div>
        <div class='col-lg-2 col-md-2 col-6 wow slideInDown'>
            <img src="ashish.jpg" class='img-fluid pb-4 lk'>
            <h4>Ashish Chauhan</h4>
        </div>
        <div class='col-lg-2 col-md-2 col-6 wow slideInUp'>
            <img src="deeksha.jpg" class='img-fluid pb-4 lk'>
            <h4>Deeksha Gupta</h4>
        </div>
        <div class='col-lg-2 col-md-2 col-6 wow slideInDown'>
            <img src="divyansh.jpeg" class='img-fluid pb-4 lk'>
            <h4>Divyansh Gupta</h4>
        </div>
        <div class='col-lg-2 col-md-2 col-6 wow slideInUp'>
            <img src="akriti.jpeg" class='img-fluid pb-4 lk'>
            <h4>Akriti Sonker</h4>
        </div>
        <div class='col-lg-2 col-md-2 col-6 wow rotateInDownRight'>
            <img src="avatansh.jpeg" class='img-fluid pb-4 lk'>
            <h4>Avtansh Pandey</h4>
        </div>
        </div>
        </div>
        </div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">University of goa<br>Alumini tracking system</p>
</footer>
<script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
          setTimeout(function(){
              $('#popUpMain').css('display','block');
          }, 5000);
        });
        $('.submitId').click(function(){
          $('#popUpMain').css('display','none');
        });
        </script>
        <script>
            var preloader = document.getElementById('loading');
            function myFunction(){
              preloader.style.display = 'none';
            }
        </script>
    </body>
</html>