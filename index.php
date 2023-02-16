<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livreor-js</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css\style.css">
    <script defer src="script.js"></script>

</head>

<body>
    <!-- //////////////////inscrption\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="inscrption">
        <h1>sign up page</h1>
        <form method="post" id="signUp" name="signUp">
            <input id="username" type="text" placeholder="username" name="username" required><br>
            <input id="password" type="password" placeholder="password" name="password" required><br>
            <input type="password" placeholder="retype password" name="repass"><br>
            <button type="submit" name="inscrptionSub" id="inscrptionSub">submit </button>


        </form>
    </div>
    <!-- //////////////////connexion\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="connection_form">
        <h2>Sign in!</h2>
        <form action="php\connexion.php" method="post">
            loginUsr <input type="text" placeholder="username" name="loginUsr"><br required>

            loginPwd <input type="password" placeholder="password" name="loginPwd" required><br>

            loginSub <button type="submit" name="loginSub">
                <h2 class="sign">Sign in</h2>
            </button>

        </form>
        <h3 class="small_link"><a href="inscription.php">
                Not a member yet? <strong>Sign Up!</strong>
            </a></h3>
        <!-- <a class="logoGit" href="https://github.com/alon-bendavid/livre-or"><img src="..\media\GitHub-Logo.png" alt=""></a> -->
    </div>
    <!-- //////////////////profil\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="profil">
        <h2>Edit your profile</h2>

        <form action="profil.php" method="post">
            <input type="text" placeholder='New Username' name="editUsr"><br>
            <input type="text" placeholder="New Password" name="editPwd"><br>
            <input type="text" placeholder="Retype password" name="rePwd"><br>
            <button class="sign" type="submit" name="editSub">Edit</button>
            <!-- <input type="submit" name="editSub">edit</input> -->
        </form>
    </div>
    <!-- //////////////////livre-or\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="livre-or">


    </div>
    <!-- //////////////////commentaire\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="commentaire">
        <h1>Send a comment!</h1>
        <form action="" method="post">
            <textarea name="comment" id="" cols="30" rows="10" required></textarea>
            <!-- <input type="hidden" name="usrId" value="<?php echo $_SESSION['user'][1] ?>"><br> -->
            <!-- <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s') ?>"><br> -->

            <button class="sign" type="submit" name="subComment">Send</button>


        </form>
    </div>
</body>

</html>