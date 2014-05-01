<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gcss.css">
<meta charset="UTF-8">

<title>Login | Public Health Surveilance</title>
</head>
<body style="">
<header>
  <div> <a href="index.php"> <img src="images/banner.png" alt="Welcome to Public Health Surveilance"></a> </div>
</header>

<nav> <a href="login.php">login</a> | <a href="survey.php">Survey</a> | <a href="analitics.php">Analytics</a> | <a href="links.php">other</a> </nav>
<section>
<h1>Welcome</h1>
  <p>Public Health Surveilace is a place where we can store, retrieve and analyze citizens data.</p>
</section>
<section id="forms">
    <div style='display: none'>
        <div id="loginDiv">
            <div id="loginForm" class="apiDiv">
                <h3>LOGIN</h3>
                <form class="loginBox" action="loginPHP.php" method="post">
                    <input type="text" name="userName" id="userName" size="15"
                        class="login-input" placeholder="user Name" autofocus /> <input
                        type="password" name="password" id="password" class="login-input"
                        size="15" placeholder="password " /> <input type="submit"
                        value="Login" class="login-submit" />
                    <p class="login-help">
                        <a id="resetPassword" href="#">Forgot password?</a>
                    </p>
                </form>
            </div>
            <div id="forgotPSW" class="apiDiv" style="display: none">
                <form class="resetPasswordBox" action="resetPasswordPHP.php"
                    method="post">
                    <h3>Please Insert required information</h3>
                    <input type="email" name="email" id="email" size="15"
                        class="login-input" placeholder="email" required="true" autofocus />
                    <input type="submit" value="Reset Password" class="login-submit" />
            
            </div>
            </form>
        </div>

 
            <div class="table" id="table" style="float: left">
                <!--dispay image functionality-->
                <?php
                 $query = "SELECT * FROM members WHERE userName='".$_SESSION['user']."'";
// 					$result = mysql_query($query);
// 					$row = mysql_fetch_array($result);
                    $result_stmt = $conn->query($query) or die("failed query!".mysql_error($db));
                    $usr_row = $result_stmt->fetchAll();
                if($usr_row){
                foreach($usr_row as $row){
                    echo "first: "."". $row['firstName'];
                    echo "<br />";
                    echo "last: "."". $row['lastName'];
                    echo "<br />";
                    echo "email: "."". $row['email'];	
                
                }
        }
        ?>
            </div>
        </div>
    </div>
    <!--end display none -->
</section>


<aside>
What would you like to do today?
  <ul>
    <li><a href="module1">Conduct a survey</a></li>
    <li><a href="module2">Analyze data</a></li>
  </ul>
</aside>
</body>
<footer>
  <address>
  123 UTA blvd, Arlington Texas. 76019
  </address>
</footer>
</html>