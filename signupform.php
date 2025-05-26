<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css">
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
    background-color:rgb(96, 201, 193);
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
.role{
   padding: 15px;
    width:330px ;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    border-radius: 10px;
    border: 1px solid;
    opacity: 5;


}
h3{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color:rgb(94, 206, 193);
}
a{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
}
.logo{
    font-size: 80px;
   color:rgb(94, 206, 193);
}
    </style>
</head>
<body>
    <div class="container">
        <div>
          
        </div>
        <div class="logo">
            <img src="images/logo.png" alt="">
           
        </div>
        <div class="text Box">
            <form action="signup.php" method="POST">
                <h3>Sing UP</h3>
                <input type="text" class="input"  placeholder="Your Name" name="name" required> 
                <br>
                <br>
                <input type="email" class="input"  placeholder="Email address or phone number" name="email" required> 
                <br>
                <br>
                <input type="password" class="input"  placeholder="password" name="password" required>
                <br>
                <br>
               <select name="role" class="role">
                    <option value="user">User</option>
                   <option value="admin">Admin</option>
               </select>
                <br>
                <br>
                <input type="submit"  name ="submit"class="login-btn" value="Sign UP">
                <br>
                <br>


             <i class="fa fa-search" aria-hidden="true"></i>      <a href="">Forgotten account?</a> &nbsp;&nbsp;  <i class="fa fa-user" aria-hidden="true"></i>   <a href="">Sign UP for </a> &nbsp;&nbsp;
                
            </form>
        </div>
    </div>










    
   
</body>
</html>