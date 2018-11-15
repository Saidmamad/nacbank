<?php require("menu_class.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example Ajax PHP Form</title>
        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                <h1>You're in AJAX page!</h1>
                <h3>Task:</h3>
                <p>
                    ... to use and show the AJAX technology. 
                </p>

                <!-- Form starts here  -->
                <form id="my_form_id">
                    <div class="form-group">
                        <input type="text"  id="login" class="form-control"  placeholder="Enter Login">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="form-control"  placeholder="Enter Password">
                    </div>

                    <input type="submit" class="btn btn-primary" />
                </form>
                <!-- Form ends here  /-->
        
                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('#my_form_id').on('submit', function(e){
                            //Stop the form from submitting itself to the server.
                            e.preventDefault();
                            var login = $('#login').val();
                            var password = $('#password').val();
                            $.ajax({
                                type: "POST",
                                url: 'request.php',
                                data: {login: login, password: password },
                                success: function(data){
                                    document.getElementById("result").innerHTML = '<div class="alert alert-success" role="alert">Success! Receivedd login was ' +login + ' and password: '+password+'</div>';

                                    //alert(data);

                                }
                            });
                        });
                    });
                </script>
                <br> <br>
                <div id="result">  </div>
                <a class="btn btn-secondary" href="/nacbank/page2.php" > < Back to JS  </a>
                
                <br> <br>
    
                </div> <!-- middle row / -->

            </div> <!-- row / -->

        </div> <!-- container /  -->

    <!-- Footer inc  -->
    <?php require("footer.php"); ?>
        
    </body>
</html>