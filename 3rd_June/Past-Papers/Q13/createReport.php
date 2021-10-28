<?php
$connection = new mysqli("localhost", "root", "", "bookshop");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Book Shop</title>
</head>
<body>
<h1>Sales Report Of the first quarter(January-April)</h1>
<table border="1">
    <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Price</th>
        <th>Books Sold</th>
        <th>Month</th>
    </tr>
    <?php
    $sqlQuery = 'SELECT bookid,bookName,bookPrice,bookQtySold,bookMonthSold,SUM(bookQtySold*bookPrice) 
                AS TotalSales from sales WHERE bookMonthSold= "January" OR bookMonthSold= "February" 
                OR bookMonthSold= "March" OR bookMonthSold= "April"  GROUP BY bookid';

    $monthlySoldSalary = 0;

    $salesList = $connection->query($sqlQuery);
    while ($salesListArray = $salesList->fetch_assoc()) {
        echo "<tr>" .
            "<td>" . $salesListArray['bookid'] . "</td>" .
            "<td>" . $salesListArray['bookName'] . "</td>" .
            "<td>" . $salesListArray['bookPrice'] . "</td>" .
            "<td>" . $salesListArray['bookQtySold'] . "</td>" .
            "<td>" . $salesListArray['bookMonthSold'] . "</td>" .
            "</tr>";
        $monthlySoldSalary += $salesListArray['TotalSales'];
    }
    ?>

</table>
<?php
echo "<h3>Total sales for this quarter is: RS: $monthlySoldSalary</h3>"
?>
</body>
</html>
