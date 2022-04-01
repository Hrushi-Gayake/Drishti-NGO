
<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $amount = $_POST['amount'];

        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "drishti";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `payments` (`name`, `email`, `Phone`, `amount`,`payment_date`) VALUES ('$name', '$email', '$phone','$amount', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if($result){
        echo '<h1 style="color:green; text-align:center;">Your Form for donation has been Submmitted Successfully!!!!!!</h1> 
        <br><h3 style="color:brown; text-align:center;">Click the following Button to Donate</h3><br><button style="margin-left:45%; padding:20px;font-size:20px; cursor:pointer; background-color:powderblue;" onclick="history.back()">
        Donate
        </button>';
        }
       
      }

    }

    
?>
