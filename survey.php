<!DOCTYPE html>
<html>
  <head>
      <!--
CASEY SMITH
PROJECT 4 DOCUMENT D
DUE DATE Sunday, March 25, 2018, 12:00 AM
THIS PROJECT DEMONSTRATES THE ABILITY TO SET UP A DATABASE IN 
PHPMYADMIN USING MYSQL AND BEING ABLE TO ESTABLISH A CONNECTION
TO THE DATABASE AND THEN WRITING DATA TO THE COLUMNS BASED ON USER INPUT
FROM A FORM. THIS SOLUTION WILL SEND SURVEY RESULTS TO A DATABASE.
-->
    <title>Flight Survey</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Flight Survey</h1>
    <p>Fill out the information below to submit your survey.</p>
    <!-- Create a Form Post method to allow users to input info to database -->
      <!-- This is the form with all of the input values and placeholder text -->
<form action="E.php" method="post">
<label>Date:</label>
<input type="date" name="date" placeholder="Departure Date">
<label>Time of flight:</label>
<input type="time" name="time" placeholder="Time of Flight">
<br><br>

 <strong>1. Friendliness of customer staff?</strong><br>
  <input type="radio" name="one" value="No Opinion"> No Opinion<br>
  <input type="radio" name="one" value="Poor"> Poor<br>
  <input type="radio" name="one" value="Fair"> Fair<br>
  <input type="radio" name="one" value="Good"> Good<br>
  <input type="radio" name="one" value="Excellent"> Excellent<br><br>


  <strong>2. Comfort of seating?</strong><br>
  <input type="radio" name="two" value="No Opinion"> No Opinion<br>
  <input type="radio" name="two" value="Poor"> Poor<br>
  <input type="radio" name="two" value="Fair"> Fair<br>
  <input type="radio" name="two" value="Good"> Good<br>
  <input type="radio" name="two" value="Excellent"> Excellent<br><br>

  <strong>3. Cleanliness of aircraft?</strong><br>
  <input type="radio" name="three" value="No Opinion"> No Opinion<br>
  <input type="radio" name="three" value="Poor"> Poor<br>
  <input type="radio" name="three" value="Fair"> Fair<br>
  <input type="radio" name="three" value="Good"> Good<br>
  <input type="radio" name="three" value="Excellent"> Excellent<br><br>

  <strong>4. Noise level of aircraft?</strong><br>
  <input type="radio" name="four" value="No Opinion"> No Opinion<br>
  <input type="radio" name="four" value="Poor"> Poor<br>
  <input type="radio" name="four" value="Fair"> Fair<br>
  <input type="radio" name="four" value="Good"> Good<br>
  <input type="radio" name="four" value="Excellent"> Excellent<br><br>

  <strong>5. Depart on time?</strong><br>
  <input type="radio" name="depart" value="Yes"> Yes<br>
  <input type="radio" name="depart" value="No"> No<br><br>

  <strong>6. Arrive on time?</strong><br>
  <input type="radio" name="arrive" value="Yes"> Yes<br>
  <input type="radio" name="arrive" value="No"> No<br>
<br><br>

  <input type="submit" name="submit" value="submit"><br>

</form><br>
    <br>
    <br>


  </body>

  <?php
 

  // Set up the conditional logic to query the results based on the
  // users filters.

  if (isset($_POST['date'])) {
    if (isset($_POST['time'])) {
      if (isset($_POST['one'])) {
        if (isset($_POST['two'])) {
          if (isset($_POST['three'])) {
            if (isset($_POST['four'])) {
              if (isset($_POST['depart'])) {
                if (isset($_POST['arrive'])) {
    
  
   
    // Variables to get a connection to the database
  $servername = "localhost";
  $username = "enterYourUN";
  $password = "enterYourPW";
  $dbname = "surveys";

  // Variable to get all the user input
  $theDate = $_POST['date']; // Get the user input for date
  $flightDate = date("Y-m-d", strtotime($theDate)); // Convert the date into proper format
  $theTime = $_POST['time']; // Get the user input for time
  $flightTime = date("h:i:a", strtotime($theTime)); // Convert the time into proper format
  $friendliness = $_POST['one'];
  $comfort = $_POST['two'];
  $cleanliness = $_POST['three'];
  $noise = $_POST['four'];
  $departOnTime = $_POST['depart'];
  $arriveOnTime = $_POST['arrive'];
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 



  // Attempt insert query execution
  // Insert the above variables into proper columns

$sql = "INSERT INTO surveys (flight_date, time_of_flight, friendliness, comfort, cleanliness, noise, depart_on_time, arrive_on_time) VALUES ('$flightDate', '$flightTime', '$friendliness', '$comfort', '$cleanliness', '$noise', '$departOnTime', '$arriveOnTime')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
// Close connection
mysqli_close($conn);

              }
            }
          }
        }
      }
    }
  }
}

echo "Must fill in all form options before submitting!"

  ?>




</html>
