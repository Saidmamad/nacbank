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
    <script type="text/javascript">
        function checkPassword(str)
            {
                // at least one number, one lowercase and one uppercase letter
                // at least six characters that are letters, numbers or the underscore
                var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
                return re.test(str);
            }

        function checkForm(form){

            if(form.login.value == "") {
                alert("Error: Login cannot be blank!");
                form.login.focus();
                return false;
            }
            re = /^\w+$/;
            if(!re.test(form.login.value)) {
                alert("Error: Login must contain only letters, numbers and underscores!");
                form.login.focus();
                return false;
            }
            if(form.password.value != "") {
                if(!checkPassword(form.password.value)) {
                alert("The password you have entered is not valid!");
                form.password.focus();
                return false;
                }
            } else {
                alert("Error: Please check that you've entered your password! ");
                form.password.focus();
                return false;
            }

            alert("Validation check passed!");
            return true;
        }

        function Message(){
            var $login = RegForm.login.value;
            var $password = RegForm.password.value;
                if(checkForm(RegForm)){
                //alert("Check form returned true!");
                document.getElementById("info").innerHTML = '<div class="alert alert-success" role="alert"> Success! Data validation passed!</div>';
                document.getElementById("result").innerHTML = '<p> <b>Login:</b> '+$login+'</p>';
                document.getElementById("result").innerHTML += '<p> <b>Password:</b> '+$password+'</p>';;
           }

        }
    </script>
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
                <h1>You're to JS!</h1>
                <h3>Task:</h3>
                <p>
                To check the validation of the form inputs using JavaScipt 
                </p>
                <h4>Constrints for password:</h4>
                <h5>..for login:</h5>
                <p>
                    -> Login must contain only letters, numbers and underscores! <br>
                    
                </p>
                <h5>..for password:</h5>
                <p>
                    -> at least one number, one lowercase and one uppercase letter <br>
                    -> at least six characters that are letters, numbers or the underscore <br>
                </p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="RegForm" method="post">
                    <div class="form-group">
                        <input type="text" name="login" id="login" class="form-control"  placeholder="Enter Login">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control"  placeholder="Enter Password">
                    </div>

                    <button type="submit" onclick="javascript:Message(); return false;"  class="btn btn-primary">Submit</button>
                </form>

                <br> <br>
                <div id="info">
                
                </div>
                <div id="result">
                
                </div>
                <a class="btn btn-secondary float-left" href="/nacbank/index.php" > < Back to PHP  </a>
                <a class="btn btn-secondary float-right" href="/nacbank/page3.php" >Go to AJAX  > </a>
            <br> <br>
            </div>
            <div class="col-sm-3"> 
            </div>
        </div>
    </div>
    <!-- Container ends  /-->

    <!-- Footer inc  -->
    <?php require("footer.php"); ?>

  </body>
</html>