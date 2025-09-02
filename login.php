<?php

require 'includes/init.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = require 'includes/db.php';

    if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {
        
        Auth::login();

        Url::redirect('/');

    } else {
        
        $error = "login incorrect";

    }
}

?>
<?php require 'includes/header.php'; ?>







    <main class="form-signin w-50 text-center p-5 m-auto"> 
       
    <?php if (! empty($error)) : ?>
    <p><?= $error ?></p>
    <?php endif; ?>

        <form class="mt-5" method="post"> 
        <h1 class="h3 mb-3 fw-normal">Please log in</h1> 
        <div class="form-floating mb-3">
            <label for="floatingInput">Username</label>  
            <input name="username" id="username">   
        </div> 
        <div class="form-floating"> 
            <label for="floatingPassword">Password</label>
            <input type="password" name="password" id="password">     
        </div> 
         <button class="btn btn-primary w-50 mt-3 py-2" type="submit">Sign in</button> 
        </form> 
    </main>   
            


<?php require 'includes/footer.php'; ?>
