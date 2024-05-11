<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="LMS.css" type="text/css">
    <style>
        #background{

min-height: 1050px;
width: 100%;

}
#top{
height: 35px;
width: 100%;
background:#cdd712;
line-height: 35px;
padding: 0px 20px 9px 100px;
box-sizing: border-box;
word-spacing:10px ;

}
#menu{
height: 65px;
width: 100%;
background:rgb(91, 76, 2);

}
#logo{
height: 65px;
width: 40%;
background:white;
text-align: center;
line-height: 65px;
font-size: 40px;
float: left;
}
#menu {
    display: flex;
    justify-content: center; /* Centers children horizontally */
    align-items: center;
    height: 65px; /* Uniform height */
    width: 100%;
    background: rgb(91, 76, 2);
}

#menu1 UL{
list-style: none;
padding-left: 200px;
box-sizing: border-box;

}
#menu1 LI{
height: 45px;
width: 130px;

text-align: center ; 
display: inline-block; 
line-height: 45px;
transform: translateY(-5px);
color: black;
font-size: 20px;

}
#menu1 LI:hover{
background: #ecda0d;  
color: white; 
transition: all ease 1s;
border-radius: 3px;
}

#slider{
height:640px;
width: 100%;
background:url(image/4.jpg);
background-size: cover;
background-attachment: fixed;
}

#x{
height:640px;
width: 40%;
background:rgba(0,0,0, .4); 
float: left;
font-size: 41PX;
color: white;
text-align: center;
padding-top: 250px;
box-sizing: border-box;
}
#y{
height:640px;
width: 60%;
background:rgba(0,0,0, .4); 
float: left;


}

#l{
height:500px;
width: 60%;
background:rgba(255,255,255, .6); 
float: left; 
margin: 90px;
border-radius: 8px ;

}
#l:hover{
background:linear-gradient(45deg,rgba(181, 187, 10, 0.6),rgba(255,255,255, .6));
}


#user{
margin:50px 50px;
color:blue;

}
#admin{
margin:50px 50px;
color:white;
}
.t{
height: 40px;
width: 100%;
border: 2px solid rgb(202, 156, 7);
border-radius: 4px;
box-sizing: border-box;
margin-bottom: 15px;

}
#down{
height: 300px;
width: 100%;
margin-top: 10px;
background:#e1bd0a;
text-align: center;
padding-top: 10px;
color: white;
}
.footer{
height: 20px;
width: 100%;
background: black;
color: white;
text-align: center;
}

#navbar {
    width: 60%;  /* Match the size ratio */
    background: rgb(137, 125, 63); /* Ensure consistent background */
    display: flex;
    justify-content: center; /* Centers the items horizontally */
    align-items: center; /* Align items vertically in the center */
}

#navbar UL {
    list-style: none;
    padding: 0;  /* Ensure no padding */
    margin: 0; /* Ensure no margin */
    display: flex;
    justify-content: center;  /* Centers items in navbar */
    align-items: center;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
}

#navbar LI {
    height: 45px;
    width: auto; /* Width auto allows for content-based sizing */
    text-align: center;
    display: inline-block;
    line-height: 45px; /* Uniform line-height */
    color: black;
    font-size: 20px;
    margin: 0 10px; /* Adjust spacing if necessary */
    display: inline-flex;
    align-items: center;
}

#navbar LI:hover {
    background: rgb(137, 125, 63);  
    color: white; 
    transition: all ease 1s;
    border-radius: 3px;
}

    </style>
</head>
<body>
    <div id="background">
        <div id="menu">
            <div id="navbar">
                <ul>
                    <a href="main.php"><li>Home</li></a>
                    <a href="register.php"><li>Register</li></a>
                    <a href="login.php"><li>Login</li></a>
                    <a href="userlist.html"><li>User List</li></a>
                    <a href="booklist.html"><li>Book List</li></a>
                    <a href="searchuser.html"><li>Search User</li></a>
                    <a href="searchbook.html"><li>Search Book</li></a>
                </ul>
            </div>   
        </div>
        <div id="slider">
            <div id="x">JOIN THE LIBRARY!
            <p style="font-size: 15PX;">FREE MEMBERSHIP</p>
            </div> 
            <div id="y">
                <div id="l">
                    <div class="'container" id="signup">
                    <h1 style="text-align: center; color: white;">REGISTER</h1>
                    <form method="post" action="connectlogin.php">
                        <div class="input-group" style="color: white;">
                            <label for="fName">FIRST NAME</label>
                            <input type="text" name="fName" id="fName" placeholder="First Name" required class="t">
                        </div>
                        <div class="input-group" style="color: white;">
                            <label for="lName">LAST NAME</label>
                            <input type="text" name="lName" id="lName" placeholder="Last Name" required class="t">
                        </div>
                        <div class="input-group" style="color: white;">
                            <label for="email">EMAIL</label>
                            <input type="email" name="email" id="email" placeholder="Email" required class="t">
                        </div>
                        <div class="input-group" style="color: white;">
                            <label for="password">PASSWORD</label>
                            <input type="password" name="password" id="password" placeholder="Password" required class="t">
                        </div>
                        <input type="submit" class="btn" value="Sign Up" name="signUp" style="border: none; width: 100%; height: 30px; background-color: #df9618;">
                        <div class="link">
                            <p>Already have an account?</p>
                            <a href="login.php" id="signInButton" style="display: inline-block; padding: 8px 15px; background-color: #df9618; color: white; text-decoration: none; border: none; cursor: pointer;">Sign In</a>
                        </div>
                    </form>   
                </div>
                </div>
            </div> 
        </div>
    </div>
    <script src = "register.js"></script>
</body>
</html>
