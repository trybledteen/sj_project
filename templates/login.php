<?php
include('partials/header.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
  header('Location: admin.php');
}
?> 
<main>

      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
                <h4>Login</h4>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Your name">
                    <br>
                    <input type="text" name="password" placeholder="Your password">
                    <br>
                    <input type="submit" value="Send to" name="user_login">
                </form>
                
                <?php
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password']; 
                       
                        $user_object = new User();

                        $login_success = $user_object->login($email,$password);
                        
                        if($login_success == true){
                            header('Location: admin.php');
                            die;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }

                    }
                ?>
               
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer-login.php')
?> 