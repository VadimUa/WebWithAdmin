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
                    <div style="color:white;height:600px" class="header-admin">
                   <h1>Hello ADmin</h1>
                    <main class="container-fluid">
        <div class="saloon">
        
        <div class="remove">

        <p>Delete/add user</p>
            <form action="../php/delete.php" method="get">

                <div class="form-group">
                  <label for="exampleInputPassword1">id</label>
                  <input name="id" type="text" class="form-control" id="exampleInputPassword1">
                </div>
      
                  <button type="submit" class="btn btn-primary">Delete</button>
                
              </form>

        </div>
        
        <table class="tableadmin">
 
        <?php

echo "<link rel='stylesheet' href='../css/admin.css'>";


require_once 'database.php'; // подключаем скрипт
 
$link = mysqli_connect("127.0.0.1","root","","mydatabase") 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM users";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Login</th><th>Password</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>

         </table>

        </div>
    </main>
                    </div>
    
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