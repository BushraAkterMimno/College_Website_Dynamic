<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery-College Website</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
  <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
  <!-- wow -->
  <link rel="stylesheet" href="../css/animate.css">


  <!-- wow -->
  <script src="../js/wow.js"></script>
  <script>
  new WOW().init();
  </script>

    <style>
        /* menu */

.header{
    padding-bottom: 30px;
    padding-top: 30px;
    color: white;
    background-color: #b29ae1;
    position: fixed;
    z-index: 99999;
    top: -25px;
    width: 1400px;
}

.logo{
    float: left;
    padding-left: 50px;
    padding-top: 25px;
}

.name{
    margin-top: 40px;
    float: left;
    font-size: 20px;
}

.name a{
    text-decoration: none;
    color: white;
}

#header{
    background-color: #b29ae1;
    padding:15px;
    border-bottom: 5px solid #b29ae1;
}

#header h2{
    color: #FFFFF1;
    font-family: georgia;
}

#header p{
    color: white;
    font-family: Georgia;
}

.padding{
    padding-left: 20px;
}

#nav{
    background-color: #b29ae1;
    height: 36px;
    padding-top: 35px;
}

#nav ul{
    background-color: #fff;
    list-style-type: none;
}

#nav ul li{
    float: left;
}

#nav ul li:last-child{
    border: none;
}

#nav ul li a{
    text-decoration: none;
    color: white;
    display: block;
    padding: 10px 20px;
    font-family: arial;
}

#nav ul li a:hover{
    color: #827159;
}

#nav ul li{
    position: relative;
}

#nav ul li ul{
    position: absolute;
    left: -99999px;
}

#nav ul li ul a{
    color: black;
}

#nav ul li:hover ul{
    left: 0;
}

#nav ul li li:first-child{
    border-top: 1px solid #1a0e71;
}

#nav ul .dropdown{
    width: 900px;
    color: black;
    height: 600px;
}

#nav ul li li{
    float: none;
    border-right: none;
    border-bottom: 1px solid #1a0e71;
    width: 200px;
}

.button{
    margin-top: 40px;
    margin-left: 10px;
    background-color: transparent;
}

.modal h1{
    color: black;
}

.modal a{
    text-decoration: none;
    font-size: 21px;
    padding-left: 50px;
}

body{
    font-family: 'Open Sans', sans-serif;
}

        .min{
display: block;
    background-color: gainsboro;
    width: 1400px;
    margin: 0 auto;
}
.main{
    
    display: block;
    
}

.img{
    margin-top: 130px;
}

.main marquee{
    padding-top: 200px;
    color: white;
    text-shadow:5px 5px 5px black; 
}

.main p{
    font-size: 40px;
    color: white;
    text-shadow:5px 5px 5px black; 
    padding-top: 100px;
}

/* img */

.lb-loader,.lightbox{text-align:center;line-height:0}body.lb-disable-scrolling{overflow:hidden}.lightboxOverlay{position:absolute;top:0;left:0;z-index:9999;background-color:#000;opacity:.8;display:none}.lightbox{position:absolute;left:0;width:100%;z-index:10000;font-weight:400;outline:0}.lightbox .lb-image{display:block;height:auto;max-width:inherit;max-height:none;border-radius:3px;border:4px solid #fff}.lightbox a img{border:none}.lb-outerContainer{position:relative;width:250px;height:250px;margin:0 auto;border-radius:4px;background-color:#fff}.lb-loader,.lb-nav{position:absolute;left:0}.lb-outerContainer:after{content:"";display:table;clear:both}.lb-loader{top:43%;height:25%;width:100%}.lb-cancel{display:block;width:32px;height:32px;margin:0 auto;background:url(../images/loading.gif) no-repeat}.lb-nav{top:0;height:100%;width:100%;z-index:10}.lb-container>.nav{left:0}.lb-nav a{outline:0;background-image:url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)}.lb-next,.lb-prev{height:100%;cursor:pointer;display:block}.lb-nav a.lb-prev{width:34%;left:0;float:left;background:url(../images/prev.png) left 48% no-repeat;opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-prev:hover{opacity:1}.lb-nav a.lb-next{width:64%;right:0;float:right;background:url(../images/next.png) right 48% no-repeat;opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-next:hover{opacity:1}.lb-dataContainer{margin:0 auto;padding-top:5px;width:100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px}.lb-dataContainer:after{content:"";display:table;clear:both}.lb-data{padding:0 4px;color:#ccc}.lb-data .lb-details{width:85%;float:left;text-align:left;line-height:1.1em}.lb-data .lb-caption{font-size:13px;font-weight:700;line-height:1em}.lb-data .lb-caption a{color:#4ae}.lb-data .lb-number{display:block;clear:left;padding-bottom:1em;font-size:12px;color:#999}.lb-data .lb-close{display:block;float:right;width:30px;height:30px;background:url(../images/close.png) top right no-repeat;text-align:right;outline:0;opacity:.7;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s}.lb-data .lb-close:hover{cursor:pointer;opacity:1}

.gallery{
    padding-left: 70px;
    padding-top: 50px;
    padding-bottom: 50px;
    background-color: #e3dcf5;
}

.gallery h2{
    text-align: center;
    color: #b29ae1;
    padding-bottom: 10px;
}


/* video */

.video{
    padding-top: 50px;
    padding-bottom: 20px;
}

.video h2{
    text-align: center;
    color: #b29ae1;
}

 .video:hover {
            transform: scale(1.03);
        }

         /* footer */

.footer{
    background-color: #b29ae1;
    color: darkslateblue;
    padding-top: 50px;
    margin-top: 50px;
}

.footer a{
    text-decoration: none;
    color: darkslateblue;
}

.footer .about_padding{
    padding-left: 50px;
}

.footer .page_padding{
    padding-left: 200px;
}

.footer .social_padding{
    padding-left: 200px;
}

.footer .media{
    font-size: 30px;
    padding-left: 10px;
}

.fa-facebook-f{
    color: blue;
    padding-top: 10px;
}

.fa-x-twitter{
    padding-top: 10px;
}

.footer img{
    padding-bottom: 10px;
    padding-left: 5px;
}

.fa-youtube{
    color: red;
    padding-top: 20px;
}

.footer2 p{
    padding-left: 100px;
}

.footer2 .right{
    padding-left: 800px;
}

.footer2{
    padding-bottom: 10px;
}

 

    </style>
    </head>
    <body>
        <div class="min">

            <!-- menu start -->

        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="wow bounceInUp logo logo" data-wow-duration="2s">
                            <a href="../home.html"><img src="../img/logo/menu-logo.png" height="70px" width="70px"></a>
                        </div>
                        <div class="name">
                            <strong><p><a href="../home.html">BHRS COLLEGE</a></p></strong>
                        </div>
                        <div id="nav">
                            <ul>
                                <li class="padding"><a href="../home.html">Home</a></li>
                                <li><a href="#">About Us &raquo;</a>
                                    <ul>
                                        <li><a href="breif-history.html">Brief History</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Accademic &raquo;</a>
                                    <ul>
                                        <li><a href="../accademic/Degree (Pass).html">DEGREE (PASS)</a></li>
                                        <li><a href="../accademic/Honours.html">HONORS</a></li>
                                        <li><a href="../accademic/master.html">MASTER'S</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Co-Curricolam &raquo;</a>
                                    <ul>
                                        <li><a href="../co-curricolam/hostel info.html">Hostel Information</a></li>
                                        <li><a href="../co-curricolam/librery info.html">Library Information</a></li>
                                        <li><a href="../co-curricolam/bncc.html">BNCC</a></li>
                                        <li><a href="../co-curricolam/debate club.html">Debating Society</a></li>
                                        <li><a href="../co-curricolam/computer lab.html">Computer Lab</a></li>
                                        <li><a href="../co-curricolam/science lab.html">Science lab</a></li>
                                    </ul>
                            </li>
                                <li><a href="../faculty.html">Faculty</a></li>
                                <li><a href="../notice.html">Notice</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            APPLY NOW
                          </button>

                          <!-- Modal -->
                          <div class="modal fade modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Apply Now</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfe0HzmSoscSLtcJtWcbGOdaVCEzeJqzbdsbhAJUX-D5RYp_A/viewform"><input type="radio">Degree</a><br>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfe0HzmSoscSLtcJtWcbGOdaVCEzeJqzbdsbhAJUX-D5RYp_A/viewform"><input type="radio">Honour's</a><br>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfe0HzmSoscSLtcJtWcbGOdaVCEzeJqzbdsbhAJUX-D5RYp_A/viewform"><input type="radio">Master's</a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- menu end -->


        <section id="home">
        <div class="main">
         <div class="row">
            <div class="col-md-12">
              <div class="img" style="background-image: url('../img/about-us/gellary/bg.webp'); background-size: cover; background-position: center; height: 500px; width: auto">
                <marquee><h1>WLLCOME TO </h1>
                  <h2> BHRS UNVIRESTY</h2></marquee>
                  <h2><p>Gallery</p></h2>
                  
    </div>
</div>
</div>
<br>
</div>
</section>


<!-- gallery section start -->

<section class="gallery">
    <h2><b><u>PHOTO ALBUM</u></b></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (1).jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (1).jpg" alt=""/></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (2).jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (2).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (3).jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (3).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (4).jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (4).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (5).jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (5).jpeg" alt=""/></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (7).jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (7).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (8).jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (8).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (9).jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (9).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (10).jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (10).jpg" alt=""/></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (11).jpg" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (11).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (12).jpg" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (12).jpg" alt="" /></a>
                <a class="example-image-link" href="../img/about-us/gellary/gellary-pic (13).jpg" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image" height="300px" width="300px" src="../img/about-us/gellary/gellary-pic (13).jpg" alt="" /></a>
            </div>
        </div>
    </div>
  </section>

  <!-- gallery section end -->
            


  <!-- video section start -->
            
         <section class="video">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><b><u>Video</u></b></h2>
                </div>
            </div>
          <div class="row">
           <div class="col-md-12">
            <div class="video">
                <iframe width="1300" height="634" src="https://www.youtube.com/embed/Tsf5MphHSWA" title="Campus Tour | Marshall University" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           
           
           </div>
           </div>
              
           
          </div>
          </div>
         </section>

         <!-- video section end -->



          <!-- footer start -->

<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 about_padding">
                <h3>[About Us]</h3>
                <p>Unlock limitless possibilities and pave the way for your
                    <br>
                    extraordinary future as it begins right here, right now.</p>
            </div>
            <div class="col-md-4 page_padding">
                <h3>[Pages]</h3>
                <a href="#"><p><i class="fa-solid fa-caret-right"></i>  Home</p></a>
                <a href="#"><p><i class="fa-solid fa-caret-right"></i>  About Us</p></a>
                <a href="#"><p><i class="fa-solid fa-caret-right"></i>  Accademic</p></a>
                <a href="#"><p><i class="fa-solid fa-caret-right"></i>  Co-Corricolam</p></a>
            </div>
            <div class="col-md-4 social_padding">
                <h3>[Social Media]</h3>
                <a href="#"><i class="fa-brands fa-facebook-f media"></i></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter media"></i></a>
                <a href="#"><img src="../img/logo/insta-logo.png" height="40px" width="40px"></a>
                <a href="#"><i class="fa-brands fa-youtube media"></i></a>
            </div>
        </div>
    </div>
    <hr>
        <div class="footer2">
            <p>© 2024 BHRS COLLEGE <span class="right">Developed by <strong>BHRS</strong></span></p>
        </div>
  </section>
  
  <!-- footer end -->
        </div>

        <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
    
            
  