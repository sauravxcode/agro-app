<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schemes - Agro App</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
</head>
<body>
<?php include_once('../includes/header.php'); ?>
<section class="scheme-section">

    <?php
    include_once('../includes/config.php');
    $query = "SELECT * FROM schemes";
    $result = mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($result)) {
        $scheme_id = $row['scheme_id'];
        $name = $row['name'];
        $description = $row['description'];
        $contact_info = $row['contact_info'];
        $launch_date = $row['launch_date'];
        $last_date = $row['last_date'];
        $ministry_name = $row['ministry_name'];
        $eligibilty = $row['eligibility_criteria'];
        $benefits = $row['benefits'];

        // Generate a unique id for each modal window
        $modal_id = "open-modal-$scheme_id";
        ?>

        <div class="scheme-container">
            <div class="scheme-text">
                <h1><?php echo "$scheme_id - $name"; ?></h1>
                <p><?php echo $description; ?></p>
                <div class="pop-container">
                    <div class="pop-interior">
                        <a class="view-details" href="#<?php echo $modal_id; ?>"> Read More</a>
                        <a class="view-details" 
                           href="
                           <?php 
                            if (isset($_SESSION["active"])){
                               echo "apply.php?scheme_id=$scheme_id";
                            }
                            else{
                              echo "../login.php";
                            }
                           ?>">
                           
                           Apply Now →</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="<?php echo $modal_id; ?>" class="modal-window">
            <div>
                <a href="#" title="Close" class="modal-close">Close X</a>
                <h1><?php echo $name; ?></h1>
                <div class="pop-para">
                    <p>
                        <strong>Scheme ID:</strong> <?php echo $scheme_id; ?> <br>
                    </p>
                    <p>
                        <?php echo $description; ?>
                    </p>
                    <ul>
                        <li><strong>Contact Info:</strong> <?php echo $contact_info; ?></li><br>
                        <li><strong>Launch Date:</strong> <?php echo $launch_date; ?></li><br>
                        <li><strong>Last Date:</strong> <?php echo $last_date; ?></li><br>
                        <li><strong>Ministry Name:</strong> <?php echo $ministry_name; ?></li><br>
                        <li><strong>Benefits:</strong> <?php echo $benefits; ?> </li><br>
                        <li><strong>Eligibility Criteria:</strong> <?php echo $eligibilty; ?> </li><br>
                    </ul>
                </div>
            </div>
        </div>

    <?php } 
    mysqli_close($conn); ?>

</section>

   <?php include('../includes/footer.php');?>
</body>
</html>
