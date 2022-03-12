<?php

    $conn=mysqli_connect("localhost","root","","details");

        if($conn)
        {
                   $fname= $_POST['firstname'];
                   $lname= $_POST['secondname'];
                   $email= $_POST['email'];
                   $phone= $_POST['phone'];

                $sql="INSERT INTO `personal` (`First Name`, `Last Name`, `email`, `phone`) VALUES ('$fname', '$lname', '$email', '$phone');";

                $result=mysqli_query($conn,$sql);

                if($result)
                {

                    echo "Data inserted successfully";
                }
                else
                    echo "Data not inserted";
          
        }
      else  
        die("Could not connect to".mysqli.error_string());   

        mysqli_close($conn);

?>