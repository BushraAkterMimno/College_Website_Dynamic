<?php
require 'admin/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - BHRS College</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- wow -->
     <link rel="stylesheet" href="css/animate.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- wow -->
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>

</head>

<body>
    <div class="main">
        
        <!-- menu start -->

        <?php include("include/navbar.php") ?>

        <!-- menu end -->



        <!-- slider start -->

         <section class="bg">
            <div class="bg_pic">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                      
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/slider/img (1).jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text">
                            <h3><strong>BHRS COLLEGE</strong></h3>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider/img (2).jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text">
                            <h3><strong>BHRS COLLEGE</strong></h3>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider/img (3).jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text">
                            <h3><strong>BHRS COLLEGE</strong></h3>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider/img (4).jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text">
                            <h3><strong>BHRS COLLEGE</strong></h3>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider/img (5).jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text">
                            <h3><strong>BHRS COLLEGE</strong></h3>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider/img (6).jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text">
                            <h3><strong>BHRS COLLEGE</strong></h3>
                          </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                  </div>
            </div>
         </section>

         <!-- slider end -->



         <!-- principal div start -->

         <section class="div" title="Introduction of our Principal">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-principal">
                            <img src="img/teacher-pic/img-principal.png" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text2">
                            <h3>Professor Abu Zafar Mohammad Arif Hossain</h3>
                            <br>
                            <h5>Principal, BHRS College, Brahmanbaria.</h5>
                            <a href="#"><i class="fa-brands fa-facebook" title="Facebook Profile"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter" title="X Profile"></i></i></a>
                            <a href="#"><i class="fa-solid fa-envelope" title="Email Profile"></i></a>
                            <a href="#"><i class="fa-solid fa-phone" title="Phone Number"></i></a>
                            <br>
                            <br>
                            <p>BHRS College is the largest educational institution in the Brahmanbaria district. With more than fifteen thousand students, the institution offers programs in Higher Secondary, Bachelor’s (Pass), Bachelor’s (Honors), Preliminary to Master’s, and Master’s levels.
                                <br>
                                <br>
                                BHRS College is committed to ensuring quality education to achieve sustainable development. Guided by a comprehensive educational philosophy, the institution is dedicated to fostering knowledge, developing human values, and inspiring students to become skilled citizens with an anti-discriminatory mindset.
                                <br>
                                <br>
                                To build a beautiful and prosperous Bangladesh, the college is devoted to expanding technology-based education and nurturing a generation enriched with human values. With its resolute journey,BHRS College holds my heartfelt expectations for a brighter future ahead.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- principal div end -->


         <!-- gallery section start -->

         <section class="gallery" title="Photo Gallery">
            <h2><u>GALLERY</u></h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php $img_sql= mysqli_query($conn,"SELECT * FROM photo LIMIT 4");
                ?>
                <?php while($photo_info=mysqli_fetch_assoc($img_sql)){ ?>
                <a class="example-image-link" href="img/gallery-img/<?php echo $photo_info['photo']; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" height="300px" width="300px" src="img/gallery-img/<?php echo $photo_info['photo']; ?>" alt=""/></a>
                <?php } ?>
                    </div>
                </div>
            </div>
            <p><a href="about/gallery.html">See more...</a></p>
          </section>

          <!-- gallery section end -->



          <!-- notice section start -->

          <section class="notice" title="Notice Board">
            <h1><u>NOTICE BOARD</u></h1>
            <table id="content" border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
                <tr>
                  <td>
                  SERIAL NUMBER 
                  </td>
          
                  <td>
                   Headline
                  </td>
          
                  <td>
                    DATE
                  </td> 
                </tr> 

                <?php
                  $sql = "SELECT * FROM notice LIMIT 3";
                  $notice_data= mysqli_query($conn,$sql);
                ?>
                <?php $i=1; while($show_data=mysqli_fetch_assoc($notice_data)) { ?>

                <tr>
                <td>
                      <h4><?php echo $i++; ?></h4>  
                    </td>
            
                    <td>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          
                            <b><a  target="_blank" href="img/<?php echo $show_data['image']  ?>"><?php echo $show_data['Headline']; ?></a></b>
                       
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                              <div class="panel">
                                <hr>
                                <p><?php echo $show_data['Description']; ?></p> 
                                <p><a href="img/<?php echo $show_data['image']  ?>"><p>Img</p></a></p>
                                <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
            
                 <td>
                      <h4>28 Nov,2024</h4> 
                    </td> 
                </tr>
                <?php } ?>
            </table>



        <!-- notice section end -->



         <!-- map section start -->

         <section class="map" title="Our College Location">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.6872164482384!2d-1.2570928235142602!3d51.75704287187104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sbd!4v1731957086881!5m2!1sen!2sbd" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
         </section>

         <!-- map section end -->



         <!-- footer start -->

         <?php include("include/footer.php") ?>

         <!-- footer end -->


    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>