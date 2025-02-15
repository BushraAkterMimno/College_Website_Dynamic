<?php
require 'admin/db.php';
?>

<?php
$sql = "SELECT * FROM teachers_information WHERE Pub_info=1";
$teacher_data= mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Page - BHRS College</title>
    <link href="css/all.min.css" type="text/css" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>
    <!-- wow -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- my css -->
    <link href="css/style-faculty.css" type="text/css" rel="stylesheet">

    <!-- wow -->
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
    
    <style>
        .scrollToTopBtn{
            
            bottom: 20px;
            right: 520px;
            background-image: #333;
            color: gray;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: none;
            font-size: 18px;
        }
        button.scroll_btn{
            background-color: gray;
            margin-left: 1600px
        }
        
    </style>
    
    
    </head>
    <body>
        <div class="main">
                    
        <!-- menu start -->

        <?php include("include/navbar.php") ?>

        <!-- menu end -->

        <!-- bg section start -->
         
            <section id="home">
                <div class="min">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="img" style="background-image: url('img/faculty-img/bgc.jpeg'); background-size: cover; background-position: center; height: 440px; width: auto">
                                <h1>FACULTY</h1>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </section>

            <!-- bg section end -->

            <!-- Professor section start -->

            <section>
                <div class="container">
                    <div class=" List">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="Professor">
                                    <h2>Professor</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <section>
                <div class="faculty-container">
                <?php while($show_data=mysqli_fetch_assoc($teacher_data)) { ?>
                    <?php $sql = "SELECT * FROM teachers_information WHERE Designation=Professor"; ?>
                    <div class="faculty-card">
                        <img src="<?php echo $show_data['image']; ?>" alt="Professor of Accounting">
                            <h3><?php echo $show_data['Name']; ?></h3>
                            <p>(<?php echo $show_data['Description']; ?>)</p>
                            <div class="social-link">
                                <a href="<?php echo $show_data['FB_Link']; ?>"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                                <a href="<?php echo $show_data['X_Link']; ?>"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                                <a href="<?php echo $show_data['Mobile_Number']; ?>"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                                <p><?php echo $show_data['Designation']; ?></p>
                            </div>
                    </div>
            
                    <!-- <div class="faculty-card">
                        <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                        <h3>Professor Md. Khairul Bashar Majumdar.</h3>
                        <p>(Attached Officer)</p>
                        <div class="social-link">
                            <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                            <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                            <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                            <p>Prof. of Accounting</p>
                        </div>
                    </div>
                    <div class="faculty-card">
                        <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                        <h3>Professor Abu Saleh Mohammad Naeim Uddin.</h3>
                        <p>(Attached Officer)</p>
                        <div class="social-link">
                            <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                            <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                            <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                            <p>Prof. of Management</p>
                        </div>
                    </div> -->
                    <?php } ?>
                </div>
            </section>

            <section>
                <div class="faculty-container">
                    <div class="faculty-card">
                        <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                        <h3>Professor Md. Khaled Hossain Khan.</h3>
                        <p>(Attached Officer)</p>
                        <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Prof. of Management</p>
                    </div>
                </div>
            
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Professor Md. Monir Ahamad.</h3>
                    <p>(Attached Officer)</p>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Prof. of Mathematics</p>
                    </div>
                </div>
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-f.png" alt="Professor of Accounting">
                    <h3>Professor Dilara Akter Khan.</h3>
                    <p>(Attached Officer)</p>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" ></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" ></a>
                        <p>Prof. of Botany</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Professor section end -->

        <!-- Associate Professors section start -->
        
        <section>
            <div class="container">
               <div class="row">
                    <div class="col-md-4">
                        <div class="Associate-Professors">
                            <h2>Associate Professors</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="faculty-container">
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Associate Professor Noor Mohammad.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assoc Prof. of Bangla</p>
                    </div>
                </div>
            
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Associate Professor Mohammad Abu Hanif.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assoc Prof. of English</p>
                    </div>
                </div>
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Associate Professor Mirza Galib Rumi.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px; border-radius: 120%" alt=""></a>
                        <p>Assoc Prof. of History</p>
                    </div>
                </div>
            </div>
    
            <button id="scrollToTopBtn" class="scroll_btn">&#9650;</button>

            <script>
                const scrollToTopBtn = document.getElementById("scrollToTopBtn");
                window.onscroll=function(){
                    if
                        (document.body.scrollTop >20 || document.documentElement.scrollTop > 20){
                        
                    scrollToTopBtn.style.display="black";
                    }
                    else{
                        scrollToTopBtn.style.display="none";
                    }
                };
                scrollToTopBtn.addEventListener("click", function(){
                    window.scrollTo({
                        top:0,
                        left:100,
                        behavior:"smooth"
                    });
                });
            </script>
        </section>
            
        <section>
            <div class="faculty-container">
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Associate Professor Md. Mizanur Rahman.</h3>
                    <p>(Attached Officer)</p>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assoc Prof. of Islamic History</p>
                    </div>
                </div>
            
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Associate Professor Md. Ramjan Ali.</h3>
                    <p>(Attached Officer)</p>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assoc Prof. of Islamic History</p>
                    </div>
                </div>
                <div class="faculty-card">
                    <img src="img//faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Associate Professor Dr. Muhammad Makhsudur Rahman.</h3>
                    <p>(Attached Officer)</p>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" ></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" ></a>
                        <p>Assoc Prof. of Islamic History</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Associate Professors section end -->

        <!-- Assistant Professors section start -->
        
        <section >
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="Assistant-Professors">
                            <h2> Assistant Professors</h2>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <section>
            <div class="faculty-container">
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Mohammad Abdur Rouf Khan.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of Bangla</p>
                    </div>
                </div>
            
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Mohammad Shariful Islam.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of Bangla</p>
                    </div>
                </div>
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Md. Monir Alam.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of Bangla</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="faculty-container">
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Mohammad Zahir Uddin.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of English</p>
                    </div>
                </div>
            
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Md. Najmul Hasan Saleh.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of English</p>
                    </div>
                </div>
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Md. Monir Alam.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" ></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" ></a>
                        <p>Assist. Prof. of English</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Assistant Professors section end -->

        <br>
        <br>

        <!-- Lecturers section start -->
        
        <section >
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="Lecturers ">
                            <h2>Lecturers </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <section>
            <div class="faculty-container">
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Md. Nasir Uddin.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of Philosophy</p>
                    </div>
                </div>
            
                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-f.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Farzana Akter.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of Philosophy</p>
                    </div>
                </div>

                <div class="faculty-card">
                    <img src="img/faculty-img/teacher-f.png" alt="Professor of Accounting">
                    <h3>Assistant Professor Farzana Tasmin.</h3>
                    <div class="social-link">
                        <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                        <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                        <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                        <p>Assist. Prof. of Philosophy</p>
                    </div>
                </div>
            </div>
        </section>

    <section>
        <div class="faculty-container">
            <div class="faculty-card">
                <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                <h3>Assistant Professor Md. Saidul Islam.</h3>
                <div class="social-link">
                    <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                    <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                    <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                    <p>Assist. Prof. of Economics</p>
                </div>
            </div>
            
            <div class="faculty-card">
                <img src="img/faculty-img/teacher-m.png" alt="Professor of Accounting">
                <h3>Assistant Professor Samsul Haque.</h3>
                <div class="social-link">
                    <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"alt=""></a>
                    <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" alt=""></a>
                    <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" alt=""></a>
                    <p>Assist. Prof. of Economics</p>               
                </div>
            </div>

            <div class="faculty-card">
                <img src="img//faculty-img/teacher-m.png" alt="Professor of Accounting">
                <h3>Assistant Professor Mohammad Golam Mostafa.</h3>
                <div class="social-link">
                    <a href="#"><img src="img/faculty-img/facebook.png" style="height:30px; width:35px"></a>
                    <a href="#"><img src="img/faculty-img/x.png" style="height:30px; width:35px" ></a>
                    <a href="#"><img src="img/faculty-img/phone.png" style="height:30px; width:35px" ></a>
                    <p>Assist. Prof. of Political Science</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lecturers section end -->


    <!-- footer start -->

    <?php include("include/footer.php") ?>
  
  <!-- footer end -->
            
        
        </div>


        <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    </body>
</html>
            
