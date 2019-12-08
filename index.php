<?php include('config.php');
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: user_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: user_login.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Jashim </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/fav_title.ico" type="image/x-icon">
  </head>
  <body>
    <!--navigation-->
<nav class="navbar nav" id="nav">
   <h2></span> <span class="text-primary">Jashim Uddin</span> </h2>
      <ul>
          <li><a href="#" >Home</a> </li>
          <li> <a href="#education">Education</a></li>
          <li> <a href="#skill" >Skills</a></li>
          <li><a href="#experience">Experience</a></li>
          <li> <a href="#contact">Contact</a></li>
          
          <h4 class="text-center text-info "><?php echo $_SESSION['username']; ?>  </h4>
          
          <a href="index.php?logout" class="btn btn-primary ">logout</a>
      </ul>
 </nav>
    <!--navigation end-->

<div id="my-carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
    <li data-target="#my-carousel" data-slide-to="1"></li>
  </ol>
    
<section id="header">
  <div class="header-bg" >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block">
        <h2>Title</h2>
        <p>Text</p>
      </div>
      <img class="d-block w-100" src="img/slider_1.jpg" alt="First slide">
      
    </div>
    <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block">
        <h2>Title</h2>
        <p>Text</p>
      </div>
      <img class="d-block w-100" src="img/slider_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block">
        <h2>Title</h2>
        <p>Text</p>
      </div>
      <img class="d-block w-100" src="img/slider_3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</section>
<br/>
<!--ecucation part start-->
<section id="education">
  <div class="container p-5">
  
  <div class="span text-center ">
    
  <h2><span><img src="img/edu-icon.png" height="80px"></span> Educational Information</h2>
  </div>
    <div class="row">

      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title">Higher Secondary Ceticicate (HSC)</h4>
            <hr width="75%"/>
            <p class="card-text"><img src="img/check.png"> Tongi Govt college</p>
            <p class="card-text"> <img src="img/check.png"> Group of Business Study</p>
            <p class="card-text"> <img src="img/check.png"> Passed in 2015</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
        <div class="card shadow">
          <div class="card-body">
            <h4 class="card-title">Secondary school certificate (SSC)</h4><hr width="75%"/>
           <p class="card-text"><img src="img/check.png"> Tongi pilot school and college</p>
           <p class="card-text"><img src="img/check.png"> Group of Business Study</p>
           <p class="card-text"><img src="img/check.png"> Passed in 2013</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="card-title">Diploma in Engineering (BTEB)</h4><hr width="75%"/>
          <p class="card-text"> <img src="img/check.png"> Uttara Engineering college</p>
          <p class="card-text"><img src="img/check.png"> Group Of Computer science</p>
          <p class="card-text"><img src="img/check.png"> Study continue</p>
        </div>
      </div>
      </div>

    </div>
  </div>
</section>
<!--education end-->
<!--skills-->
<  <section id="skill">
    <div class="container">
        <h2 class="text-center">MY SKILL</h2><hr/>
		
		<div class="row p-3">
          <div class="col-md-4 col-lg-4 col-xl-4">
			  <div class="card shadow">
				<div class="card-body text-center">
				  <img src="img/photoshop.png" alt="">
					  <h4 class="skill_single-part_title">ADOBE PHOTOSHOP</h4>
						<div class="progress"><strong class="number" data-number="1200">0</strong>
						<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:80%;background-color: #7FB7FA;">80%
						</div>
					  </div>
				</div>
			  </div>
      </div>
		  
		  <div class="col-md-4 col-lg-4 col-xl-4">
			  <div class="card shadow">
				<div class="card-body text-center">
				  <img src="img/illustrator.png" alt="">
					  <h4 class="skill_single-part_title">ADOBE ILLUSTRATOR</h4>
						<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:80%;background-color: #7FB7FA;">80%
						</div>
					  </div>
				</div>
			  </div>
      </div>
		  
      <div class="col-md-4 col-lg-4 col-xl-4">
		  <div class="card shadow">
			<div class="card-body text-center">
			  <img src="img/after-effects.png" alt="">
				  <h4 class="skill_single-part_title">ADOBE AFTER EFFECTS</h4>
					<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:60%;background-color: #7FB7FA;">60%
					</div>
				  </div>
			</div>
		  </div>
      </div>  
		  </div>
		  
		 <div class="row p-3">
          <div class="col-md-4 col-lg-4 col-xl-4">
			  <div class="card shadow">
				<div class="card-body text-center">
				  <img src="img/html5-icon.jpg" alt="" class="markup">
					  <h4 class="skill_single-part_title">HTML</h4>
						<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:90%;background-color: #7FB7FA;">90%
						</div>
					  </div>
				</div>
			  </div>
      </div>
		  
		  <div class="col-md-4 col-lg-4 col-xl-4">
			  <div class="card shadow">
				<div class="card-body text-center">
				  <img src="img/css3-icon.png" alt="" class="markup">
					  <h4 class="skill_single-part_title">CSS</h4>
						<div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:85%;background-color: #7FB7FA;">85%
						</div>
					  </div>
				</div>
			  </div>
      </div>
		  
      <div class="col-md-4 col-lg-4 col-xl-4">
		  <div class="card shadow">
			<div class="card-body text-center">
			  <img src="img/javascript-icon.png" alt="" class="markup">
				  <h4 class="skill_single-part_title">JavaScript</h4>
					<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:70%;background-color: #7FB7FA;">70%
					</div>
				  </div>
			</div>
		  </div>
      </div>  
		  </div>
      </div>
  </section>
<!--skills-->

<!--experience-->
<section id="experience">
  <div class="container shadow mt-5">
    <h1 class="text-center p-5 "> <span class="text-info">Experience</span></h1>
    <div class="row p-4 shadow">
      <div class="col-md-8 m-auto">
		<h2>ABCD software - 2018</h2>
      <h5>Senior Engineer</h5>
      <p>there i was worked for an new company. I have made more profit and familiar this company in a short time.</p>
	  </div>
    </div>

    <div class="row p-4 shadow">
    <div class="col-md-8 m-auto">
		<h2>Tech soft zone  - 2016</h2>
      <h5>Junior Engineer</h5>
      <p>there i was worked for an new company. I have made more profit and familiar this company in a short time.</p>
	</div>
    </div>

    <div class="row p-4 shadow">
    <div class="col-md-8 m-auto">
		<h2>Brilliant Researce ltd- 2015</h2>
      <h5>Admin support</h5>
      <p>there i was worked for an new company. I have made more profit and familiar this company in a short time.</p>
	</div>
    </div>

  </div>

</section>
<!--experience-->

<!--contact-->
<section id="contact">
  <div class="container p-5">
      <div class="row ">
		<div class="col-md-8 m-auto p-5">
      <form action="#" method="post" class="form card shadow">
      <h2 class=" p-2 text-center">Contact Me</h2>

      <div class="form-group p-3">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
  </div>

  <div class="form-group p-3">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
  </div>

  <div class="form-group p-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group p-3">
  <textarea name="comment" id="" cols="80" rows="10" placeholder=" Your comment here..."></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary m-3">Send</button>
</form>
      </div>
	  </div>
  </div>
</section>

<section id="footer">
  <div class="p-3 bg-dark text-white">
    <div class="row text-center">
      <div class="col-sm-4 col-md-4 lg-4 xl-4"><a class="" href="" >Privacy </a><hr color="white">
     <a class="" href="" >Know our privacy </a>
      <br/><a class="" href="" >Know the policy </a>
      </div>

      <div class="col-sm-4 col-md-4 lg-4 xl-4"><a class="" href="" >Support </a><hr color="white">
      <a class="" href="" >Contact support team </a>
      <br/><a class="" href="" >Contact our technical team </a>
      
      </div>

      <div class="col-sm-4 col-md-4 lg-4 xl-4"><a class="" href="" >About us </a><hr color="white"> 
      <a class="" href="" >About Our website </a>
      <br/><a class="" href="" >About our Details </a>
      
      </div>

    </div>
    <div class="row text-center ">
      <div class="foot  text-secondary m-auto">All Right reserved and copyright by Jashim<span class="text-primary"> &copy; 2019 </span></div>
    </div>
  </div>

</section>
	  



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>

  </body>
</html>