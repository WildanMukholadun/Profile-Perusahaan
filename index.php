<?php
//session_start();

//if (!isset($_SESSION['login'])) {
//header("location: login.php");
//exit;
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style copy.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>PERUSAHAAN</title>

    

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand">
                LOGO
            </a>
            <button class="navbar-toggler" typpe="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarResponsive">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 m-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in
                            <i class="fad fa-sign-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--End Navbar-->

    <!-- Home Page -->
    <section id="Home">
        <div class="container">
            <hr>
            <div class="row pt-5 pb-5">
                <div class="col-md-6 p-5">
                    <h2>Tacpos</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem delectus, minima at rerum omnis saepe ex quos nemo, tempore temporibus molestiae ipsam incidunt, consequuntur culpa obcaecati commodi accusamus expedita neque.
                    </p>
                </div>
                <div class="col-md-6 p-5 text-center w-50">
                    <img src="images/in-sync-animate.svg" alt="" />
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,224L24,224C48,224,96,224,144,192C192,160,240,96,288,85.3C336,75,384,117,432,144C480,171,528,181,576,176C624,171,672,149,720,128C768,107,816,85,864,96C912,107,960,149,1008,186.7C1056,224,1104,256,1152,261.3C1200,267,1248,245,1296,224C1344,203,1392,181,1416,170.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </section>
    <!--End Home-->


    <!-- Service Page -->
    <section id="Service">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12  pt-5 mb-5">
                    <h2><b>WHAT ARE WE GOING TO DO?</b></h2>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-6 p-2">
                    <div class="icon"><i class="fas fa-file-code"></i></div>
                    <h5 class="service-title">Development</h5>
                    <p class="service-subtitle">Desktop and Mobile Application Development. Our Team will help you to create it</p>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-6 p-2">
                    <div class="icon"><i class="fas fa-edit"></i></div>
                    <h5 class="service-title">Web Design</h5>
                    <p class="service-subtitle">Our Team have many experience to Create and Design Web for Private Company and Organisation.</p>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-6 p-2">
                    <div class="icon"><i class="fas fa-wifi"></i></div>
                    <h5 class="service-title">IOT</h5>
                    <p class="service-subtitle"> Create Connection between your Home, Office or Others Location to your Mobile Device. or Computers.</p>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 p-2">
                    <div class="icon"><i class="fas fa-tools"></i></div>
                    <h5 class="service-title">Maintenance</h5>
                    <p class="service-subtitle">Maintain Your Office Computers and Server to get the Best Perfomance</p>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->

    <!-- About Us Page -->
    <section id="About">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-3">
                    <h2 class="about-title"><b>ABOUT US</b></h2>
                    <p class="about-subtitle">The Indonesian Application Team Builder.<br> Growing from the bad economic session of the Indonesian at 1997</p>
                </div>
            </div>
        </div>
    </section>
    <!--End About Us-->

    <!-- Product Page -->
    <section id="Product">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5">
                    <h2><b>OUR PRODUCTS</b></h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-4">
                    <h5 class="product-title">JUDUL </h5>
                    <div class="card">
                        <img src="images/product1.jpg" class="card-img-top" alt="Picture" title="Remove Pattern Lock Screen & Bypass FRP Vivo Y91 (PD1818CF)" loading="lazy">
                        <figcaption class="figure-caption ">Remove Pattern Lock Screen Vivo Y91 (PD1818CF)</figcaption>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-4 ">
                    <h5 class="product-title">JUDUL </h5>
                    <div class="card ">
                        <img src="images/product2.jpg " class="card-img-top " alt="Picture " title="Remove Pattern Lock Screen & Bypass FRP Vivo Y91 (PD1818CF) " loading="lazy ">
                        <figcaption class="figure-caption ">Remove Pattern Lock Screen Vivo Y91 (PD1818CF)</figcaption>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-4 ">
                    <h5 class="product-title">JUDUL </h5>
                    <div class="card">
                        <img src="images/product3.jpg " class="card-img-top " alt="Picture " title="Remove Pattern Lock Screen & Bypass FRP Vivo Y91 (PD1818CF) " loading="lazy ">
                        <figcaption class="figure-caption ">Remove Pattern Lock Screen Vivo Y91 (PD1818CF)</figcaption>
                    </div>
                </div>
                <div class="pt-5 ">
                    <a href="detail-product.html ">
                        <h5>See More &gt; &gt; &gt; </h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Product-->

    <!-- Contact Page -->
    <section id="Contact">

    <div class="container">
      <div class="row">
        <div class="col text-center mt-5">
          <h1>Contact-Form<h1>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col-md-6 mb-1">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.271194710484!2d106.96072911431035!3d-6.227931762725831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c63d6198ac5%3A0x4813b5d3e70f4590!2sdr.Dwiana%20Dewi%20Heryati!5e0!3m2!1sid!2sid!4v1642895462901!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> 
        <div class="col-md-6">       
          <div name="Contact-Form">
        
        <div class="container">
            <div class="row pt-5 mt-5">
                <div class="col text-center p-4">
                    <h1>Contact-Form<h1>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-6 mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.271194710484!2d106.96072911431035!3d-6.227931762725831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c63d6198ac5%3A0x4813b5d3e70f4590!2sdr.Dwiana%20Dewi%20Heryati!5e0!3m2!1sid!2sid!4v1642895462901!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6">
                    <div name="Contact-Form">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama </label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" name="pesan" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-kirim">Submit</button>
                    </div>
                    </form>
                </div>
            </div>


            <div class="row">
            <div class="col-md-6 mb-3">            
              <label for="exampleInputEmail1" class="form-label">Nama </label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required />            
            </div>
            <div class="col-md-6 mb-3">            
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required />            
            </div>
          </div>
          </div>
            <div class="col-md-12 mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" name="pesan" required></textarea>
            </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-kirim">Submit</button>   
          </div>    
          </form>
        </div> 
      </div>
      <div class="row">

                <div class="col">
                    <div id="share-container">
                        <div id="share">
                            <a class="facebook pt-2 " href="https://www.facebook.com/angelpramadio" rel="nofollow noopener" target="_blank" title="Facebook">
                                <img src="images/facebook.png" alt="">
                            </a>

                            <a class="instagram pt-2" href="https://www.instagram.com/angelcalliista" rel="nofollow noopener" target="_blank" title="Instagram">
                                <img src="images/instagram.png" alt="">
                            </a>

                            <a class="whatsapp pt-2" href="https://api.whatsapp.com/send?phone=&amp;text=AdrianDroid%20%2D%20https://adrdroid.github.io/" rel="nofollow noopener" target="_blank" title="WhatsApp">
                                <img src="images/whatsapp.png" alt="">
                            </a>

                            <a class="gmail pt-2" href="https://www.youtube.com/channel/UCq0kZt2RRXthaRcrrjg9xnQ" rel="nofollow noopener" target="_blank" title="YouTube">
                                <img src="images/gmail.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>


      </div> 
    </div>    

            </div>


    </section>
    <!--End Contact-->

    <!-- Footer -->
    <section id="Footer">
        <svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 1440 320 ">
            <path fill="white " fill-opacity="1 " d="M0,96L48,133.3C96,171,192,245,288,240C384,235,480,149,576,144C672,139,768,213,864,240C960,267,1056,245,1152,224C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z "></path>
        </svg>
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 footer-box ">
                    <img src="images/logo 1.png" class="footer-img mb-4 " />
                    <p>
                        <a href="#Home ">Home</a>
                    </p>
                    <p>
                        <a href="#Service ">Service</a>
                    </p>
                    <p>
                        <a href="#About ">About Us</a>
                    </p>
                    <p>
                        <a href="#Product ">Product</a>
                    </p>
                    <p>
                        <a href="#Contact ">Contact</a>
                    </p>
                </div>
                <div class="col-md-4 footer-box pl-4 ">
                    <h4 class="h4 mb-4 ">CONTACT US</h4>
                    <p class="footer-contact"><img src="images/icon-footer1.png " class="icon-footer "> Jakarta, Indonesia</p>
                    <p class="footer-contact"><img src="images/icon-footer2.png " class="icon-footer "></i> 0822 5888 1204</p>
                    <p class="footer-contact"><img src="images/icon-footer3.png " class="icon-footer "></i> angel@pramadio.com</p>
                </div>
                <div class="col-md-4 footer-box ">
                    <h4>COMPLAIN</h4>
                    <a type="button" class="btn btn-primary bg-dark" href="komentar/index.php">Complain</a>

                </div>
            </div>
        </div>

        <footer class="text-center pb-5 ">
            <p>Copyright &copy; 2022</p>
        </footer>
    </section>
    <!--End Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    <a href="# " class="ignielToTop "></a>

</body>

</html>