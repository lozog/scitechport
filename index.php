<?php
session_start();
?>
<?php
if ($_COOKIE['teacher'] == 1)
{
    echo '<script type="text/javascript">
        window.location = "index_teacher.php"
        </script>';
}
else
{
    include 'connect_db.php';
    
    if (isset($_POST['Submit1']))
    {
        include 'login_submit.php';
    }
    if (isset($_POST['Submit2']))
    {
        include 'register-submit.php';
    }
    if (isset($_POST['Submit_teacher']))
    {
        include 'login_submit_teacher.php';
    }
    if ($_GET['logout'] == 2)
    {
        include 'logout.php';
    }
?>
<!DOCTYPE>
<html class="no-js">
<head>
    <title>portfoliopro</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="js/modernizr.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
    <script src="js/placeholder.js"></script>
    <!--<script src="js/num-only.js"></script>-->
    <script type = "text/javascript">
function onlyNumbers(evt)
{
    var e = event || evt; 
    var charCode = e.which || e.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;

}
</script>
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="header">
        <a href="index.php"><div id="logo"></div></a>
    </div>
    <?php
    if (isset($_COOKIE['ID_my_site']))
    {
        $student_number = $_COOKIE['ID_my_site'];
        $password       = $_COOKIE['Key_my_site'];
        
        if(isset($_SESSION['rubric'])) {
        if ($_GET['rubric'] == 9)
        {
            $_SESSION['rubric'] = 9;
        }
        elseif ($_GET['rubric'] == 10)
        {
            $_SESSION['rubric'] = 10;
        }
        elseif ($_GET['rubric'] == 11)
        {
            $_SESSION['rubric'] = 11;
        }
        elseif ($_GET['rubric'] == 12)
        {
            $_SESSION['rubric'] = 12;
        }
        }
        else {
        
        $result4 = mysqli_query($connection, "SELECT * FROM Users WHERE student_number='$student_number'");
        while($row4 = mysqli_fetch_array($result4))
          {
          $defaultrubric = $row4['grade'];
          }
        $_SESSION['rubric'] = $defaultrubric;
        }
        
        $table = mysqli_query($connection, "SELECT * FROM Users WHERE student_number = '$student_number'") or die(mysql_error());
        while ($row2 = mysqli_fetch_array($table))
        {
            //if the cookie has the wrong password, they are taken to the login page 
            if ($password != $row2['password_hash'])
            {
                //die("incorrect password in the cookie");
                $incorrect_password = TRUE;
            }
        }
        if ($incorrect_password == TRUE)
        {
            include 'login.php';
        }
        //otherwise they are shown the admin area    
        else
        {
            include 'getrubric.php';
            include 'member-nav.php';
        }
        mysqli_close($connection);
    }
?>
    <div id="content">
    <?php
    /*if($_GET['editrubric'] == 91) {
        include 'rubric/9/9a1.php';
    }
    else {*/
    switch($_GET['editrubric'])
{
case 91:
include 'rubric/9/9a1.php';
break;
case 92:
include 'rubric/9/9a2.php';
break;
case 93:
include 'rubric/9/9a3.php';
break;
case 94:
include 'rubric/9/9b1.php';
break;
case 95:
include 'rubric/9/9b2.php';
break;
case 96:
include 'rubric/9/9b3.php';
break;
case 97:
include 'rubric/9/9b4.php';
break;
case 98:
include 'rubric/9/9c1.php';
break;
case 99:
include 'rubric/9/9d1.php';
break;
case 101:
include 'rubric/10/10a1.php';
break;
case 102:
include 'rubric/10/10a2.php';
break;
case 103:
include 'rubric/10/10a3.php';
break;
case 104:
include 'rubric/10/10a4.php';
break;
case 105:
include 'rubric/10/10a5.php';
break;
case 106:
include 'rubric/10/10b1.php';
break;
case 107:
include 'rubric/10/10b2.php';
break;
case 108:
include 'rubric/10/10b3.php';
break;
case 109:
include 'rubric/10/10c1.php';
break;
case 1010:
include 'rubric/10/10d1.php';
break;
case 1010:
include 'rubric/10/10d1.php';
break;
case 111:
include 'rubric/11/11a1.php';
break;
case 112:
include 'rubric/11/11a2.php';
break;
case 113:
include 'rubric/11/11b1.php';
break;
case 114:
include 'rubric/11/11b2.php';
break;
case 115:
include 'rubric/11/11b3.php';
break;
case 116:
include 'rubric/11/11c1.php';
break;
case 117:
include 'rubric/11/11d1.php';
break;
case 121:
include 'rubric/12/12a1.php';
break;
case 122:
include 'rubric/12/12a2.php';
break;
case 123:
include 'rubric/12/12b1.php';
break;
case 124:
include 'rubric/12/12b2.php';
break;
case 125:
include 'rubric/12/12b3.php';
break;
case 126:
include 'rubric/12/12b4.php';
break;
case 127:
include 'rubric/12/12c1.php';
break;
case 128:
include 'rubric/12/12d1.php';
break;
default:
    if (isset($_POST['Submit_settings']))
    {
        include 'passchange_submit.php';
    }
    else
    {
        if ($_GET['settings'] == 2)
        {
            include 'settings.php';
        }
        else
        {
            if (isset($_COOKIE['ID_my_site']))
            {
                if (isset($_SESSION['rubric']))
                {
                    if ($_SESSION['rubric'] == 9)
                    {
                        include 'rubricgrade9.php';
                    }
                    elseif ($_SESSION['rubric'] == 10)
                    {
                        include 'rubricgrade10.php';
                    }
                    elseif ($_SESSION['rubric'] == 11)
                    {
                        include 'rubricgrade11.php';
                    }
                    elseif ($_SESSION['rubric'] == 12)
                    {
                        include 'rubricgrade12.php';
                    }
                    else
                    {
                        echo "Error";
                    }
                }
                else
                {
                    echo "choose a grade rubric";
                }
            }
            else
            {
                if ($_GET['register'] == 2)
                {
                    include 'register-submit.php';
                    include 'register.php';
                    include 'landing.php';
                }
                else
                {
                    if ($_GET['login_teacher'] == 2)
                    {
                        include 'login_teacher.php';
                        include 'landing.php';
                    }
                    else
                    {
                        include 'login.php';
                        include 'landing.php';
                    }
                }
            }
        }
    }
    }
?>
    </div>
</body>
</html>
<?php
}
?>