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
    <?php include 'partials/_dbconnect.php'; ?>

    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to JavaScript Forum</h1>
            <p class="lead">JavaScript is the Programming Language for the Web.JavaScript can update and change both HTML and CSS.JavaScript can calculate, manipulate and validate data.</p>
            <hr class="my-4">
            <p>This is peer to peer forum for sharing knowledge with each other.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <div class="container">
        <h1 class="py-2">Browse Questions</h1>
        <div class="media">
            <img class="mr-3" src="images/userdefault.jpg" width="54px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">undefined Error</h5>
                Why am I getting undefined when trying to access a variable? I thought variables in JavaScript are globally scoped by default.
            </div>
        </div>

        <div class="media">
            <img class="mr-3" src="images/userdefault.jpg" width="54px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">objects and references</h5>
                Why does modifying one object affect another object when I assign one to the other? How can I create a true copy of an object in JavaScript?
            </div>
        </div>

        <div class="media">
            <img class="mr-3" src="images/userdefault.jpg" width="54px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">performance with loops</h5>
                Is a forEach loop slower than a regular for loop in JavaScript? What is the best loop to use when performance matters?
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