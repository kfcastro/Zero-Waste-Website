<!---The display.php and displayContact.php under 
the Database are additional files for the database. 
Its purpose is to display the data from the database to the owner. --->

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Go Zero Waste: Contact</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&family=Raleway:ital,wght@0,200;0,400;0,600;0,700;1,100;1,200;1,500&display=swap" rel="stylesheet">
   <style>
    body{
        background: white;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        color: black;
        text-align: center;  
    }
    table, th, td{
        border: 1px solid gray;
    }
    th{
        color: #749100;
        font-size: 16px;
    }
    td{
        text-align: left;
    }
   </style>
</head>

<body>
    <!--Title--->
    <h1 style="color: #749100">GOZEROWEBSITE DATABASE</h1>
    <br>
    <h2 style="color: black; text-align: left;">Contact Us Table</h2>
    <!--Table--->
    <table style="width:100%">
        <tr>
            <th>Contact ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Message</th>
        </tr>
    <!--To connect/access to the displayContact--->
    <?php
        include 'displayContact.php';
    ?>
    </table>

</body>
</html>