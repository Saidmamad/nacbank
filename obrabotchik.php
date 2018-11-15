            <!-- Obrabotchik  -->
            <div>
                <br><br>
                    <?php
                        if(isset($_POST['login'])){
                            $login = $_POST['login'];

                        }
                        if(isset($_POST['password'])){
                            $password = $_POST['password'];

                        }
                    
                       if($_SERVER['REQUEST_METHOD'] === 'POST'){
                           if(!empty($login) && !empty($password)){
                                echo'    
                                <div class="card">
                                    <h5 class="card-header">Information</h5>
                                    <div class="card-body">
                                        <h5 class="card-title">Values provided in the form:</h5>
                                        <p class="card-text">
                                        <b>Login:</b>  '.$login.' <br /><b>Password:</b> '.$password. '
                                        </p>
                                        <a href="/nacbank/page2.php" class="btn btn-primary">Go to Menu 2</a>
                                    </div>
                                </div>
                                ';   
                               
                            }else{
                                echo '
                                <div class="alert alert-danger" role="alert">
                                    Your login or password was empty! Please provide both!
                                </div>
                                ';
                                
                                
                            }
                        }
                    ?>
                </div>

            <!-- Obrabotchik ends   /-->