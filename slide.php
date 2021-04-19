
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<style>
    .element {
  display: inline-block;
  background: linear-gradient(180deg,);
  height: 100px;
  width: 100px;
  font-size: 1px;
  padding: 1px;
  color: white;
  margin-right: 5px;
  margin-left: 5px;
  animation: skew 3s infinite;
  transform: skew(20deg);
  animation-direction: alternate;
  opacity: .7;
}

@keyframes skew {
  0% {
    transform: skew(20deg, 20deg);
  }
  100% {
    transform: skew(-20deg, -20deg);
  }
}


body, html {
  height: 100%;
}


body {
  display: flex;
  align-items: center;
  justify-content: center;
}
    
    
    /* card front back */
    :root{
        --primary:blue;
        --secondary:green;
        --dark: #212121;
        --light:#f3f3f3;
    }
    
    *{
        margin: 0;
        padding: 0;
    } 
    
    body{
        font-family:monoserrat, sans-serif;
        width:100%;
        min-height: 100vh;
    }
    .card{
        margin: 100px auto 0;
        width: 400px;
        height: 600px;
    }
    .card_inner{
        width:100%;
        height:100%;
        transition:transform 15;
        transform-style: preserve-3d;
        cursor: pointer;
        position: relative;
    }
    .card_inner.is-flipped{
        transform: rotateY(180deg);
        
    }
    </style>

    <div class="card">
     <div class="card_inner">
        <div class="card_face card_face--front">
          <h2>Developer Card</h2>
         
         </div>
         
        <div class="card_face card_face--back">
         <div class="card_content">
            <div class="card_header">
             <img src="images/ba1.jpg" class="pp" />
             </div>
              <div class="card_body">
                  <h3>javascipt</h3>
               <p>jhj jhdjahdk jhbdhakj sdjhgjsjjd ddjl  sshdjkhdl</p>
             
             </div>
            </div>
         
         </div>
        
        </div>
    
    
    </div>
    
</body>
</html> 
