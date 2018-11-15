<?php require("menu_class.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>NacBank</title>
  </head>
  <body>

    <!-- Navigation bar inc  -->
    <?php include("navbar.php"); ?>
    
    <!-- Container  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6" style="min-height:500px; padding-top:30px;">            
                <h1>Welcome!</h1>
                <h3>Task:</h3>
                <p>
                    ...to submit the data using
                    html form and display the data under the page using PHP.
                    
                </p>
                <!-- Reg form & Obrabotchik inc  -->
                <?php include('reg_form.php'); ?>
                <a class="btn btn-secondary float-right" href="/nacbank/page2.php" >Go to JS  > </a>
 
                <!-- Obrabotchik included  -->
                <?php include('obrabotchik.php'); ?>
                <br> <br> 
            </div>
            <div class="col-sm-3"> 

            </div>
        </div> <!-- Row  -->

    </div>
    <!-- Container ends  /-->

    <!-- Footer inc  -->
    <?php require("footer.php"); ?>

  </body>
</html>