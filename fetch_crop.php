<?php
// Database connection
$servername = "HOST_NAME";
$username = "USERNAME";
$password = "PASSWORD";
$database = "DATABASE_NAME";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch crop information
$sql = "SELECT * FROM crops";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/crop_style.css">
    <title>Crop Information</title>
</head>
<body class="bg-gray-100"> <!-- Added style attribute for padding-top -->

    <nav>
        <a href="index.php"><img class="logo" src="assets/image/logo.png" alt=""/></a>
        <a 
            href="
                <?php 
                    include_once("includes/session_start.php");
                    if (isset($_SESSION["active"])){
                        echo "../logout.php";
                    }
                    else{
                        echo "../login.php";
                    }
                ?>"
            class="cta">
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
    <section class="crop-section">
        <h1 class="text-5xl font-bold text-center">Crop Information</h1>
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4 py-8">
            <?php
            // Display crop information using div elements
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='bg-white rounded-lg shadow-lg p-2 sm:p-4' data-aos='fade-up'  data-aos-offset='200' data-aos='zoom-in-up' data-aos-delay='50' data-aos-duration='500' data-aos-easing='ease-in-out' >";
                    echo "<img class='w-full rounded' src='assets/crops_images/" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
                    echo "<h3 class='text-lg font-bold mt-2'>" . $row['name'] . "</h3>";
                    echo "<p class='text-gray-700'><strong>Temperature:</strong> " . $row['temperature'] . "</p>";
                    echo "<p class='text-gray-700'><strong>Rainfall:</strong> " . $row['rainfall'] . "</p>";
                    echo "<p class='text-gray-700'><strong>Soil Type:</strong> " . $row['soil_type'] . "</p>";
                    echo "<p class='text-gray-700'><strong>Top Yielding States:</strong> " . $row['top_yielding_states'] . "</p>";
                    echo "<p class='text-gray-700'><strong>Fact:</strong> " . $row['fact'] . "</p>";
                    echo "<p class='text-gray-700'><strong>Supporting Schemes:</strong> " . $row['supporting_schemes'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p class='text-center'>No crops found!</p>";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
    </section>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
    <section class="footer-section">
        <footer class="footer">
            <div class="footer-left">
                <img src="assets/image/logo_black.png" alt="Company Logo">
            </div>
            <div class="footer-right">
                <ul class="social-links">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
        </footer>
    </section>
</body>
</html>
