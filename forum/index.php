<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Welcome to iDiscuss</title>
</head>

<body>
  <?php include 'partials/_header.php'; ?>


  <div class="container my-3">
    <h2 class="text-center">iDiscuss - Categories</h2>
    <div class="row">
     
      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="images/python.jpg" class="card-img-top" alt="..." width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Python</h5>
            <p class="card-text">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation</p>
            <a href="threadlist.php?catid=1" class="btn btn-primary" <?php  $catid=1; echo$catid;?>>View Threads</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="images/tech.jpg" class="card-img-top" alt="..." width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">JavaScript</h5>
            <p class="card-text">JavaScript is the Programming Language for the Web.JavaScript can update and change both HTML and CSS.JavaScript can calculate, manipulate and validate data.</p>
            <a href="threadlist.php?catid=2" class="btn btn-primary" <?php  $catid=2; echo$catid;?>>View Threads</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="images/coding.jpg" class="card-img-top" alt="..." width="300" height="200">
          <div class="card-body">
            <h5 class="card-title">Java</h5>
            <p class="card-text">Java is a popular programming language. Java is used to develop mobile apps, web apps, desktop apps, games and much more.</p>
            <a href="threadlist.php?catid=3" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php include 'partials/_footer.php'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>