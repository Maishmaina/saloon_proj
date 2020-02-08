
<!--Turns on session and output buffering-->

<?php

  session_start();
  ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Me||Vihecle</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="views/css/bootstrap.css"><!--bootstrap-->
  <link rel="stylesheet" href="views/css/all.css"><!--webIcon-->
  <link rel="stylesheet" href="views/css/lightbox.min.css"><!--This is for the css gallery--->
	<link rel="stylesheet" type="text/css" href="views/css/cssvihecle.css"><!--my css-->
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
            <a class="nav-link text-white" href="#brand">Brand</a>
          </li>


          <li class="nav-item dropdown px-3">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Recent
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="#pochez">Pochez</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item " href="#extrav12"> Extra v12</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#convertable">Convertable</a>
            </div>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link text-white" href="#services">Services</a>
          </li>

            <li class="nav-item px-3">
            <a class="nav-link text-white" href="#about">About</a>
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
		<div class=" col col-md-9 ml-auto text-right pr-5">
			<h5 class="title-heading d-inline-block p-2 text-uppercase">All Pro</h5>
		<h2 class="text-uppercase my-2 title">2019 WHEELBALOW</h2>
		<h3 class="text-uppercase">model name</h3>
		<h6 class="text-capitalize">strat from</h6>
		<h2>Kshs 300,000 <a href="" class="title-icon     d-inline-block mx-2">
			<i class="fas fa-play"></i>
		</a></h2>
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
      
      <h1 class="section-title-special mx-1">car Sale</h1>
		</div>
    </div>
    <!--for the progress of the skill section--->
    <div class="row">
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-comments fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Great Support</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, non!
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-car fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">All Our Brand</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, non!
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-wallet fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Affordable</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, non!
        </p>
      </div>
      <!--single skill--->
      <div class="col-sm-6 col-lg-3 text-center my-3">
        <a href="#" class="skills-icon p-3 rounded-circle"><i class="fas fa-people-carry fa-2x"></i></a>
        <h6 class="text-uppercase font-weight-bold my-3">Handle</h6>
        <div class="skills-underline"></div>
        <p class="w-75 mx-auto text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, non!
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
     <h1 class="font-weight-bold align-self-center mx-1"> Best</h1>   
      
      <h1 class="section-title-special mx-1">Store</h1>
    </div>
    </div>
      <!--thisis the section  header pats ends--->
      <div class="row mb-5">
        <div class="col-10 mx-auto col-md-12 d-flex justify-content-end">
          <button class="btn btn-outline-secondary text-uppercase mx-1 filter-btn" data-filter="all">all</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1 filter-btn" data-filter="Kenya">nairobi</button>
          <button class="btn btn-outline-secondary text-uppercase mx-1 filter-btn" data-filter="Nigeria">mombasa</button>
        </div>
      </div>
      <!---the element car srt-->
      <div class="row inventory-container">
        <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/template/gallpic.jpg" class=" card-img-top car-img" alt="" height="100px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    Table Designer
                  </h6>
                  <h6>model</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price">10,000</span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-car "></i></span>Star</p>
              <p><span><i class="fas fa-cogs "></i></span>Automatic</p>
              <p><span><i class="fas fa-gas-pump "></i></span>50</p>
            </div>
          </div>
        </div>
         <!--for the single item--->
          <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/template/gallpic1.jpg" class=" card-img-top car-img" alt="" height="100px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    Table Designer
                  </h6>
                  <h6>model</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price">10,000</span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-car "></i></span>Star</p>
              <p><span><i class="fas fa-cogs "></i></span>Automatic</p>
              <p><span><i class="fas fa-gas-pump "></i></span>50</p>
            </div>
          </div>
        </div>
         <!--for the single item--->
          <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/template/gallpic4.jpg" class=" card-img-top car-img" alt="" height="100px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    Table Designer
                  </h6>
                  <h6>model</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price">10,000</span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-car "></i></span>Star</p>
              <p><span><i class="fas fa-cogs "></i></span>Automatic</p>
              <p><span><i class="fas fa-gas-pump "></i></span>50</p>
            </div>
          </div>
        </div>
         <!--for the single item--->
          <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/template/gallpic5.jpg" class=" card-img-top car-img" alt="" height="100px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    Table Designer
                  </h6>
                  <h6>model</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price">10,000</span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-car "></i></span>Star</p>
              <p><span><i class="fas fa-cogs "></i></span>Automatic</p>
              <p><span><i class="fas fa-gas-pump "></i></span>50</p>
            </div>
          </div>
        </div>
         <!--for the single item--->
          <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/template/gallpic6.jpg" class=" card-img-top car-img" alt="" height="100px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    Table Designer
                  </h6>
                  <h6>model</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price">10,000</span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-car "></i></span>Star</p>
              <p><span><i class="fas fa-cogs "></i></span>Automatic</p>
              <p><span><i class="fas fa-gas-pump "></i></span>50</p>
            </div>
          </div>
        </div>
         <!--for the single item--->
          <div class="col-10 mx-auto my-3 col-md-6 col-lg-4">
          <div class="card car-card">
            <img src="views/img/template/fruit.jpg" class=" card-img-top car-img" alt="" height="100px">
            <div class="card-body">
              <div class="card-info d-flex jastify-content-between">
                <div class="car-text text-uppercase">
                  <h6 class="font-weight-bold">
                    Table Designer
                  </h6>
                  <h6>model</h6>
                </div>
                <h5 class="car-value align-self-center py-2 px-3">Ksh
                   <span class="car-price">10,000</span>
                </h5>
              </div>
            </div><!--the card footer srt--->
            <div class="card-footer text-capitalize d-flex justify-content-between">
              <p><span><i class="fas fa-car "></i></span>Star</p>
              <p><span><i class="fas fa-cogs "></i></span>Automatic</p>
              <p><span><i class="fas fa-gas-pump "></i></span>50</p>
            </div>
          </div>
        </div>
         <!--for the single item--->
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
            Looking For Property
          </h4>
          <p class="question-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur.</p>
        </div>
      </div>
      <!--single qustion two--->
      <div class="col-10 mx-auto my-2 col-md-6 d-flex justify-content-between question-yellow">
        <a href="#" class="question-icon mr-3">
          <i class="fas fa-dollar-sign fa-3x"></i>
        </a>
        <div class="question-text w-75">
          <h4 class="question-title text-capitalize font-weight-bold">
            Selling A Property
          </h4>
          <p class="question-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur.</p>
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
     <h1 class="font-weight-bold align-self-center mx-1">Featured</h1>   
      
      <h1 class="section-title-special mx-1">Products</h1>
    </div>
    </div>
   <!--for the section title end---> 
    <div class="row">
      <div class="col-10 mx-auto col-lg-6 featured-info my-3">
        <div class="featured-item my-3 d-flex flex-wrap p-2 text-capitalize align-items-baseline">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Shovel</h5>
          <h5 class="mx-1">Model</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Shovel</h5>
          <h5 class="mx-1">Model</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Shovel</h5>
          <h5 class="mx-1">Model</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Shovel</h5>
          <h5 class="mx-1">Model</h5>
        </div><!--for the single item end--->
        <div class="featured-item my-3 d-flex p-2 text-capitalize align-items-baseline flex-wrap">
          <span class="featured-icon mr-2">
            <i class="fas fa-car"></i>
          </span>
          <h5 class="font-weight-bold mx-1">Shovel</h5>
          <h5 class="mx-1">Model</h5>
        </div><!--for the single item end--->
      </div><!--ends the first column--->
      <div class="col-10 col-lg-6 featured-img align-self-center my-3">
        <div class="img-container">
          <img src="views/img/template/gallpic5.jpg" alt="" class="img-fluid featured-photo">
          <a href="" class="featured-link">
            <i class="fas fa-search fa-3x"></i>
          </a>
        </div>
      </div><!--ends of the second featured--->
    </div>
  </div>
</section>
<!--for the features property end--->
<!--the testmonies from our customers srt--->
<div class="services" id="services">
    <div class="container">
      <h3>Testimonies</h3>
      <h4>We use Testimonies froim thye user to rate the prodycts</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ex, vitae accusantium. A, tempore sapiente saepe doloribus quod?</p>
      <div class="row">
        <div class="col-md-6">
          <div class="services-grid">
            <div class="row">
              <div class="col-sm-12 col-md-2 services-grid1">
                <div class="services-gride-left">
            
                  <img src="views/img/template/gallpic7.png" alt="" class="rounded-circle" height="50px" width="50px">
                </div>
              </div>
              <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                <h5>Mr Daniel Johnston</h5>
              </div>
              <div class="col-sm-12 col-md-6 services-grid2">
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <button type="button" class="btn btn-primary btn-lg more-details" data-toggle="modal" data-target="#exampleModal">
  SEE...
</button>
              </div>          
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="services-grid">
            <div class="row">
              <div class="col-sm-12 col-md-2 services-grid1">
                <div class="services-gride-left">
                  <img src="views/img/template/gallpic7.png" alt="" class="rounded-circle" height="50px" width="50px">
                </div>
              </div>
              <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                <h5>Mr. Daniel Felterist</h5>
              </div>
              <div class="col-sm-12 col-md-6 services-grid2">
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <button type="button" class="btn btn-primary btn-lg more-details" data-toggle="modal" data-target="#exampleModal">
  SEE...
</button>
              </div>          
            </div>
          </div>
        </div>
      </div>
    
  <!--duplicar of the existing one below-->
      <div class="row">
        <div class="col-md-6">
          <div class="services-grid">
            <div class="row">
              <div class="col-sm-12 col-md-2 services-grid1">
                <div class="services-gride-left">
                  
                  <img src="views/img/template/gallpic7.png" alt="" class="rounded-circle" height="50px" width="50px">
                </div>
              </div>
              <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                <h5>Mr. John stephestone</h5>
              </div>
              <div class="col-sm-12 col-md-6 services-grid2">
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <button type="button" class="btn btn-primary btn-lg more-details" data-toggle="modal" data-target="#exampleModal">
  SEE...
</button>
              </div>          
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="services-grid">
            <div class="row">
              <div class="col-sm-12 col-md-2 services-grid1">
                <div class="services-gride-left">
                  <img src="views/img/template/gallpic7.png" alt="" class="rounded-circle" height="50px" width="50px">
                
                </div>
              </div>
              <div class="col-sm-12 col-md-4 services-grid1 servives-grid-right">
                <h5>Joshua kimiches.</h5>
              </div>
              <div class="col-sm-12 col-md-6 services-grid2">
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <p><span><i class="fas fa-long-arrow-alt-right text-danger"></i></span>
                Lorem ipsum dolor sit amet, consectetur.</p>
                <button type="button" class="btn btn-primary btn-lg more-details" data-toggle="modal" data-target="#exampleModal">
 SEE...
</button>
              </div>          
            </div>
          </div>
        </div>
      </div>
      </div>
    </div><!--container combined hear...-->
<!--the testmonies from our customers end--->
<!---the footer section srt--->
<!--footer goes hear srt-->
  <footer id="footer">
    <div class="container">
      <div class="row">
      <div class="col-md-4 three-col">
        <h4>Infor</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <form action="">
          <input type="email"><button class="btn1"><i class="fas fa-envelope-open"></i></button>
        </form>
      </div>
      <div class="col-md-4 mid-row">
        <h4>Follow Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="special-icon">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-google-plus-g"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div> 
      <div class="col-md-4 contact">
        <h4>Office</h4>
        <p><i class="fas fa-map-marker-alt design"></i>Karatina <span class="number">0100</span></p>
        <p><i class="fas fa-phone design"></i> Kenya call<span class="number"> (254) 774259319</span></p>
        <p><i class="fas fa-envelope-open design"></i><span class="number"><a href="mailto:@jukalia.com" class="infor"> jukalia@gmail.com</a></span></p>
      </div>
    </div>
    </div>
  </footer>
<!---the footer section end--->

	<!--for the inclution of the javaScript Contents--->
		<!--thejsquery, fontawesome, bootstrapjs,below hear-->
	 
	<script src="views/js/all.js"></script><!--WebIcons-->
<script src="views/js/bootstrapjquery.js"></script><!--jquerywork-->
  <script src="views/js/bootstrap.js"></script><!--bootstrapwork-->
  <script type="text/javascript" src="views/js/main.js"></script><!--myjs-->
</body>
</html>