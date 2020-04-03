<html>
  <head>
<title>
  home
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <style>
   
   html,
   body
      {
        height:100%;
        padding:0px;
        margin:0px;
      background-image: url(price.jpg);
       background-size:cover;
       background-repeat:no-repeat;
      }/* style for footer*/
      .footer{
          background: #303036;
          color: #d3d3d3;
          height:240px;

      }
      .h2{

      }
      .footer .footer-bottom{
        background: #343a40;
        color:#686868;
        height:30px;
        text-align:center;
        position:absolute;
        bottom:0px;
        left: 0px;
        width:100%;
        padding-top:3px;

      }
      .footer .footer-content{
        border:1px;
        margin-left:10px;
      }
      .h1{
        margin-left:30px;
      }
      .h3{
        font-size:20px;
      }
      .page-wrapper{
        min-height:100%;
      }

     </style>


  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
      <a href="#" class="navbar-brand ">UnScrap</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#coll">
      <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="coll">
      <un class="navbar-nav">
      <li class="nav-item active">
      <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
      <a href="aboutus.html" class="nav-link">About Us</a>
      </li>
      <li class="nav-item">
      <a href="login.php" class="nav-link">Login or Signup</a>
      </li>
      <!-- </un>
      <un class="navbar-justify-content-end"> -->
      <li class="nav-item ">
      <a href="login.php" class="nav-link">Sign Up</a>
      </li>
  
      </un>
      <form class="form-inline my-2 my-lg-0 text-center">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Us" aria-label="Search">
        <button class="btn  btn-outline-white my-2 my-sm-0" type="submit">Search</button>
      </form>
      </div>
      </nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="min.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
      <style> 
       .carousel-item{
        height:50vh;
        object-fit: contain;
        
      }</style>

    </div>
    <div class="carousel-item">
      <img src="green.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-20" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev w-50 " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next w-50" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="card-deck">
  <div class="card bg-primary">
  <div class="card-header text-center">
  <p class="card-text ">Paper Waste</p>
  </div>
  <div class="card-body text-center">
  <p class="card-text">Chlorine-based bleaches are used during production which results in toxic materials being released which is 25 times more toxic than CO2.</p>
  </div>
  <div class="card-footer text-center">
  <a href="#" class="btn btn-secondary text-white stretched-link">Tap to check rate!</a>
  </div>
  </div>
  <div class="card bg-success">
  <div class="card-header text-center">
  <p class="card-text">Glass Wastes</p>
  </div>
  <div class="card-body text-center">
  <p class="card-text">Glass recycling is the processing of waste glass into usable products. Glass that is crushed and ready to be remelted is called cullet.</p>
  </div>
  <div class="card-footer text-center">
  <a href="#" class="btn btn-secondary text-white stretched-link">Tap to check rate!</a>
  </div>
  </div>
  <div class="card bg-danger">
  <div class="card-header text-center">
  <p class="card-text">Metal Wastes</p>
  </div>
  <div class="card-body text-center">
  <p class="card-text">Biodegradable waste such as vegetable matter, coal ash, animal dung, sewage sludge, bones and other organic material is used as fertilizer</p>
  </div>
  <div class="card-footer text-center">
  <a href="#" class="btn btn-secondary text-white stretched-link">Tap to check rate!</a>
  </div>
  </div>
  <div class="card bg-warning">
  <div class="card-header text-center">
  <p class="card-text">Plastic Wastes</p>
  </div>
  <div class="card-body text-center">
  <p class="card-text">Plastic debris, laced with chemicals and often ingested by marine animals, can injure or poison wildlife.</p>
  </div>
  <div class="card-footer text-center">
  <a href="#" class="btn btn-secondary text-white stretched-link">Tap to check rate!</a>
  </div>
  </div>
  </div>
<br>
<br>
<br>
<br>
<!--footer-->
<div class="footer">
  <div class="footer-content">
    <h2>UnScrap</h2>
  <p>contact us:</p>
      
    <p>
  
      <p>E-mail: nirbhayanand25@gmail.com; 
        shubhamkumartata16@gmail.com </p>
      <p>Phn no: 8789944709</p>
            

<div class="footer-section about"></div>
<div class="footer-section links"></div>
<div classs="footer-section contact us"></div>



<!--footer-->
</div>
  </body>
</html>