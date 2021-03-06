<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/style.css">
    <title>Hsopital Details</title>
</head>
<body>
<?php 
$connection = mysqli_connect("localhost", "root", "", "iemhcktn");
//echo "CONNECTION ESTABLISHED! ready to go";
if (isset($_GET['id'])) {
$shopID = $_GET['id'];
$query = "SELECT * FROM hospital WHERE hid='$shopID' ";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run);
$hdata[]=$row;
}
 ?>
    <header>
        <div class="login-bar" id="nav-desk">
            <div class="navbar-desktop">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Need Help?</a></li>
                </ul>
            </div>
            
            <div class="login">
                <a href="./admin/login.html">Admin login</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-mob">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Need help</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bg-warning" href="./admin/login.html">Admin Login</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
    <?php foreach ($hdata as $row){    ?> 
        <div class="hos-detail-flex">
            <img src="assets/hospital.jpg" alt="hospital-image">
            <div class="hos-detail">
                <div class="rating">
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                         <span>(149)</span>
                    </div>
                </div>
                <h2><?php echo $row['name']; ?></h2>
                <div class="cta">
                    <a href="callto:919999999999" class="call"><i class="fa fa-phone" aria-hidden="true"></i> Call now</a>
                    <a href="#" class="directions"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Directions</a>
                </div>
                <p class="hos-address">
                    <b>Address:</b> Dynamic address of the hospital
                </p>
                <p class="beds-available">
                    <b>>> Beds available: </b> Dynamic bed numbers
                </p>
                <p class="blood-available">
                    <b>>> Blood availability: </b> <br>
                    <div class="blood-flex">
                        <div class="blood-type">
                            <div class="b-name">AB+</div>
                            <div class="b-available"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">AB-</div>
                            <div class="b-available"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">A+</div>
                            <div class="b-available"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">A-</div>
                            <div class="b-available"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">B+</div>
                            <div class="b-available"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">B-</div>
                            <div class="b-available"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">O+</div>
                            <div class="b-available"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="blood-type">
                            <div class="b-name">O-</div>
                            <div class="b-available"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </p>
                <p class="fees">
                    <b>Fees Structure: </b>
                    <span>1 crore to 100 crore (if you are not ambani then fuck off)</span>
                </p>
            </div>
        </div>
        <?php } ?>
        <div class="comments">
            <form action="">
                <h4>Reviews</h4>
                <input type="text" placeholder="Your name" required>
                <input type="text" id="com-in" placeholder="Leave a review" required>
                <button type="submit">Commennt</button>
            </form>
            <div class="comment">
                <div class="com-name"></div>
                <div class="com">
                    
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="row">
            <div class="row-one">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="row-two">
                <h3>Social Links</h3>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                    <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i> Github</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/index.js"></script>

</body>
</html>