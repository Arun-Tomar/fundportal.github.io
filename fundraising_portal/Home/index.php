<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="with-device-width, initial-scale=1.0">
    <title>Samagra Foundation</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
  <style>
    *{
  margin: 0;
  padding: 0;
  font-family: 'Oswald', sans-serif;
}

.header{
  min-height: 100vh;
  width: 100%;
  background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9, 30, 0.7)),url(images/helping-hand.jpeg);
  background-position: center;
  background-size: cover;
  position: relative;
}

nav{
  display: flex;
  padding: 2% 6%;
  justify-content: space-between;
  align-items: center;
}

nav img{
  width: 50px;
}
 .nav-links{
   flex: 1;
   text-align: right;
 }
 .nav-links ul li{
   list-style: none;
   display: inline-block;
   padding: 8px 12px;
   position: relative;

 }
 .nav-links ul li a{
   color: #fff;
   text-decoration: none;
   font-size: 13px;
 }
.nav-links ul li::after{
  content: '';
  width: 0%;
  height: 2px;
  background: #fff;
  display: block;
  margin: auto;

}
.nav-links ul li:hover::after{
  content: '';
  width:100%;
}

.text-book{
  width: 90%;
  color: #fff;
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
  text-align: center;

}
.text-book h1{
  font-size: 62px;
}

.text-book p{
  margin: 10px 0px 40px;
  font-size: 14px;
  color: #fff;
}

.hero-btn{
  display: inline-block;
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  padding: 12px 34px;
  font-size: 13px;
  background: transparent;
  position: relative;
  cursor: pointer;

}
.hero-btn1{
  display: inline-block;
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  padding: 12px 54px;
  font-size: 13px;
  background: transparent;
  position: relative;
  cursor: pointer;

}
.hero-btn:hover{
  border: 1px solid black;
  background: black;
  transition: 1s;

}
.hero-btn1:hover{
  border: 1px solid black;
  background: black;
  transition: 1s;

}
nav .fa{
  display: none;
}
@media (max-width:700px) {
  .text-book h1{
    font-size: 20px;
}
.nav-links ul li{
  display: block;

}
.nav-links{
  position: absolute;
  background: black;
  height: 100vh;
  width: 200px;
  top:0;
  right:-250px;
  text-align: left;
  z-index: 2;
  transition: 1s;
}
nav .fa{
  display: block;
  color: #fff;
  margin:10px;
  font-size: 22px;
  cursor: pointer;
}

.nav-links{
  padding: 30px;

}


}

/*about*/
.about{
  width: 80%;
  margin: auto;
  text-align: center;
  padding-top: 100px;
}

h1{
  font-size: 38px;
  font-weight: 600;
}
p{
  color: #777;
  font-size: 14px;
  font-weight: 300;
  line-height: 22px;
  padding: 10px;
}

.row{
  margin-top: 5%;
  display: flex;
  justify-content: space-between;

}
.about-col{
  flex-basis: 31%;
  background: #fff;
  border-radius: 10px;
  margin-bottom: 5%;
  padding: 20px 12px;
  box-sizing: border-box;
  transition: 0.5s;
}
h3{
  text-align: center;
  font-weight: 600;
  margin: 10px 0;
}
.about-col:hover{
  box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}
@media(max-width:700px){
  .row{
    flex-direction :column;
  }
}

/*testimonial*/
.testimonial{
  margin: 100px auto;
  width: 80%;
  min-height: 50vh;
  background-image: url(images/image3.jpeg);
  background-position: center;
  background-size: cover;
  border-radius:10px;
  animation:slider 15s infinite linear;
  }

  @keyframes slider {
    0%{background-image:url(images/image3.jpeg);}

    50%{background-image:url(images/image4.jpeg);}

    100%{background-image:url(images/image5.jpeg);}
    }

/*donate now*/
.donate{
  margin: 100px auto;
  width: 80%;
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/kids.jpeg);
  background-position: center;
  background-size: cover;
  border-radius:10px;
  text-align: center;
  padding: 100px 0;

}

.donate h1{
  color: #fff;
  margin-bottom: 40px;
  padding: 0;
}

@media(max-width:700px){
  .donate h1{
    font-size: 24px;
  }
}

/*footer*/

.footer{
  width: 100%;
  text-align: center;
  padding: 30px 0px;
}

.footer h4{
  margin-bottom: 25px;
  margin-top: 20px;
  font-weight: 600;
}

    *{
  margin: 0;
  padding: 0;
  font-family: 'Oswald', sans-serif;
}

.header{
  min-height: 100vh;
  width: 100%;
  background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9, 30, 0.7)),url(helping-hand.jpeg);
  background-position: center;
  background-size: cover;
  position: relative;
}

nav{
  display: flex;
  padding: 2% 6%;
  justify-content: space-between;
  align-items: center;
}

nav img{
  width: 50px;
}
 .nav-links{
   flex: 1;
   text-align: right;
 }
 .nav-links ul li{
   list-style: none;
   display: inline-block;
   padding: 8px 12px;
   position: relative;

 }
 .nav-links ul li a{
   color: #fff;
   text-decoration: none;
   font-size: 13px;
 }
.nav-links ul li::after{
  content: '';
  width: 0%;
  height: 2px;
  background: #fff;
  display: block;
  margin: auto;

}
.nav-links ul li:hover::after{
  content: '';
  width:100%;
}

.text-book{
  width: 90%;
  color: #fff;
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
  text-align: center;

}
.text-book h1{
  font-size: 62px;
}

.text-book p{
  margin: 10px 0px 40px;
  font-size: 14px;
  color: #fff;
}

.hero-btn{
  display: inline-block;
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  padding: 12px 34px;
  font-size: 13px;
  background: transparent;
  position: relative;
  cursor: pointer;

}
.hero-btn1{
  display: inline-block;
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  padding: 12px 54px;
  font-size: 13px;
  background: transparent;
  position: relative;
  cursor: pointer;

}
.hero-btn:hover{
  border: 1px solid black;
  background: black;
  transition: 1s;

}
.hero-btn1:hover{
  border: 1px solid black;
  background: black;
  transition: 1s;

}
nav .fa{
  display: none;
}
@media (max-width:700px) {
  .text-book h1{
    font-size: 20px;
}
.nav-links ul li{
  display: block;

}
.nav-links{
  position: absolute;
  background: black;
  height: 100vh;
  width: 200px;
  top:0;
  right:-250px;
  text-align: left;
  z-index: 2;
  transition: 1s;
}
nav .fa{
  display: block;
  color: #fff;
  margin:10px;
  font-size: 22px;
  cursor: pointer;
}

.nav-links{
  padding: 30px;

}


}

/*about*/
.about{
  width: 80%;
  margin: auto;
  text-align: center;
  padding-top: 100px;
}

h1{
  font-size: 38px;
  font-weight: 600;
}
p{
  color: #777;
  font-size: 14px;
  font-weight: 300;
  line-height: 22px;
  padding: 10px;
}

.row{
  margin-top: 5%;
  display: flex;
  justify-content: space-between;

}
.about-col{
  flex-basis: 31%;
  background: #fff;
  border-radius: 10px;
  margin-bottom: 5%;
  padding: 20px 12px;
  box-sizing: border-box;
  transition: 0.5s;
}
h3{
  text-align: center;
  font-weight: 600;
  margin: 10px 0;
}
.about-col:hover{
  box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}
@media(max-width:700px){
  .row{
    flex-direction :column;
  }
}

/*testimonial*/
.testimonial{
  margin: 100px auto;
  width: 80%;
  min-height: 50vh;
  background-image: url(image3.jpeg);
  background-position: center;
  background-size: cover;
  border-radius:10px;
  animation:slider 15s infinite linear;
  }

  @keyframes slider {
    0%{background-image:url(image3.jpeg);}

    50%{background-image:url(image4.jpeg);}

    100%{background-image:url(image5.jpeg);}
    }

/*donate now*/
.donate{
  margin: 100px auto;
  width: 80%;
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(kids.jpeg);
  background-position: center;
  background-size: cover;
  border-radius:10px;
  text-align: center;
  padding: 100px 0;

}

.donate h1{
  color: #fff;
  margin-bottom: 40px;
  padding: 0;
}

@media(max-width:700px){
  .donate h1{
    font-size: 24px;
  }
}

/*footer*/

.footer{
  width: 100%;
  text-align: center;
  padding: 30px 0px;
}

.footer h4{
  margin-bottom: 25px;
  margin-top: 20px;
  font-weight: 600;
}

  </style>

  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.html"><img src="logo.jpeg"</a>
        <div class="nav-links" id="navlinks">
          <i class="fa fa-times-circle" onclick="hidemenu()"></i>

          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="../backend/regis.php">Sign in/ Log in</a></li>
            <li><a href="../backend/donate1.html">NGO listing</a></li>
            <li><a href="">Newsfeed</a></li>

          </ul>
        </div>
        <i class="fa fa-bars" onclick="showmenu()"></i>

      </nav>
  <div class="text-book">
    <h1>Samagra Foundation</h1>
    <p>
      text goes here
    </p>
    <a href="../startfund/fundraiser1.html" class="hero-btn">Start a Fundraiser now</a>
    <a href="../backend/donate1.html" class="hero-btn1">      Donate now      </a>

  </div>

    </section>


<!--about ---------->
<section class="about">
  <h1>What Samagra is about</h1>
  <p>text</p>
  <div class="row">
    <div class="about-col">
      <h3>goal</h3>
      <p>text goes here</p>

    </div>
    <div class="about-col">
      <h3>Vision</h3>
      <p>text goes here</p>
    </div>
    <div class="about-col">
      <h3>Mission</h3>
      <p>text goes here</p>
    </div>
  </div>

</section>
<!--testimonial---------->

<section class="testimonial">
</section>

<!--Donate now ---------->
<section class="donate">
  <h1>Making a donation is the ultimate sign of solidarity. <br />Action speaks louder than words</h1>
  <a href="../backend/donate1.html" class="hero-btn">Donate now</a>

</section>

<!--Footer---------->
<section class="footer">
  <h4>Contact Us</h4>
  <p>text goes here</p>
</section>




<!--Javascript for toggle menu---------->
    <script>
      var navlinks = document.getElementById("navlinks")
      function showmenu(){
        navlinks.style.right ="0"
      }
      function hidemenu(){
        navlinks.style.right ="-250px"
      }
    </script>
  </body>
</html>
