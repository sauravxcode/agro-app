<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <title>Header</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.png" />
</head>

<body>
    <nav>
        <a href="../index.php"><img class="logo" src="../assets/image/logo.png" alt="AgroApp Logo" /></a>
        <a 
        href="
            <?php 
                include_once("session_start.php");
                if (isset($_SESSION["active"])){
                    echo "../logout.php";
                }
                else{
                    echo "../login.php";
                }
            ?>"
        class="logout-btn">
            <button>
            <?php 
                if (isset($_SESSION["active"]))
                    echo "Logout";
                else
                    echo "Login";
            ?>
            </button>
        </a>
    </nav>
    <section class="menu-section">
    <div class="nav_container">
        <p class="welcome-text">Welcome 
            <?php 
                if (isset($_SESSION["active"]))
                    echo $_SESSION["name"];
                else
                    echo "Guest";
            ?> 
        
        </p>
        <?php if (isset($_SESSION["active"])) { 
            if ($_SESSION["username"]!="admin"){?>
            <ul class="nav__links">
                <li><a href="dashboard.php" class="nav__item">DASHBOARD</a></li>
                <li><a href="myschemes.php" class="nav__item">My Schemes</a></li>
                <li><a href="myprofile.php" class="nav__item">My Profile</a></li>
            </ul>
        <?php }
            else{ ?>
            <ul class="nav__links">
                <li style="list-style : none" ><a href="../admin/admin-db.php" class="nav__item">DASHBOARD</a></li>
                <li style="list-style : none" ><a href="../admin/edit-schemes.php" class="nav__item">EDIT SCHEMES</a></li>
                <li style="list-style : none" ><a href="../admin/edit-user.php" class="nav__item">EDIT USERS</a></li>
            </ul>
        <?php }} else{ ?>
            <ul class="nav__links">
                <li><a href="dashboard.php" class="nav__item">DASHBOARD</a></li>
            </ul>
        <?php }?>
    </div>
</section>

</body>

</html>
