<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form store data</title>
    <link href="index1.css" rel="css/stylesheet">
    </head>
    <style>
        .back{
            width: 100%;
            height: 605px;
            background-image: url(images/1646764406023.jpg);
            background-position: center;
            background-size: cover;
        }
        h1{
            padding-top: 100px;
            
        }
        .header1{
            align-content: center;
            display: flex;
            width: 400px;
            height: 604px;
            margin-left: 500px;
            border: px solid d;
            border-radius: 5px;
            
        }
        form{
            display: table;
        }
        label{
                color: dimgray;
            font-size: 25px;
            display: table-cell;
            }
        input{
            border-radius: 5px 5px;
            display: table-cell;
        }
             
     
    </style>
    <body>
        <div class="back">
        <div class="header1">
    <center>
        <h1>Storing Form Data</h1>
        <form action="insert.php" method="post" onsubmit="return validation()">
        <p>
            <label for="full_name">Full Name : </label>
            <input type="text" name="full_name" id="fullName" required>
            </p>   
            
            <p>
            <label for="email">E-mail : </label>
            <input type="text" name="email" id="email" required>
            </p>      
            
            <p>
            <label for="country">Country : </label>
            <input type="text" name="Country" id="country" required>
            </p>
            
            <p>
            <label for="mobile_number">Mobile : </label>
            <input type="text" name="mobile_number" id="mobilenumber" required>
            </p>
            
            <p>
            <label for="review">Query : </label>
            <input type="text" name="review" id="review" required>
            </p>
        <input type="submit" value="Submit" >
            &nbsp;&nbsp;
            <input type="reset" value="clear">
        </form>
        
        </center>
            </div>            
        </div>
    </body>
    <script src="index.js" rel="text/javascript"></script>
</html>