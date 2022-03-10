<!DOCTYPE html>
<html>
<head>
    <title>Insert page </title>
</head>
    <style>
        .back{
            background: rgb(31,150,208);
            background: linear-gradient(90deg, rgba(31,150,208,1) 0%, rgba(253,171,29,1) 50%, rgba(199,63,104,1) 100%);
        }
    </style>
    <body class="back">
        <center>
            <?php
               $conn = mysqli_connect("localhost", "root","","shop");
            
            if($conn === false){
                die("ERROR:could not connect. "
                   .mysqli_connect_error());
                    
            }
            
            $full_name = $_REQUEST["full_name"];
            $email = $_REQUEST['email'];
            $Country = $_REQUEST['Country'];
            $mobile_number = $_REQUEST['mobile_number'];
            $review = $_REQUEST['review'];
            
            
            $sql = "INSERT INTO review VALUES('$full_name', '$email', '$Country', '$mobile_number', '$review')";
            
            if (mysqli_query($conn,$sql)) {
                echo "<h3>Your query have been send to our office !!!"
                    ."\nWe will contact you soon!!!";
               
            }else
            {
            
                echo "ERROR:HUSH! Sorry $sql. "
                 .mysqli_error($conn);
            }
            mysqli_close($conn);
              ?>
                
        </center>
    </body>
</html>