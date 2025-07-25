<!DOCTYPE html>
<html lang="en">
  <!--Created by Tivotal-->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Billing Details Submission</title>

    <!-- External CSS links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="css/php.css" />
  </head>
  <body>
    <!-- Header section -->
    <header class="header">
      <a href="#" class="logo"><span>M</span>M</a>
      <awh class="main">
        <h3>
          <span> METROMINGLE </span>
        </h3>

      <nav class="navbar">
        <a href="main1.html">home</a>
        <a href="data.php">event information</a>
        <a href="data2.php">payment details</a>
        <a href="data3.php">contact us</a>

      </nav>
      <div id="menu-bars" class="fas fa-bars"></div>
    </header>
<?php
// Define the path to the CSV file
$file = 'data.csv';

// Append new user data to the CSV file when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = [
        $_POST['user-name'],
        $_POST['email'],
        $_POST['area'],
        $_POST['dob'],
        $_POST['time'],
        $_POST['budget'],
        $_POST['event'],
        $_POST['addons']
    ];

    // Open the file in append mode
    $fileHandle = fopen($file, 'a');
    
    // Write the new user data as a CSV row
    fputcsv($fileHandle, $userData);
    
    // Close the file
    fclose($fileHandle);

    echo "<script>
    alert('Thank you for your response!');
    window.location.href = 'index1.html'; // Redirect to help.html after submission
</script>";
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Event Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 50px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #96bccc;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Submitted Event Details</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Area</th>
            <th>Event Date</th>
            <th>Event Time</th>
            <th>Budget</th>
            <th>Event Type</th>
            <th>Add-ons</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check if the CSV file exists
        if (file_exists($file)) {
            // Open the file in read mode
            $fileHandle = fopen($file, 'r');
            
            // Loop through each row in the file and display it in the table
            while (($row = fgetcsv($fileHandle)) !== false) {
                echo '<tr>';
                foreach ($row as $cell) {
                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                }
                echo '</tr>';
            }
            fclose($fileHandle);
        } else {
            echo '<tr><td colspan="8">No data available yet.</td></tr>';
        }
        ?>
    </tbody>
</table>

<a href="regform.html">Back to Registration</a>

</body>
</html>
