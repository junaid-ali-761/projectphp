<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css" integrity="sha512-58P9Hy7II0YeXLv+iFiLCv1rtLW47xmiRpC1oFafeKNShp8V5bKV/ciVtYqbk2YfxXQMt58DjNfkXFOn62xE+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

  




    <style>
       
       

       
        body{
            background-color: white;
        }
        .container{
           text-align: center;
           
           margin: 20px;
           padding: 15px;
           border: none;
           border-radius: 4px;
           font-size: 20px;
          
        }
        h1{
           
            font-size: 70px;
            color: #4267b2;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 25px;
        }
        
        
    .login-btn{
     width: 350px;
    padding: 15px;
    background-color:rgb(96, 201, 183);
    color: white;
    font-size: 18px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    border-radius: 10px;
   
        }
      
.input{
    padding: 15px;
   
    width:300px ;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    border-radius: 10px;
    border: 1px solid;
    opacity: 5;
}
h3{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color:rgb(96, 201, 183);
}
a{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
}
.logo{
    font-size: 80px;
     color:rgb(96, 201, 183);
}   
    </style>
</head>
<body>
    <div class="container">
       
        <div class="logo">
           <img src="images/logo.png" alt="">
        </div>
        <div class="text Box">
            <form action="loginn.php" method="POST">
                <h3>Login</h3>
        
                <i class="fa-solid fa-envelope"></i>
                <input type="email" class="input"  placeholder="Enter your email" name="email"> 
                <br>
                <br>
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="input"  placeholder="Enter your password" name="password" > 
              <br>
                <br>
                <input type="submit"  name ="submit"class="login-btn" value="Login">
                <br>
                <br>

                 <i class="fa fa-search" aria-hidden="true"></i>        <a href="">Forgotten account?</a> &nbsp;&nbsp;   <i class="fa fa-user" aria-hidden="true"></i>   <a href="">Sign UP for Facebook</a> &nbsp;&nbsp;
                


                <br>
                <br>
           
            </form>
        </div>
    </div>
</body>
</html>