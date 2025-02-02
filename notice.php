<!DOCTYPE html>
<html>
<head>
<title>Notice Page - BHRS College</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/cdcfc18957.js" crossorigin="anonymous"></script>

    <!-- wow -->
    <link rel="stylesheet" href="css/animate.css">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- wow -->
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
    
    <style>
        body{
          background-image: linear-gradient(to right,#DFF2EB,#aed8ef);
          margin-bottom: 20px;
          font-family: 'Open Sans', sans-serif;
        } 

        .main{
          margin: 0 auto;
          display: block;
          width: 1400px;
}

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
/* menu end */
        
        table, th, td {
          border:1px solid black;
        } 

        h1 {
          text-align: center;
          color: rgb(250, 248, 251);
          margin-top:400px;
          text-emphasis-color: rgb(250, 248, 251);
          text-emphasis-position: under;
          text-emphasis-style:sesame;
        }
        
        h2,h4{
          text-align: center;
          color: darkslateblue;
        }
        
        .head{
          background-image: url(img/notice/Harvard-University.jpg);
          background-size: cover;
          height: 500px;
          background-repeat:no-repeat;
        }
        
        /* Style the buttons that are used to open and close the accordion panel */

        .accordion {
          /* background-color: #dacef0; */
          color:#C9E6F0;
          cursor:grab;
          padding:10px;
          width: 100%;
          text-align:left;
          border: none;
          outline: none;
          transition: 0.4s;
          color: darkslateblue;
          font-size:20px; 
          font-weight: 500;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .accordion:hover {
          background-color:#7BD3EA;
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
          padding:18px;
          background-color:#80C4E9;
          display: none;
          overflow: auto;
          color: darkslateblue;
          font-size:20px; 
          font-weight: 500;
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
  <div class="main">

    <!-- menu start -->

        <?php include("include/navbar.php") ?>

        <!-- menu end -->

        
     <section class="head1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="head">
                <marquee class="marquee"><h1>NOTICE BOARD </h1></marquee>
              </div>  
            </div>
          </div>
        </div>   
     </section>
     <br>
     <br>
    
    <section class="middle1">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>SERIAL NUMBER</h4> 
                </td>
        
                <td class="col-md-7">
                  <h2>BRIEF</h2>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>DATE</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>

     
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>1</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>2</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>3</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>4</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>5</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>6</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>7</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>8</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
                  <h4>9</h4>  
                </td>
        
                <td class="col-md-7">
                  <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
                  <div class="panel">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
                    <p><a href="img/notice/notice.png"><p>Img</p></a></p>
                    <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
                  </div>
                </td>
        
                <!-- <td class="col-md-3">
                  <h4>28 Nov,2024</h4> 
                </td> -->
              </tr>           
            </thead>
          </table>
        </div>
      </div>   
    </section>
    
    
    
    
    <section class="middle2">
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <tr>
                <td class="col-md-2">
      <h4>10</h4>  
        </td>
        
        <td class="col-md-7">
            <button class="accordion">Notice regarding extension of time for filling the Masters Final Year Examination Form 2022</button>
            <div class="panel">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores necessitatibus nihil eaque cupiditate repudiandae ipsam, facilis veritatis dolores ipsum cumque recusandae quos ipsa pariatur illo labore quidem et at autem?</p> 
              <p><a href="img/notice/notice.png"><p>Img</p></a></p>
              <a href="Notice-Template.pdf"><button class="btn btn-danger" target="blank" downloaded>Download</button></a>
            </div>
          </td>
        
          <!-- <td class="col-md-3">
            <h4>28 Nov,2024</h4> 
          </td> -->
        </tr>           
      </thead>
    </table>
  </div>
</div>   
</section>

<!-- footer start -->

<?php include("include/footer.php") ?>

<!-- footer end -->
    
    
    
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
  </div>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
</body>

</html>
