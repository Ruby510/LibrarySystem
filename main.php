<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css.\main/font-awesome.min.css">
    <link rel="stylesheet" href="LMS.css" type="text/css">
</head>
    <div id="background">
        <div id="menu">
            <div id="navbar">
                <ul>
                    <a href="main.html"><li class="fa fa-home">Home</li></a>
                    <a href="register.php"><li class="fa fa-registered">Register</li></a>
                    <a href="login.php"><li>Login</li></a>
                    <a href="userlist.html"><li class="fa fa-user">User List</li></a>
                    <a href="booklist.html"><li class="fa fa-image">Book List</li></a>
                    <a href="searchuser.html"><li class="fa fa-user">Search User</li></a>
                    <a href="searchbook.html"><li class="fa fa-image">Search Book</li></a>
                </ul>
            </div>   
        </div>
        <div id="slider">
            <div id="x">WELCOME TO OUR LIBRARY
            <p style="font-size: 15PX;">"A book is a gift you can open again and again." – Garrison Kellor</p>
            </div> 
            <div id="y">
                <div id="l">
                    <h1 style=" text-align: center; color: white;">User</h1>
                    <div id="User">
                    <div class="'container" id="signIn">
                        <form method="post" action="connectlogin.php">
                            <div class="input-group" style="color: white;">
                                <label for="email">EMAIL</label>
                                <input type="email" name="email" id="email" placeholder="Email" required class="t">
                            </div>
                            <div class="input-group" style="color: white;">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password" placeholder="Password" required class="t">
                            </div>
                            <input type="submit" class="btn" value="Sign In" name="signIn" style="border: none; width: 100%; height: 30px; background-color: white;">
                        </form>
                    </div>
                </div>
            </div>
        </div> 
            <div id="z">
                <div id="r">
                    <h1 style=" text-align: center; color: white;">Admin</h1>
                    <div id="Admin">
                    <div class="'container" id="signIn">
                    <form method="post" action="connectlogin.php">
                            <div class="input-group" style="color: white;">
                                <label for="email">EMAIL</label>
                                <input type="email" name="email" id="email" placeholder="Email" required class="t">
                            </div>
                            <div class="input-group" style="color: white;">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password" placeholder="Password" required class="t">
                            </div>
                            <input type="submit" class="btn" value="Sign In" name="signIn" style="border: none; width: 100%; height: 30px; background-color: white;">
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    <script src = "register.js"></script>
</body>
</html>
