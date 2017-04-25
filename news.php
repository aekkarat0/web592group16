<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
	  <li data-target="#myCarousel" data-slide-to="6"></li>
	  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/1.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Z900</h3>
          <p></p>
        </div>
      </div>
  
	  <div class="item">
        <img src="img/2.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Bolt C-Spec</h3>
          <p></p>
        </div>
      </div>
	  
	  <div class="item">
        <img src="img/3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>KRRC</h3>
          <p></p>
        </div>
      </div>
	
      <div class="item">
        <img src="img/4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>MT-03</h3>
          <p></p>
        </div>
      </div>
  
	  <div class="item">
        <img src="img/5.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>R3</h3>
          <p></p>
        </div>
      </div>
	  
	  <div class="item">
        <img src="img/6.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>FZ-09</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
	  
	  <div class="item">
        <img src="img/7.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>SR 400</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
