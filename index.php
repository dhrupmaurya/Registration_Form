<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signUp" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
             <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Full Name" required>
                <label for="name">Full Name</label>
             </div>
             <div class="input-group">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" name="dob" id="dob" required>
                <label for="dob">Date of Birth</label>
             </div>
             <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" name="contact" id="contact" placeholder="Contact Number" required>
                <label for="contact">Contact Number</label>
             </div>
             <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
             </div>
             <div class="input-group">
                 <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="password" required>
                  <label for="password">Password</label>
             </div>


             <input type="submit" class="btn" value="Sign Up" name="signUp">
             
        </form>
        <p class="or">
            -----------Or-------------
        </p>
        <div class="icon">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have an Account ? </p>
            <button id="signInButton">Sign In</button>
        </div>


    </div>


    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="register.php" method="post">
             
             <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
             </div>
             <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="password" required>
                <label for="password">Password</label>
             </div>
              <p class="recover">
                <a href="#">Recover Password</a>
              </p>

             <input type="submit" class="btn" value="Sign In" name="signIn">
             
        </form>
        <p class="or">
            -----------Or-------------
        </p>
        <div class="icon">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't Have an Account ? </p>
            <button id="signUpButton">Sign Up</button>
        </div>


    </div>
    <script src="script.js"></script>
</body>
</html>