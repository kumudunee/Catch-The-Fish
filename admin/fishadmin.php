<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) 
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../forbidden.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
  }
?>


<?php include '../server/adminserver.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - CTF</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
<style type="text/css">
  
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 6px;
}

tr:nth-child(even) {
  background-color: #F0FFFF;
}

input{

  width:100%;
}

</style>



</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">CAPTURE THE FISH </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" class="btn btn-danger">Logout</a>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to Administrative View</h1>
      <p class="lead">CAPTURE THE FISH - Challenge Experience</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Statistics View</h2>
          <p class="lead">Coming Soon...</p>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <h2>Key Changer</h2>
          
          <form action="" method="POST">
            
            <table>
              <tr>
                <td>Level 01 Code : <input type="text" name="keycode01"></td>
                <td>Level 01 Key : <input type="text" name="masterkey01"></td>
                <td><button type="submit" name="key01submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 02 Code : <input type="text" name="keycode02"></td>
                <td>Level 02 Key : <input type="text" name="masterkey02"></td>
                <td><button type="submit" name="key02submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 03 Code : <input type="text" name="keycode03"></td>
                <td>Level 03 Key : <input type="text" name="masterkey03"></td>
                <td><button type="submit" name="key03submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 04 Code : <input type="text" name="keycode04"></td>
                <td>Level 04 Key : <input type="text" name="masterkey04"></td>
                <td><button type="submit" name="key04submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 05 Code : <input type="text" name="keycode05"></td>
                <td>Level 05 Key : <input type="text" name="masterkey05"></td>
                <td><button type="submit" name="key05submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 06 Code : <input type="text" name="keycode06"></td>
                <td>Level 06 Key : <input type="text" name="masterkey06"></td>
                <td><button type="submit" name="key06submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 07 Code : <input type="text" name="keycode07"></td>
                <td>Level 07 Key : <input type="text" name="masterkey07"></td>
                <td><button type="submit" name="key07submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 08 Code : <input type="text" name="keycode08"></td>
                <td>Level 08 Key : <input type="text" name="masterkey08"></td>
                <td><button type="submit" name="key08submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 09 Code : <input type="text" name="keycode09"></td>
                <td>Level 09 Key : <input type="text" name="masterkey09"></td>
                <td><button type="submit" name="key09submit" class="btn btn-info">Submit</button></td>
              </tr>
              <tr>
                <td>Level 10 Code : <input type="text" name="keycode10"></td>
                <td>Level 10 Key : <input type="text" name="masterkey10"></td>
                <td><button type="submit" name="key10submit" class="btn btn-info">Submit</button></td>
              </tr>
            </table>




          </form>





        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>New Field for upcoming Features</h2>
          <p class="lead">Coming Soon...</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Capture the Fish 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
