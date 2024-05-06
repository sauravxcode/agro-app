<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schemes - Agro App</title>

    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
</head>
<body>
  <?php include('../includes/header.php'); ?> 
  
  <section class="myschemes">
    <div class="header-container">
      <h4 class="header-line">MY SCHEMES</h4>
    </div>
    <div class="custom-panel">
      <div class="custom-panel-heading">
        My Schemes
      </div>
      <div class="custom-panel-body">
        <div class="table-responsive">
          <table class="custom-table" id="custom-data-table">
            <thead>
              <tr>
                <th>Scheme ID</th>
                <th>Scheme Name</th>
                <th>Description</th>
                <th>Apply Date</th>
              </tr>
            </thead>
    <tbody>
    <?php 
    include_once "../includes/config.php";

    $user_id = $_SESSION["id"];
    $query = "SELECT schemes.scheme_id, schemes.name, schemes.description, application.apply_date 
              FROM schemes, application 
              WHERE schemes.scheme_id = application.scheme_id AND application.user_id = '$user_id'";

    $result = mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $scheme_id = $row['scheme_id'];
        $name = $row['name'];
        $description = $row['description'];
        $apply_date = $row['apply_date'];
    ?>
            
              <tr>
                <td><?php echo $scheme_id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $description; ?></td>
                <td><?php echo $apply_date; ?></td>
              </tr>
    <?php 
      }
    } else {
      echo "<b>NO SCHEMES REGISTERED</b>";
    } mysqli_close($conn);?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  
  <?php  include('../includes/footer.php');?>
</body>

</html>
