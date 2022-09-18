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
        background-color:off white ;
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
          <a class="item" href="tution_jobs.php">TUTION JOBS</a>
          <a class="active item" href="hire_a_tutor.php">HIRE A TUTOR</a>
          <a class="item" href="all_tutors.php">ALL TUTORS</a>
          <a class="item" href="all_students.php">ALL STUDENTS</a>
    
          <a class="item" href="contact_us.php">CONTACT US</a>


          
          
          <!-- profile -->
        <!-- <a class="right menu"></a>
      
        <a class="ui huge green button"href="registration.php">Quick Registration</a> -->
      </div>
    </div>
    </div>


   
   

          <!-- php code value insert -->
        
 
<!--           


 -->



  <!-- php code checking -->
 

  <h1>Available Tutors</h1>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    
    
if(isset($_POST['search'])){
  $t_district = $_POST['t_district'];
  $t_area = $_POST['t_area'];
  $gender = $_POST['gender'];
  $t_medium = $_POST['t_medium'];
  $interested_level = $_POST['interested_level'];
  $experience = $_POST['experience'];
  $From_institute = $_POST['From_institute'];


  
 
  

  if($t_district!=""|| $t_area!="" || $gender!=""|| $t_medium!=""|| $gender!=""|| $experience!="" || $From_institute!=""){


    $query="SELECT* FROM teacher WHERE t_district ='$t_district' AND t_area ='$t_area' AND gender ='$gender' AND From_institute ='$From_institute' AND experience ='$experience' AND t_medium ='$t_medium' AND interested_level ='$interested_level' ";

   
    
    


    $data = mysqli_query($connect, $query) or die('error');

    
    if (mysqli_num_rows($data)>0){
      

      while($row=mysqli_fetch_assoc($data)){

        

        
        
        // $ti_presentDistrict=$row['ti_presentDistrict'];
        // $ti_presentArea=$row['ti_presentArea'];
        // $ti_medium=$row['ti_medium'];
        // $ti_level=$row['ti_level'];
        // $ti_monthlySalary=$row['ti_monthlySalary'];

        $t_district=$row['t_district'];
        $t_area=$row['t_area'];
        $gender=$row['gender'];
        $t_medium=$row['t_medium'];
        $interested_level=$row['interested_level'];
        $experience=$row['experience'];
        $From_institute=$row['From_institute'];
        $name=$row['name'];
        $email=$row['email'];
        $phone_no=$row['phone_no'];
        $present_level=$row['present_level'];
        $expected_salary=$row['expected_salary'];
        $joining_date=$row['joining_date'];

    
        ?>
       
        <table class='ui red table' style='margin: 0 auto;'>
    <th>Tutor Name</th> <th>email</th> <th>Phone Number</th> <th>Expected Salary</th><th>Joined</th>
        <tr>

        
       
        
           
            <!-- <td><?php echo $ti_presentDistrict;?></td>
            <td><?php echo $ti_presentArea;?></td>
            <td><?php echo $ti_medium;?></td>
            <td><?php echo $ti_level;?></td>
            <td><?php echo $ti_monthlySalary;?></td> -->

             <td><?php echo $name;?></td><br>
            <td><?php echo $email;?></td><br>
            <td><?php echo $phone_no;?></td><br>
            <td><?php echo $expected_salary;?></td><br>
            <td><?php echo $joining_date;?></td><br>
           
            
        </tr>

       </table>
        <?php
        
         
      }
      
      
    }
    
  
    else{
      ?>
       <table class='ui red table' style='margin: 0 auto;'>
    

        
      <tr>
          <td>Recond Not Found !</td>
  
  
  
      </tr>
      </table>
      <?php
      
      


      
  
    }
    
    


    
  }
  

else{ echo 'fill up Form first';}
 
}


?>


 


         
     
  
   

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
