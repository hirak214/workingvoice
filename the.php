<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      
      <meta charset="utf-8">
      <title>RexBooks</title>
      <link rel="icon" href="http://localhost:8080/rexBooks/favicon.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!-- Font Awesome -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link rel="stylesheet" href="styles.css">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Sriracha&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="http://localhost:8080/rexBooks/css/styles.css">
      <link rel="stylesheet" href="http://localhost:8080/rexBooks/css/substyles.css">
      <style type="text/css">
         body {
         background-image: url("http://localhost:8080/rexBooks/images/mainwall.png");
         }
         h3 {
         color: white;
         text-align: center;
         }
         h2 {
         color: #cfcfcf;
         text-align: right;
         }
         table, td, tr {
            color: white;
         }
         h5 {
         color: #b3b3b3;
         font-style: italioc;
         text-align: center;
         }
         /*New Button*/
         .button {
         border-radius: 20px;
         background-color: #fcb045;
         border: none;
         color: #143240;
         text-align: center;
         font-size: 1.4rem;
         padding: 1px;
         width: 40%;
         transition: all 0.5s;
         cursor: pointer;
         padding-left: auto;
         margin-right: auto;
         }
         .button span {
         cursor: pointer;
         display: inline-block;
         position: relative;
         transition: 0.5s;
         }
         .button span:after {
         content: '\00bb';
         position: absolute;
         opacity: 0;
         top: 0;
         right: -20px;
         transition: 0.5s;
         }
         .button:hover span {
         padding-right: 25px;
         }
         .button:hover span:after {
         opacity: 1;
         right: 0;
         }
         .basefooter {
         width: 100%;
         height: 50px;
         background-color: #442727;
         color: wheat;
         font-family: "Comfortaa";
         font-size: 1rem;
         text-align: center;
         }
         .navbar-custom {
         background-color: #442727;
         }
         /* change the brand and text color */
         .navbar-custom .navbar-brand,
         .navbar-custom .navbar-text {
         color: rgba(255,255,255,.8);
         }
         /* change the link color */
         .navbar-custom .navbar-nav .nav-link {
         color: rgba(255,255,255,.5);
         }
         /* change the color of active or hovered links */
         .navbar-custom .nav-item.active .nav-link,
         .navbar-custom .nav-item:hover .nav-link {
         color: wheat;
         font-size: 1.06rem;
         }

         form {
	 padding: 5px;
	 width: 20%;
    height: 5%;
	 /* margin: 0 auto; */
}
 .segment {
	 padding: 32px 0;
	 text-align: center;
}
 button, input {
	 border: 0;
	 outline: 0;
	 font-size: 15px;
	 border-radius: 10px;
	 padding: 5px;
	 background-color: #ebecf0;
	 text-shadow: 1px 1px 0 #fff;
}


 input:focus {
	 box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
}


.comment{
   color: wheat;
}
      </style>
   </head>
   <body>
      
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top  navbar-custom">
         <a class="navbar-brand" href="http://localhost:8080/rexBooks/homepage.html" style="font-size: 2.7rem; font-family: 'Pacifico', cursive;">RexBooks</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link disabled"  href="#"><span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="http://localhost:8080/rexBooks/upload.html">Upload Book</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="http://localhost:8080/rexBooks/request.html" tabindex="-1" aria-disabled="true">Request Book</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/classics.html">Classics</a>
                     <a class="dropdown-item" href="#">Sci-Fi</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/magazines.html">Magazines</a>  
                     <a class="dropdown-item" href="#">Action & Adventure</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/comics.html">Comics</a>
                     <a class="dropdown-item" href="#">Mystery & Detective</a>
                     <a class="dropdown-item" href="#">Fantasy</a>
                     <a class="dropdown-item" href="#">Fiction</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/horror.html">Horror</a>
                     <a class="dropdown-item" href="#">Romance</a>
                     <a class="dropdown-item" href="#">Sci-Fi</a>
                     <a class="dropdown-item" href="#">Suspense & Thrillers</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/bio.html">Biographies & Autobiographies</a>
                     <a class="dropdown-item" href="#">Self Help</a>
                     <a class="dropdown-item" href="#">True Crime</a>
                  </div>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </form>
         </div>
      </nav>
      <br><br><br><br><br>
      <script type="text/javascript">
         var count = 10;
         function like() {
           count = 22;
           // alert(count);
           document.getElementById('btspan').style.display="block";
           document.getElementById('btspan').innerHTML=count;
           document.getElementById('bttemp').style.display="none"; 
           // var doc = document.getElementById('bt');
           // var x = document.createElemet(p);
           // var y = document.createTextNode(count);
           // bt.appendChild(x);
         }
      </script>
      <?php 
         $username = "root"; 
         $password = ""; 
         $database = "test"; 
         $mysqli = new mysqli("localhost", $username, $password, $database); 
         $query = "SELECT * FROM `BookDB` WHERE `BookID`='1001'";
         
         if ($result = $mysqli->query($query)) {
             while ($row = $result->fetch_assoc()) {
                 $Title = $row["Title"];
                 $Author = $row["Author"];
                 $Description = $row["Description"];
                 $Genre = $row["Genre"];
                 $Year = $row["Year"]; 
                 $Language = $row["Language"];
             }
             $result->free();
         } 
         ?>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <img src="https://images-na.ssl-images-amazon.com/images/I/81s5gr8znaL.jpg" alt="" width="70%" height="80%" style="margin: 5%; padding: 2%;" data-aos="flip-left">
         </div>
         <div class="col-lg-4 col-md-6" data-aos="flip-right">
            <br>
            <?php
            echo '
            <h1 class="shadow-lg">'.$Title.'</h1>
            <h1 class="shadow-lg">-'.$Author.'</h1>
            <br>
            <h3 class="shadow-lg">'.$Descr.'</h3>
            <h5 class="shadow-lg"> - </h5>
            <h5 class="shadow-lg">'.$Genre.'</h5>
            <h5 class="shadow-lg">'.$Year.'</h5>
            
            <h5 class="shadow-lg">'.$Language.'</h5>
            ';
                     ?>
                    
            <div id="bt" style="text-align: center;">
               <a  href="http://localhost:8080/rexBooks/pdfs/theAlchemist.pdf" download><button class="button"><span>Download</span></button></a><br><br>
               <button onclick="like()"><i class="fas fa-2x fa-heart"></i></button><span id="btspan" style="color: white; display: none;">count</span><br><span id="bttemp" style="color: white; display: inline;">21</span>
               <!-- AddToAny BEGIN -->
               <div style="padding-left: 29%" class="a2a_kit a2a_kit_size_32 a2a_default_style">
                  <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                  <a class="a2a_button_facebook"></a>
                  <a class="a2a_button_twitter"></a>
                  <a class="a2a_button_email"></a>
                  <a class="a2a_button_whatsapp"></a>
                  <a class="a2a_button_google_gmail"></a>
                  <a class="a2a_button_reddit"></a>
               </div>
               <script>
                  var a2a_config = a2a_config || {};
                  a2a_config.onclick = 1;
                  a2a_config.num_services = 4;
               </script>
               <script async src="https://static.addtoany.com/menu/page.js"></script>
               <!-- AddToAny END -->
            </div>
            <br><br>
         </div>
      </div>
      <br><br>

      <div  id="comment">
     
      
                     <?php
                        $username = "root"; 
                        $password = ""; 
                        $database = "test"; 
                        $_SESSION['idvar'] = '1001';
                        $mysqli = new mysqli("localhost", $username, $password, $database); 
                        $query = "SELECT * FROM Cooments WHERE BookID = '1001' ";
                        
                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $commentFetched = $row["Comment"];
                                echo "<tr> 
                                          <p class='comment'>$commentFetched</p> 
                                      </tr>";
                            }
                            $result->free();
                        } 
                       
                     ?>

                      <form method="post" name="registration" action="commentUpload.php">
         <td><input name="comment" type="text" placeholder="add comment">
         <button class="red" type="submit" value="submit">
            <i class="fas fa-cloud-upload-alt"></i>Upload</button></td>
      </form>
                      </div>
                     <br><br>
      <div class="section-odd" data-aos="fade-up">
         <h1>Recommended</h1>
         <div class="row">
            <div class="col-lg-2 col-md-4">
               <a href="" ><img src="http://localhost:8080/rexBooks/bookCovers/horror/hor9.jpg" alt="" width="100%" height="85%" style="padding: 1%;"></a>
            </div>
            <div class="col-lg-2 col-md-4">
               <img src="http://localhost:8080/rexBooks/bookCovers/biographies/bio9.jpg" alt="" width="100%" height="85%" style="padding: 1%;">
            </div>
            <div class="col-lg-2 col-md-4">
               <img src="http://localhost:8080/rexBooks/bookCovers/classics/cla9.jpg" alt="" width="100%" height="85%" style="padding: 1%;">
            </div>
            <div class="col-lg-2 col-md-4">
               <img src="http://localhost:8080/rexBooks/bookCovers/magazines/mag4.jpg" alt="" width="100%" height="85%" style="padding: 1%;">
            </div>
            <div class="col-lg-2 col-md-4">
               <img src="http://localhost:8080/rexBooks/bookCovers/classics/cla3.jpg" alt="" width="100%" height="85%" style="padding: 1%;">
            </div>
            <div class="col-lg-2 col-md-4">
               <img src="http://localhost:8080/rexBooks/bookCovers/biographies/bio3.jpg" alt="" width="100%" height="85%" style="padding: 1%;">
            </div>
         </div>
      </div>
      <div class="basefooter">
         <p>RexBooks - For the Bookworms out there<br>
            All rights reserved RexBooks 2020
         </p>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init({
         
         delay: 200, // values from 0 to 3000, with step 50ms
         duration: 1500, // values from 0 to 3000, with step 50ms
         
         once: false, // whether animation should happen only once - while scrolling down
         mirror: false, // whether elements should animate out while scrolling past them
         } );
      </script>
   </body>
</html>