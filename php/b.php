<?php
// Get the data from the AJAX request
$name = $_POST['name'];
$email = $_POST['email'];

// Perform any necessary data validation or sanitization

// Insert the data into the database
// Replace 'your_table' with the actual table name and 'your_connection' with the database connection
$query = "INSERT INTO your_table (name, email) VALUES ('$name', '$email')";
$result = mysqli_query($your_connection, $query);

if ($result) {
  echo "Data inserted successfully";
} else {
  echo "Error inserting data";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="myForm">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Submit</button>
      </form>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('#myForm').submit(function(e) {
    e.preventDefault(); // Prevent the form from submitting normally

    // Get the form data
    var formData = $(this).serialize();

    // Send AJAX request
    $.ajax({
      url: 'insert_data.php', // PHP script to handle the insertion
      type: 'POST',
      data: formData,
      success: function(response) {
        // Handle the response from the PHP script
        console.log(response);
        // You can display a success message or perform any other actions here
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        // Handle the error in case the AJAX request fails
      }
    });
  });
});
</script>
</body>
</html>