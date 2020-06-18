<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../bootstrap-4.4.1-dist/js/jquery-3.3.1.js"></script>
    <script defer src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script defer src="../scripts/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Beck Web</title>
</head>
<body>
    <div class="first_slide">
        <div class="container">
            <div class="header row justify-content-between align-items-center">          
                <div class="logo ">
                    <a href="#"><i class="fab fa-artstation"></i></a>
                </div>
                <div class="menu">
                        <a href="">HOME</a>
                        <a href="">ABOUT</a>
                        <a href="">EXPERTISE</a>
                        <a href="">TEAMS</a>
                        <a href="">WORKS</a>
                        <a href="">PEOPLE SAY</a>
                        <a href="">CONTACT</a>
                        <a href="./html/form.php">LOGIN</a>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="main-content column justify-content-between">
                    <div class="header-center">
                    <?php
        echo "<h1> Hello $login </h1>";
        ?>
                    </div>
                    <div class="line"><img src="./images/green-line.png" alt=""></div>
                    <div class="title">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut perspiciatis libero ea eius cumque rerum, itaque, facilis molestias consequuntur asperiores quos? Vitae eaque nam tempora corporis incidunt enim iure, esse recusandae cumque pariatur sint dolores cupiditate ipsa atque. Esse laudantium perferendis, repellendus, eum magni dolor soluta ab quia quis dignissimos harum odio ea rem culpa nihil perspiciatis velit earum dolores placeat nam nemo ad sit.
                    </div>
                    <div class="button">
                            <a href="#">LEARN MORE</a>
                    </div>
                    
            </div>
        </div>
        <div class="container">
            <div class="slider">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia vel quaerat, rem labore, doloribus minus eligendi animi dolores ratione nesciunt reprehenderit, dolorem id sequi vero. Nulla,</p>
                      </div>
                      <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia vel quaerat, rem labore, doloribus minus eligendi animi dolores ratione nesciunt reprehenderit, dolorem id sequi vero. Nulla,dfgfgdgfdg</p>
                      </div>
                      <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia vel quaerat, rem labore, doloribus minus eligendi animi dolores ratione nesciunt,</p>
                      </div>
                      <div class="carousel-item">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia vel quaerat, rem labore, doloribus minus eligendi animi dolores ratione nesciunt reprehenderit, dolorem id sequi vero. Nulla,Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <main>
          <div class="container">
            <div class="white_line d-flex flex-column justify-content-between align-items-center">
              <div class="top__part d-flex flex-row justify-content-between align-items-center">
              <div class="big_logo">
                <a href="#"><img src="./images/artage-io-thumb-ddcf92d96fbd7b1f973775a64696a3f5.png" alt=""></a>
              </div>
              <div class="description_forbig">
                <div class="head">
                  <p>OUR STORY</p>
                </div>
                <div class="first_part">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem voluptatum suscipit nobis sit? Dolores ab corporis repellendus minima fugit ipsa.</p>
                </div>
                <div class="second_part">
                  <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
                <div class="button"><a href="#">LEARN MORE</a></div>
              </div>
            </div>
              <div class="bottom__data ">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="expertise-tab" data-toggle="tab" href="#expertise" role="tab" aria-controls="expertise" aria-selected="false">Expertise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="people-tab" data-toggle="tab" href="#people" role="tab" aria-controls="people" aria-selected="false">People Say</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><p class="tabData">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corporis, tempora molestiae obcaecati iusto distinctio. Dolores iure, vero blanditiis, atque libero deserunt fuga voluptates praesentium eius nesciunt at nostrum ducimus voluptas sit, numquam iusto facere?</p></div>
            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab"><p class="tabData">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corporis, tempora molestiae obcaecati iusto distinctio. </p></div>
            <div class="tab-pane fade" id="expertise" role="tabpanel" aria-labelledby="expertise-tab"><p class="tabData">distinctio. Dolores iure, vero blanditiis, atque libero deserunt fuga voluptates praesentium eius nesciunt at nostrum ducimus voluptas sit, numquam iusto facere?</p></div>
            <div class="tab-pane fade" id="people" role="tabpanel" aria-labelledby="people-tab"><p class="tabData">voluptates praesentium eius nesciunt at nostrum ducimus voluptas sit, numquam iusto facere?</p></div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><p class="tabData">Lorem ipsum dolor sit amet consectetur adipisicing elit. nostrum ducimus voluptas sit, numquam iusto facere?</p></div>
          </div>
        </div>
        </div>
          </div>
        
       
        </div>
        <div class="purpleline3">
          <div class="container">
            <div class="header3 d-flex flex-column justify-content-end align-items-center">
              <h3>MEET OUR AMAZING TEAM</h3>
              <p>Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
              <img src="./images/line-grey.png" alt="">
            </div>
            <div class="line_wblocks d-flex flex-row justify-content-between align-items-center">
              <div class="block_wwhite col-xl-3 col-sm-6">
                <div class="white_square"></div>
                <div class="text_white">
                <h5>Lorem, ipsum dolor.</h5>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="watch_closure">
                <a href="#" class="watch_closure_text">Watch</a>
              </div>
            </div>
              <div class="block_wwhite col-sm-6 col-xl-3">
                <div class="white_square"></div>
                <div class="text_white">
                <h5>Lorem, ipsum dolor.</h5>
                  <p>Lorem, ipsum dolor.</p>
                </div>
                <div class="watch_closure">
                  <a href="#" class="watch_closure_text">Watch</a>
                </div>
              </div>
              <div class="block_wwhite col-xl-3 col-sm-6"
              ><div class="white_square"></div>
              <div class="text_white">
              <h5>Lorem, ipsum dolor.</h5>
              <p>Lorem, ipsum dolor.</p>
            </div>
            <div class="watch_closure">
              <a href="#" class="watch_closure_text">Watch</a>
            </div>
            </div>
              <div class="block_wwhite col-xl-3 col-sm-6">
                <div class="white_square"></div>
                <div class="text_white">
                <h5>Lorem, ipsum dolor.</h5>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="watch_closure">
                <a href="#" class="watch_closure_text">Watch</a>
              </div>
              </div>
            </div>
            <div class="footer_purple3 d-flex flex-column justify-content-center align-items-center">
              <p>Become part of our dream team, let’s join us ! </p>
              <div class="button"><a href="#">WE ARE HIRING</a></div> 
            </div>
          </div>
        </div>
        <div class="white_line3">
          <div class="container">
            <div class="white_header3 d-flex row justify-content-between align-items-center">
              <h3>OUR WORKS</h3>
              <a href="#">See All Project in dribbble <img src="./images/указатель.png" alt=""></a>
            </div>
          </div>
          <div class="our_works d-flex row justify-content-around
          align-items-center">
            <div class="our_work d-flex"><img src="./images/stroika.jpg" alt=""></div>
            <div class="our_work  d-flex"><img  src="./images/stroyka-1.jpg" alt=""></div>
            <div class="our_work  d-flex"><img  src="./images/unnamed.jpg" alt=""></div>
        </div>
        <div class="container">
          <div class="footer_white3 d-flex justify-content-center align-items-center">
            <div class="button"><a href="">LOAD MORE</a></div>
          </div>
        </div>
      </div>
    </main>
    <div class="container container_map">
      <div class="map_tracking d-flex flex-column justify-content-around align-items-center">
        <div class="pretty__map_nure">
        <iframe class="map__nure" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2155.901800989474!2d36.22718385342402!3d50.01484583459902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243f9e69d1%3A0x6daed05394f03251!2z0KXQsNGA0YzQutC-0LLRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDRgNCw0LTQuNC-0Y3Qu9C10LrRgtGA0L7QvdC40LrQuA!5e0!3m2!1sru!2sua!4v1589497545526!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map__nure_overlay d-flex justify-content-center align-items-center">
          <p class="map__nure_overlay_text">Find Us</p>
        </div>
      </div>
        <p class="map_nure_text">Lets Keep in touch</p>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="center_footer d-flex flex-row justify-content-between align-items-center">
          <div class="footer_last d-flex flex-row ">
              <div class="footer-col1 col-xl-4 d-flex flex-column justify-content-between align-items-start">
                <a href="#"><i class="fab fa-artstation"></i> </a>
                <p>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet auctror a ornare odio non mauris vitae erat in elit</p>
                <div class="right">
                    <a href="">HELP</a>
                    <a href="">TERMS & CONDITION</a>
                    <a href="">PRIVACY</a></div>
              </div>
              <div class="footer-col2 col-xl-4 d-flex flex-column justify-content-between align-items-start">
                <h3>OUR STUDIO</h3>
                <a href="#"><img src="./images/map.png" alt="">lorem lorem lorem</a>
                    <a href="#"><img src="./images/phone351.png" alt="">lorem lorem</a>
              </div>
              <div class="footer-col3 col-xl-4 d-flex flex-column justify-content-between align-items-start">
                <h3>STAY IN TOUCH</h3>
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Password</label>
                      <input style="width:200px;" type="email" class="form-control" id="inputPassword2" placeholder="Subscribe our newsletter">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"><img src="./images/plane.png" alt=""></button>
                  </form>
                  <div class="links d-flex flex-row justify-content-around align-items-center">
                  <i class="fab fa-facebook-square"></i>
                  <i class="fab fa-twitter-square"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-google-plus"></i>
                  <i class="fab fa-youtube"></i>
                </div>
                <div class="left d-flex ">
                    <p>lorem lorem lorem</p>
                  </div>
              </div>
            </div>
            </div>
        </div>
      </div>
    </footer>
</body>
</html>