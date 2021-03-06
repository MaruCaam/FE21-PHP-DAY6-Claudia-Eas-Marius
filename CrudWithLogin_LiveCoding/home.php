<?php
session_start();
require_once 'components/db_connect.php';


// if adm will redirect to dashboard
if (isset($_SESSION['adm'])) {
  header("Location: dashboard.php");
  exit;
}
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
  header("Location: index.php");
  exit;
}

// select logged-in users details - procedural style
$res = mysqli_query($connect, "SELECT * FROM user WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php require_once 'components/boot.php' ?>
  <link rel="stylesheet" href="scss/css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Golden Spoon</title>
</head>

<body>
  <header>
    <nav class="navbar n
      avbar-expand-md navbar-light bg-transparent">
      <div class="container">
        <div class="hero">
          <img style="width: 50px;" class="userImage" src="pictures/<?php echo $row['picture']; ?>" alt="<?php echo $row['first_name']; ?>">
          <p class="text-white">Hi <?php echo $row['first_name']; ?></p>
        </div>
        <a href="logout.php?logout">Sign Out</a>
        <a href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
      </div>
      <div class="container-fluid">
        <a class="navbar-brand" style="font-family: 'Benne', serif ;" href="#">
          <img src="img/af319db38bf17429a5b0ff8fd4b2c4c5.jpeg" width="50%" alt="logo" />
        </a>
        <div class="name">
          <h1>Golden Spoon</h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon bg-warning"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container">
    <h2>Make a reservation now!</h2>
    <form action="./products/actions/a_reservation.php" method="post">
      
      <span class="px-3">Date & Time</span> <input class="mt-2
      " type="datetime-local" name="book_date_time"><br>
      <span class="">Number of people</span> <input class="mt-2
      " type="number" name="people_number"><br>
      <input class='btn btn-success' type="submit" value="Book">
    </form>
  </div>

  <div id="titles" class="d-flex p-2 bd-highlight justify-content-center">Starters</div>


  <!-- First Row  -->
  <div class="entire">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100 bg-transparent">
          <img src="img/Untitled-03.jpg" class="card-img-top" alt="starters1">
          <div class="card-body">
            <h5 class="card-title">Roasted beef fillet </h5>
            <p class="card-text">on a colorful rocket salad, onions and paprika.</p>
          </div>
          <div class="card-footer">
            <small class="text-dark">16.90???</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent">
          <img src="img/Untitled-02.jpg" class="card-img-top" alt="starters2">
          <div class="card-body">
            <h5 class="card-title">Small gram dumplings </h5>
            <p class="card-text">on cream lentils with a side of green salad.</p>
          </div>
          <div class="card-footer">
            <small class="text-dark">13.60???</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent">
          <img src="img/Untitled-01.jpg" class="card-img-top" alt="starters3">
          <div class="card-body">
            <h5 class="card-title">Marinated chanterelles </h5>
            <p class="card-text">with raw ham and parmesan slices.</p>
          </div>
          <div class="card-footer">
            <small class="text-dark">14.60???</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-transparent">
          <img src="img/Untitled-04.jpg" class="card-img-top" alt="starters4">
          <div class="card-body">
            <h5 class="card-title">Tuna Trilogy</h5>
            <p class="card-text">Tuna three ways with freshly baked bread.</p>
          </div>
          <div class="card-footer">
            <small class="text-dark">11.90???</small>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="titles2" class="d-flex p-2 bd-highlight justify-content-center">Main Course</div>

  <!-- Second Row  -->

  <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img//Untitled-06.jpg" class="card-img-top" alt="h1">
        <div class="card-body">
          <h5 class="card-title">The original "Wiener Schnitzel"</h5>
          <p class="card-text">from veal with potato and potato salad.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">22.60???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-07.jpg" class="card-img-top" alt="h2">
        <div class="card-body">
          <h5 class="card-title">Crown of lamb</h5>
          <p class="card-text">tenderly roasted pink on ratatouille vegetables with potato gratin.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">26.90???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-05.jpg" class="card-img-top" alt="h3">
        <div class="card-body">
          <h5 class="card-title">"Schulterscherzel"</h5>
          <p class="card-text">with apple horseradish, chive sauce or spinach served with potato pancakes.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">24.90???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-08.jpg" class="card-img-top" alt="h4">
        <div class="card-body">
          <h5 class="card-title">Pikeperch fillet </h5>
          <p class="card-text">fried on beetroot risotto, garnished with fresh parmesan.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">31.90???</small>
        </div>
      </div>
    </div>
  </div>



  <div id="titles2" class="d-flex p-2 bd-highlight justify-content-center">Deserts</div>


  <!-- Third Row  -->

  <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-09.jpg" class="card-img-top" alt="d1">
        <div class="card-body">
          <h5 class="card-title">Nougat dumplings </h5>
          <p class="card-text">on three kinds of homemade fruit pulp.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">10.00???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-11.jpg" class="card-img-top" alt="d2">
        <div class="card-body">
          <h5 class="card-title">Lemon prosecco sorbet
          </h5>
          <p class="card-text">on peach jelly with fresh fruits.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">8.50???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-12.jpg" class="card-img-top" alt="d3">
        <div class="card-body">
          Chestnut rice </h5>
          <p class="card-text">with fresh fig, eggnog and chocolate sauce.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">9.90???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img src="img/Untitled-10.jpg" class="card-img-top" alt="d4">
        <div class="card-body">
          <h5 class="card-title">Homemade apricot dumplings </h5>
          <p class="card-text">made from potted batter with chocolate sauce.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">7.50???</small>
        </div>
      </div>
    </div>
  </div>



  <div id="titles2" class="d-flex p-2 bd-highlight justify-content-center">Beverages</div>


  <!-- Fourth Row  -->

  <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img style="width: 50%; margin: auto;" src="img/B-Hirter-Privat-Pils-05l-mit-Glas01.png" class="card-img-top" alt="b1">
        <div class="card-body">
          <h5 class="card-title">Hirter Privat Pils</h5>
          <p class="card-text">Real beer needs real tradition. That is why Hirter was, is and will remain an independent family business, rooted in the region. In our beer specialties such as the Hirter Privat Pils, we are proud to continue writing our 750-year history, which makes us one of the oldest private breweries in Austria.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">5.60???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img style="width: 70%; margin: auto;" src="img/B-01tMTmHYTvmb2mrIhld0kQ_pb_600x600.png" class="card-img-top" alt="b2">
        <div class="card-body">
          <h5 class="card-title">Gr??ner Veltliner G??ttweiger Berg 2020</h5>
          <p class="card-text">A typical and fruit-intensive Gr??ner Veltliner from the major G??ttweiger Berg area. On the nose an elegant scent of green apples, underlaid with fine citrus notes and a hint of meadow herbs. Spicy on the palate, with delicate white pepper and medium complexity. A classic Gr??ner Veltliner with lots of drinking pleasure, suitable for many occasions.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">35.00???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img style="width: 40%; margin: auto;" src="img/B-_sterreichisches_Sektkomitee-Josef_Dockner_Brut_Kremser_Frauengrund-bottleImage-Dockner_Brut_Kremser_Frauengrund-6991-medium.png" class="card-img-top" alt="b3">
        <div class="card-body">
          <h5 class="card-title">Josef Dockner Brut Blanc de Blanc Grand Reserve 2014</h5>
          <p class="card-text">TChardonnay, Pinot Blanc, Pinot Gris. Bright golden yellow, pleasantly soft mousseux, yellow tropical fruit, delicate brioch note with light tannins from the large wooden barrel, juicy, elegant, great aging potential, pleasant fruit sweetness, international sparkling wine.</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">39.00???</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 bg-transparent">
        <img style="width: 35%; margin: auto;" src="img/B-0d721eed3ece9fbcbe87b5cc71db1d12.png" class="card-img-top" alt="b4">
        <div class="card-body">
          <h5 class="card-title">Cocktails</h5>
          <p class="card-text">Enjoy one of our very own Cocktails or any of our Classics</p>
        </div>
        <div class="card-footer">
          <small class="text-dark">7.00???</small>
        </div>
      </div>
    </div>
  </div>






  <!-- Footer -->

  <footer>


    <div style="margin-top: 3vh;" class="rate">
      <input type="radio" id="star1" name="rate" value="1" />
      <label for="star1" title="text">1 star1</label>
      <input type="radio" id="star2" name="rate" value="2" />
      <label for="star2" title="text">2 stars</label>
      <input type="radio" id="star3" name="rate" value="3" />
      <label for="star3" title="text">3 stars</label>
      <input type="radio" id="star4" name="rate" value="4" />
      <label for="star4" title="text">4 stars</label>
      <input type="radio" id="star5" name="rate" value="5" />
      <label for="star5" title="text">5 stars</label>
    </div>

    <div class="reviews">
      <h3>
        <a style="text-decoration: none;  color: black; margin-bottom: 3vh;" href="reviews.html">Reviews</a>
      </h3>
      <a style="text-decoration: none; color: black !important;" href="https://www.instagram.com/zurgoldenenkugel/"><i style="font-size:45px; display: flex; justify-content: center; margin-bottom: 3vh;" class="fa">&#xf16d;</i></a>
    </div>



  </footer>


  <!-- SCRIPTS -->



  <script src="js/code.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> -->
</body>

</html>