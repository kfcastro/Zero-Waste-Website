<!---The display.php and displayContact.php under 
the Database are additional files for the database. 
Its purpose is to display the data from the database to the owner/team. --->

<?php
    include 'DBConnector.php';

    // select from contact_us table
    $sql = "SELECT * FROM contact_us";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0){

        while($row = $result -> fetch_assoc()){
            
            // will display or include these in the table in display.php
            echo "<tr>".
                "<td align='center'>".$row["contactID"]."</td>".
                "<td align='center'>".$row["cname"]."</td>".
                "<td align='center'>".$row["email"]."</td>".
                "<td align='center'>".$row["contactDate"]."</td>".
                "<td align='center'>".$row["cmessage"]."</td>".
            "</tr>";
        }
    }
    else{
        echo "0 results";
    }
    $conn->close();
?>
