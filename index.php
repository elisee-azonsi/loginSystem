<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous"
         referrerpolicy="no-referrer" />
    <title>SignUp</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="register.php" method="POST">
                <h1>Join Us</h1>
                <div class="social-container">
                    <a href="" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use Your Email To SignUp</span>
                <input type="text" name="fullname" placeholder="Enter your Name" require/>
                <input type="email" name="email" placeholder="Enter your Email" require/>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Create your Password"
                     require/>
                <button type="submit">Register</button>
            </form>
        </div>

        
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                <div class="social-container">
                    <a href="" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use Your Email To login</span>
                <input type="email" name="email" placeholder="Enter your Name"/>
                <input type="password" name="password" placeholder="Enter your Password"/>
                <button type="submit">login</button>
            </form>
        </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Hello Again</h1>
                <img src="Avatar-Profile-Vector-PNG.png" alt="" style="width: 150px; margin-top: 20px;">
                <p>Log in to stay connected with us</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>

            <div class="overlay-panel overlay-right">
                <h1>Welcome</h1>
                <img src="postman-512.webp" alt="" style="width: 150px; margin-top: 20px;">
                <p>Log in to stay connected with us</p>
                <button class="ghost" id="signUp">Register</button>
            </div>

    </div>    


    </div>
    </div>

</body>
</html>