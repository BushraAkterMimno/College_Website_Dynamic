<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree Page - BHRS College</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    background-color: gainsboro;
    font-family: 'Open Sans', sans-serif;
}

        .min{
            margin: 0 auto;
            display: block;
            width: 1400px;
            background-color: gainsboro;
        }

        .main{
            display: block;
        }
        
        .img h1{
            padding-top: 190px;
            color: white;
            text-align: center;
            margin-right: 30px;
            font-size: 50px;
        }

        .img h2 {
            padding-bottom: 200px;
            color: white;
            text-align: center;
            margin-right: 30px;
            font-size: 50px;
        }
        
        .img h2 p {
            text-align: justify;
            color: white;
            font-size: 30px;
            padding-top: 240px;
        }

        .Academics{
            text-align: center;
            background-color:#3D3256;
            width:1300px;
            height: 70px;
            padding-top: 10px;
            color: white;
            border-radius: 5px;
        }

        .card{
            height: 700px;
        }

        .card-body{
            width: auto;
            height: 800px;
        }

        .pic{
            background-color: bisque;
        }
    
        .img p{
            font-size:40px;
            color: aliceblue;
            font-weight: 700;
            text-shadow: 5px 5px 5px black;
        }

        marquee{
            text-shadow: 5px 5px 5px black;
        }

        .gradient-bg-1 { 
            background-repeat:no-repeat; 
            background-size:cover; 
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
                                        <li><a href="../about/breif-history.html">Brief History</a></li>
                                        <li><a href="../about/gallery.html">Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Accademic &raquo;</a>
                                    <ul>
                                        <li><a href="Degree (Pass).html">DEGREE (PASS)</a></li>
                                        <li><a href="Honours.html">HONORS</a></li>
                                        <li><a href="master.html">MASTER'S</a></li>
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
              <div class="img" style="background-image: url('../img/accademic/bg.jpg'); background-size: cover; background-position: center; height: 640px; width: auto">
               <marquee><h1>WLLCOME TO </h1><h2> BHRS UNVIRESTY</h2></marquee>  
                 <div class="title-area gradient-bg-1">
                    <p> <span class="special-break"></span><span class="typer" id="main" data-words="Degree (Pass). Programme" data-colors="white" data-delay="100" data-deleteDelay="1000"></span><span class="cursor" data-owner="main"></span></p>
                    <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
                </div>
            </div>
        </div>
    </div>
   <br>
        </div>
            </section>
 
  <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="Academics">
              <h2>Academics Programme</h2>
              </div>
              </div>          
          </div>
       </div>  
            </section>
         <br>
    <section>
        <div class="ng-scope">
    <div class="container SidePadding">
        <div class="row">
         <div class="col-md-4">
                <img class="img" style="height: 300px; width: 100%;object-fit: cover;" src="../img/accademic/deg1.jpg">
            </div>
            <div class="col-md-8">
                <img class="img" style="height: 300px; width: 100%;object-fit: cover;" src="../img/accademic/deg2.jfif">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div align="left" style="padding-left: 20px">
                            <p style="font-size: 26px"> At The Aacademic programs </p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="" class="acdemicsMenuStyle newA  linkStyle list-group-item list-group-item-action" ng-click="findCategoryWise(2)">Academic Calendars</a>
                            <a href="" class="acdemicsMenuStyle newA  linkStyle list-group-item list-group-item-action" ng-click="findCategoryWise(3)">Degree (Pass).BA</a>
                            <a href="" class="acdemicsMenuStyle newA  linkStyle list-group-item list-group-item-action" ng-click="findCategoryWise(4)">Degree (Pass).B.S.S </a>
                            <a href="" class="acdemicsMenuStyle newA  linkStyle list-group-item list-group-item-action" ng-click="findCategoryWise(7)">Degree (Pass).B.Sc</a>
                            
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div style="min-height: 800px;">
                            <!--<hr style="border-bottom: #9c073e 2px solid" />-->
                            <div align="justify">
                                <md-content style="padding: 20px !important" class="shadow-lg p-3 mb-5 bg-white rounded _md">

                                    <!-- ngIf: categoryId ===1 --><div ng-if="categoryId ===1" class="ng-scope">
                                        <h1><p class="buetThemeColor">Degree (Pass). Programme </p><hr></h1>
                                        <p>The Preliminary to Master's and Master's Final academic programs of BHRS College. Prepare the students for the demands and opportunities of the new century and empower them to become innovators and leaders. It challenges them academically to maximize their potential  and helps them to become top professionals in their respective fields. </p>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card1">
                                                    <div class="container">
                                                        <h5 style="color: #bf1430">639</h5>
                                                        <p style="font-size: 14px"><b>BA students</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card1">
                                                    <div class="container">
                                                        <h5 style="color: #bf1430">566</h5>
                                                        <p style="font-size: 14px"><b>B.S.S students</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card1">
                                                    <div class="container">
                                                        <h5 style="color: #bf1430">666</h5>
                                                        <p style="font-size: 14px"><b>  B.Sc Student's   </b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <p>We offer over 12 undergraduate and 66 graduate programs at Brahmanbria Govt.collage. Working with our top-ranked research faculty, you will have the opportunity to learn the latest developments in whatever you study. Whether you are interested in engineering innovation or the next breakthrough technology, you can find it here.</p>
                                    </div>
                                </md-content>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
    </div>
</div>
    </section>


     <!-- footer start -->

     <?php include("../php/include/footer.php") ?>
  
  <!-- footer end -->
    
  </div>
      
    <!-- typer -->
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
 </body>
</html>
