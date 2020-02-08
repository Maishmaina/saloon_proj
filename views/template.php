<!--Turns on session and output buffering-->
<?php
  session_start();
  ob_start();

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;
 require_once( 'views/vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SCH||Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="views/css/bootstrap.css"><!--bootstrap-->
  <link rel="stylesheet" href="views/css/all.css"><!--webIcon-->
  <link rel="stylesheet" href="views/css/lightbox.min.css"><!--This is for the css gallery--->
	<link rel="stylesheet" type="text/css" href="views/css/cssvihecle.css"><!--my css-->
  <!-- SweetAlert vs2 -->
<script src="views/js/sweetalert2/sweetalert2.all.js"></script>
</head>

<body>
  <!--the preloader for the images srt-->
  <div class="preloader d-flex justify-content-center align-items-center">
    <img src="views/img/template/spinnerloader.gif" alt="the preloader"><br>
    <p>Loading...Please wait</p>
  </div>
  <!--the preloader for the images end--->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">

      <a class="navbar-brand" href="#"><img src="views/img/template/fine.jpg" alt="banner" height="50px" width="50px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto px-5">

          <li class="nav-item active px-3">
            <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link text-white" href="#services">Shop</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link text-white" href="#services">Services</a>
          </li>

            <li class="nav-item px-3">
            <a class="nav-link text-white" href="#about">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#contactus_modal">Contact Us</a>
          </li>

            <li class="nav-item px-3">
                <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#login_modal">
                    Sign In
                </a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#register_modal">
                    Sign Up
                </a>
            </li>

        </ul>

      </div>

</nav><!---end of the nav-->

<!--  includes users and register modals-->
<?php include "modules/users.php"; ?>




<!--the header srt-->
<header class="header" id="header">
<div class="container-fluid">
	<div class="row height-max align-items-center">
    <div class="testback"> 
		<div class=" col col-md-9 ml-auto text-right pr-5 mr-5 mt-5 pt-5">
		<h5 class="title-heading d-inline-block p-2 text-uppercase">All Pro</h5>
		<h2 class="text-uppercase my-2 title">2020 Best Hair Design</h2>
		<h3 class="text-uppercase">Best Salon</h3>
		<h6 class="text-capitalize">start from:</h6>
		<h2>As Low As Kshs 100=/ <a href="" class="title-icon d-inline-block mx-2">
			<i class="fas fa-play"></i>
		</a></h2>
		</div>
  </div>
	</div>
</div>	
</header>

<!--the header ends-->
<!---Skill section srt---->
<section class="skills py-4" id="skills">
	<div class="container">
		<div class="row mb-5">
			<div class="col d-flex flex-wrap text-uppercase justify-content-center">
     <h1 class="font-weight-bold align-self-center mx-1">Just Best</h1>   
      
      <h1 class="section-title-special mx-1">Salon</h1>
		</div>
    </div>
    <!--for the progress of the skill section--->
    <div class="row">
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-comments fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Shampoos</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
         We offer best conditionals for our customer
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-car fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Hair Dyes</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Go more than, what perceived as natural
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-wallet fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Affordable</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
        Actualize your style with best price out there 
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-people-carry fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Services</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Meet professinal to handle your request 
        </p>
      </div>
    </div>
	</div>
</section>
<!--Skill section end---->
<!---this is the inventory section srt--->
<section class="inventory py-5" id="inventory">
  <div class="container">
      <!--thisis the section  header pats srt--->
<div class="row mb-5">
      <div class="col d-flex flex-wrap text-uppercase justify-content-center">
     <h1 class="font-weight-bold align-self-center mx-1"> Best IN</h1>   
      
      <h1 class="section-title-special mx-1">Servies</h1>
    </div>
    </div>
      <!--this is the section  header parts ends--->
      <!---the element hair srt-->
      <div class="row inventory-container">

<?php include "modules/products.php"; ?>

   
      </div>
  </div>
</section>
<!---this is the inventory section end--->
<!--question section srt-->
<div class="section question py-5" id="question">
  <div class="container">
    <div class="row">
      <!--single qustion--->
      <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-gray">
        <a href="#" class="question-icon mr-3">
          <i class="fas fa-search fa-3x"></i>
        </a>
        <div class="question-text w-75">
          <h4 class="question-title text-capitalize font-weight-bold">
            About us
          </h4>
          <p class="question-info">We are here to offer the best servies.</p>
          <p class="question-info">We are here to make sure that you experince the cheapest out there.</p>
          <p class="question-info">We are here to make deal with you for your favour.</p>
          <p class="question-info">We are here to meet your demand.</p>
        </div>
      </div>
      <!--single qustion two--->
      <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-yellow">
        <a href="#" class="question-icon mr-3">
          <i class="fas fa-dollar-sign fa-3x"></i>
        </a>
        <div class="question-text w-75">
          <h4 class="question-title text-capitalize font-weight-bold">
            How we serve you
          </h4>
          <p class="question-info">We are here to offer the best servies.</p>
          <p class="question-info">We are here to make sure that you experince the cheapest out there.</p>
          <p class="question-info">We are here to make deal with you for your favour.</p>
          <p class="question-info">We are here to meet your demand.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--question section end--->
<!--for the features property srt--->
<section class="features py-5" id="feature">
  <div class="container">
   <!--for the section title srt--->
   <div class="row mb-5">
      <div class="col d-flex flex-wrap text-uppercase justify-content-center">
     <h1 class="font-weight-bold align-self-center mx-1">Featured for</h1>   
      
      <h1 class="section-title-special mx-1">Quality</h1>
    </div>
    </div>
   <!--for the section title end---> 
    <div class="row">
      <div class="col-10 mx-auto col-lg-6 featured-info my-3">
        <div class="featured-item my-3 d-flex flex-wrap p-2 text-capitalize align-items-baseline">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Hair cut</h5>
          <h5 class="mx-1">Best</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Manicures</h5>
          <h5 class="mx-1">Superb</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Style</h5>
          <h5 class="mx-1">Exeptional</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Body waxing</h5>
          <h5 class="mx-1">Excellent</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Conditioning</h5>
          <h5 class="mx-1">Top Level</h5>
        </div><!--for the single item end--->
      </div><!--ends the first column--->
      <div class="col-10 col-lg-6 featured-img align-self-center my-3">
        <div class="img-container">
          <img src="views/img/products/conditioning.jpg" alt="" class="img-fluid featured-photo">
          <a href="#" class="featured-link">
            <i class="fas fa-search fa-3x"></i>
          </a>
        </div>
      </div><!--ends of the second featured--->
    </div>
  </div>
</section>
<!--for the features property end--->
<!--footer goes hear srt-->
  <footer id="footer">
    <div class="container">
      <div class="row">
      <div class="col-md-4 three-col">
        <h4>Infor</h4>
        <p>Were are located at karatina town. for the purpose of services</p>
        <p>For the purpose of product we will deliver right at your homesteand</p> 
        <p> do to shy off just contact us and we shall react as per your need please</p>
        <a href="#" class="btn btn-success float-right">Contact Us</a>     
      </div>
      <div class="col-md-4 mid-row">
        <h4>Follow Us</h4>
        <p>Lets meet at our social media platform with more to offer.</p>
        <div class="special-icon">
          <a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="btn btn-danger"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
          <a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
        </div>
      </div> 
      <div class="col-md-4 contact">
        <div class="float-right">
        <h4>Reach us Fast</h4>
        <p><i class="fas fa-map-marker-alt"></i>Karatina <span class="number">0100</span></p>
        <p><i class="fas fa-phone "></i> Kenya call<span class="number"> (254) 774259319</span></p>
        <p><i class="fas fa-envelope-open"></i><span class="number"><a href="mailto:@jukalia.com" class="infor"> salon@gmail.com</a></span></p>
      </div>
      </div>
    </div>
    </div>
    <div class="text-danger">
 <p class="float-left p-3">&copy;2020</p>
 <p class="float-right p-3"> Developed with <i class="fas fa-heart"></i> by Wills</p>
</div>
  </footer>

 <!--register modal-->
<div class="modal fade" id="contactus_modal">
    <div class="modal-dialog">
        <div class="modal-form register modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact Support for any Query</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Subject</label>
                        <input type="text" class="form-control" name="subject">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Message</label>
                        <textarea class="form-control" name="message"></textarea>
                    </div>

                    <input type="submit" name="contact" value="Register" class="btn btn-success btn-block">

                </form>
                <?php 


if (isset($_POST['contact'])) {
$sender_name = $_POST['name'];
$sender_email = $_POST['email'];
$sender_subject = $_POST['subject'];
$sender_message = $_POST['message'];
$receiver_email = "simpledaniel.1818@gmail.com";
// mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);


$mail = new PHPMailer(true);
try{
//$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = '.......';
$mail->Password = '....';
$mail->SMTPSecure = 'tls';
$mail->setFrom('simpledaniel.1818@gmail.com', 'First Last');
$mail->addReplyTo('simpledaniel.1818@gmail.com', 'First Last');
$mail->addAddress($sender_email, $sender_name);

$mail->isHTML(true);
$mail->Subject = $sender_subject;
$mail->Body    = $sender_message;
$mail->AltBody = 'This is a plain-text message body';

$mail->send();

echo "<script>
           swal({
            type:'success',
                    title: 'Success...',
                    text: 'Email sent successfully',
                    showConfirmButton: true,
                    confirmButtonText:'Close',
                    closeOnConfirm:false
            }).then((result)=>{
              if(result.value){
                window.open('http://127.0.0.1/saloon','_self');
              }
              });
           </script>";

 }catch(Exception $e){
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";   
 }  

}

                 ?>
            </div>
        </div>
    </div>
</div> 
 
<!---the footer section end--->

	<!--for the inclution of the javaScript Contents--->
		<!--thejsquery, fontawesome, bootstrapjs,below hear-->
	 
	<script src="views/js/all.js"></script><!--WebIcons-->
<script src="views/js/bootstrapjquery.js"></script><!--jquerywork-->
  <script src="views/js/bootstrap.js"></script><!--bootstrapwork-->
  <script type="text/javascript" src="views/js/main.js"></script><!--myjs-->
</body>
</html>