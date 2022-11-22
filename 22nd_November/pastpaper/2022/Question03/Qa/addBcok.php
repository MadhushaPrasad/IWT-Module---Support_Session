<?php

include "config.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Add Book Information</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label for="bookName">Name of the book : </label>
    <input id="bookName" type="text" name="bookName">
    <br>
    <br>

    <label for="category">Category : </label>
    <select id="category" name="category">
        <option value="1">Fiction</option>
    </select>
    <br>
    <br>

    <label for="bookName">Image to upload : </label>
    <input id="bookName" type="file" name="bookName">
    <br>
    <br>

    <label for="stockAvailability">Stock Availability : </label>
    <input id="stockAvailability" type="radio" name="stockAvailabilityR">
    <label for="stockAvailability">Yes</label>
    <input id="stockAvailability" type="radio" name="stockAvailabilityR">
    <label for="stockAvailability">No</label>
    <br>
    <br>

    <label for="availableStores">Available stores: </label>
    <input id="availableStores" type="checkbox" name="availableStores">
    <label for="availableStores">Colombo 05</label>
    <input id="availableStores" type="checkbox" name="availableStores">
    <label for="availableStores">Colombo 04</label>
    <input id="availableStores" type="checkbox" name="availableStores">
    <label for="availableStores">Colombo 03</label>
    <br>
    <br>

    <label for="category">Publication Year : </label>
    <select id="category" name="category">
        <option value="1">2021</option>
    </select>
    <br>
    <br>

    <label for="price">Price : </label>
    <input id="price" type="text" name="price">

    <br>
    <br>
    <button name="btnSubmit">submit</button>
</form>

<?php
if (isset($_POST['btnSubmit'])) {
    $bookName = $_POST['bookName'];
    $category = $_POST['category'];
    $image = $_POST['bookName'];
    $stockAvailability = $_POST['stockAvailabilityR'];
    $availabilityStore = $_POST['availableStores'];
    $publicationYear = $_POST['category'];
    $price = $_POST['price'];

    $sql = "INSERT INTO book (book_name, category, image, stock_availability, availability_store, publication_year, price) 
                            VALUES ('$bookName', '$category', '$image', '$stockAvailability', '$availabilityStore', '$publicationYear', '$price')";
    $res = $connection->query($sql);
    if ($res && $connection->affected_rows > 0) {
        echo "Successfully added";
    } else {
        echo "Error";
    }
}


?>

</body>
</html>