<?php
session_start();
?>
<!-- navigation features -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <link
      rel="stylesheet"
       <link href=
"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
              rel="stylesheet" />
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" rel="stylesheet"/>
     


    <style type="text/css">
      body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
      }

      .ui.center.aligned.container {
        margin-top: 4em;
      }

      p.lead {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1.3em;
        color: #333333;
        line-height: 1.4;
        font-weight: 300;
      }

      .ui.huge.header {
        font-size: 36px;
      }


      .ui.inverted.menu {
        border-radius: 0;
        flex-wrap: wrap;
        border: none;
        padding-left: 0;
        padding-right: 0;
      }

      .ui.mobile.only.grid .ui.menu.ui.vertical.menu {
        display: none;
      }

      .ui.inverted.menu.item {
        color: rgb(157, 157, 157);
        font-size: 16px;
      }
      

      .ui.inverted.menu .active.item {
        background-color: off-white;
      }
    </style>
    <!-- LOGO -->
  </head>
  <div class="ui tall stacked segment">
  <div class="ui tall stacked segment">
    
  <a href="home.php">
    

        <img alt="Tution World" src="tutionWorldLogo.JPG"
         width="200px" height="50px">
         
         
      </a>
      
<!-- navigation -->
  <body id="root">
    <div class="ui tablet computer only padded grid">
      <div class="ui borderless fluid small inverted menu">
        <div class="ui container">
          <a class="item" href="home.php">HOME</a>
          <a class="active item" href="tution_jobs.php">TUTION JOBS</a>
          <a class="item" href="hire_a_tutor.php">HIRE A TUTOR</a>
          <a class="item" href="all_tutors.php">ALL TUTORS</a>
        
          <a class="item" href="contact_us.php">CONTACT US</a>
          
            <!-- profile
        <a class="right menu"></a>
      
      <a class="ui huge green button"href="registration.php">Quick Registration</a> -->
      </div>
    </div>
    </div>








      <!-- searchTutor form -->
      <h2 class="ui aligned icon header">
  <i class="child icon"></i>
  <i>Find your Student</i>
</h2>
<h2> <br> </h2>

      <div class="ui text container">
          <form class="ui form" method=POST action=tution_jobsResult.php>
            
	
	<!-- District: <input type=text placeholder="Dhaka" name=ti_presentDistrict> <br>
	<p>
	Area: <input type=text placeholder="Gulsan" name=ti_presentArea> <br>
  <p>
  Medium: <input type=text placeholder="english/bangla" name=ti_medium> <br>

    <p>
	Level : <input type=text  placeholder="class7"name=ti_level> <br>
	
  <p>
  Gender: <input type=text placeholder="english/bangla" name=ti_medium> <br>
  <p> -->



    
    
    <label>Select District</label>
              <div class="ui selection dropdown">
                <input type="hidden"name="present_district">
                <i class="dropdown icon">choose your district</i>
                <div class="default text"></div>
                <div class="menu">
                    <div class="item" data-value="Dhaka">Dhaka</div>
                </div>
            </div>
    
    
    
    
    
    
    
    </p>
    <p>
    
    <div>
    <label>Area</label>
              <div class="ui selection dropdown">
                <input type="hidden" name="area">
                <i class="dropdown icon"></i>
                <div class="default text">select nearest area</div>
                <div class="menu">
                    <div class="item" data-value="Badda">Badda</div>
                    <div class="item" data-value="Banani">Banani</div>
                    <div class="item" data-value="Gulshan1">Gulshan01</div>
                    <div class="item" data-value="Mirpur">Mirpur</div>
                    <div class="item" data-value="Dhanmondi">Dhanmondi</div>
                    <div class="item" data-value="Mohakhali">Mohakhali</div>
                </div>
            </div>
            </div>
    
    
    
    
    
    
    
    </p>
    
    <p>
    
    
    <div>
    <label>Gender</label>
              <div class="ui selection dropdown">
                <input type="hidden" name="gender">
                <i class="dropdown icon"></i>
                <div class="default text"></div>
                <div class="menu">
                    <div class="item" data-value="male">male</div>
                    <div class="item" data-value="female">female</div>
                    
                </div>
            </div>
            </div>
                
               
    
    
    </p>
    <p>
    
    
    <label>Medium</label>
              <div class="ui selection dropdown">
                <input type="hidden" name="medium">
                <i class="dropdown icon"></i>
                <div class="default text">choose medium</div>
                <div class="menu">
                    <div class="item" data-value="English">English</div>
                    <div class="item" data-value="Bangla">Bangla</div>
                   
                </div>
            </div>
    
    
    
    
        
    
    </p>
    
    
      <p>

      
    
    
    <label>For which class</label>
              <div class="ui selection dropdown">
                <input type="hidden" name="class">
                <i class="dropdown icon"></i>
                <div class="default text">level/class</div>
                <div class="menu">
                    <div class="item" data-value="O Level">O Level</div>
                    <div class="item" data-value="A level">A level</div>
                    <div class="item" data-value="class 12">class 12</div>
                    <div class="item" data-value="class 11">class 11</div>
                    <div class="item" data-value="class 10">class 10</div>
                    <div class="item" data-value="class 9">class 9</div>
                    <div class="item" data-value="class 8">class 8</div>
                    <div class="item" data-value="class 7">class 7</div>
                    <div class="item" data-value="class 6">class 6</div>
                    <div class="item" data-value="class 5">class 5</div>
                    <div class="item" data-value="class 4">class 4</div>
                    <div class="item" data-value="class 3">class 3</div>
                    <div class="item" data-value="class 2">class 2</div>
                    <div class="item" data-value="class 1">class 1</div>
              
                </div>
            </div>
    
     
            <script src=
    "https://code.jquery.com/jquery-3.1.1.min.js"
                   integrity=
    "sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                    crossorigin="anonymous">
             </script>
            <script src=
     "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
            </script>
            <script>
              $(function() {
                  $('.ui.dropdown').dropdown();
              });       
            </script>
    
    
    </p>
    
      <p>
    
    <input type=submit value=search name=search>
    
    </form>
    </p>
     <br> 
    


          <!-- php code -->

          </p>
        </div>
      </div>
    </div>
  </div>




   

    <!-- footer -->
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Important Links</h4>
          <div class="ui inverted link list">
            <a href="tution_jobs.php" class="item">TUTION JOBS</a>
            <a href="hire_a_tutor.php" class="item">HIRE A TUTOR</a>
            <a href="all_tutors.php" class="item">ALL TUTORS</a>
            <a class="item" href="all_students.php">ALL STUDENTS</a>
 
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Follow Us</h4>
          <div class="ui inverted link list">
          <button class="ui circular facebook icon button">
          <a href="https://www.facebook.com/" class="item"> <i class="facebook icon"></i> </a> 
</button>
<button class="ui circular twitter icon button">
<a href="https://www.twitter.com/" class="item">  <i class="twitter icon"></i></a>
</button>
<button class="ui circular linkedin icon button">
<a href="https://www.linkedin.com/" class="item">  <i class="linkedin icon"></i> </a> 
</button>
<button class="ui circular google plus icon button">
<a href="https://www.googleplus.com/" class="item"> <i class="google plus icon"></i> </a> 
</button>
          </div>
        </div>
        
        <div class="seven wide column">
          <h4 class="ui inverted header">Contact Us</h4>
          <p> <i class="ui inverted header">Hotline: +880 1716337123</i></p>
          <p>Email: info@tutionworld.com</p>
          <p> Address: Road-12,Ave-02,Mirpur DOHS</p>
        </div> <div class="seven wide column">
          <h4 class="ui inverted header"> ©2022 TutionWorld</h4>
          <p>All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>

    
    
  </body>
</html>
