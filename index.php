<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Signin Template · Bootstrap v5.3</title>
   
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  </head>
    <body>

    <form id="form001" method="POST">

        <body class="bg-info d-flex justify-content-center align-items-center vh-100">
        <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem" >
        <div class="d-flex justify-content-center">
            <img src="./assets/login-icon.svg" alt="person01" style="height: 7rem" />
        </div>
        <div class="text-center fs-1 fw-bold">Login</div>
        <div class="input-group mt-4">
            <div class="input-group-text bg-info">
            <img src="./assets/username-icon.svg" alt="username-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light" type="text" placeholder="Username" id="username" required />
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
            <img src="./assets/password-icon.svg" alt="password-icon" style="height:1rem"/>
            </div>
            <input class="form-control bg-light" type="password" placeholder="Password" id="usrpassword" required/>
        </div>
        <div class="d-flex justify-content-around mt-1">
            <div class="d-flex align-items-center gap-1">
            <input class="form-check-input" type="checkbox" /><div class="pt-1" style="font-size: 0.9rem">Remember me</div>
            </div>
            <div class="pt-1">
            <a href="menu001.php" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem" >Forgot your password?</a>
            </div>
        </div>
        <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" id="login_submit" onclick="submitData()">Login</div>

    
       
        
        <div class="d-flex gap-1 justify-content-center mt-1">
            <div>Don't have an account?</div>
            <a href="frm_register.php" class="text-decoration-none text-info fw-semibold">Register</a>
        </div>
        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem">
            <span class="bg-white px-3">or</span>
            </div>
        </div>
        <div
            class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
            <img src="./assets/google-icon.svg" alt="google-icon" style="height: 1.6rem"/>
            <div class="fw-semibold text-secondary">Continue with Google</div>
        </div>
        </div>
        <script src="config.js" type="text/javascript" > </script>

</form>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</body>
 </html>