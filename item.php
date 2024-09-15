<?php include("config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <h2>Enter Product Details</h2>
    
   <center> <form class="form-control" action="" method="post" enctype="multipart/form-data">
        <!-- Select Type -->
         <!-- Upload Image -->
        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br><br>
        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="">Select Type</option>
            <option value="processor">Processor</option>
            <option value="display">Display</option>
            <option value="battery">Battery</option>
            <option value="sensor">Sensor</option>
            <option value="ram">RAM</option>
            <option value="rom">ROM</option>
            <option value="front-cam">Front Camera</option>
            <option value="rear-cam">Rear Camera</option>
            <option value="speaker">Speaker</option>
            <option value="mic">Mic</option>
            <option value="ports">Ports</option>
            <option value="modem">Modem</option>
            <option value="antennas">Antennas</option>
        </select>
        <br><br>
        

        <!-- Select End -->
        <label for="end">End:</label>
        <select name="end" id="end" required>
            <option value="">Select End</option>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
        <br><br>

        <!-- Enter Name -->
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>

        <!-- Enter Price -->
        <label for="price">Price (in USD):</label>
        <input type="number" name="price" id="price" required>
        <br><br>

        

        <button type="submit" name="submit">Submit</button>
    </form></center>
</body>
</html>


<?php
// Include database configuration
include('config.php');

if (isset($_POST['submit'])) {
    // Collect form data
    $type = $_POST['type'];
    $end = $_POST['end'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Handle image upload
    $target_dir = "assets/"; // Folder where the image will be stored
    $image = $_FILES['image']['name'];
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $upload_ok = 1;

    // Validate file type
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check !== false) {
        $upload_ok = 1;
    } else {
        echo "File is not an image.";
        $upload_ok = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $upload_ok = 0;
    }

   

    // Check file size (limit: 5MB)
    if ($_FILES['image']['size'] > 5000000) {
        echo "Sorry, your file is too large.";
        $upload_ok = 0;
    }

    // Try to upload file
    if ($upload_ok == 1) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            echo "The file " . htmlspecialchars(basename($image)) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert data into the database if the image was uploaded successfully
    if ($upload_ok == 1) {
        // Prepare the SQL statement to insert form data
        $stmt = $db_conn->prepare("INSERT INTO items (`type`, `end`, `name`, `price`, `img`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssds", $type, $end, $name, $price, $image);

        // Execute the query
        if ($stmt->execute()) {
            echo "<h3>Record inserted successfully!</h3>";
            echo "Type: $type <br>";
            echo "End: $end <br>";
            echo "Name: $name <br>";
            echo "Price: $price <br>";
            echo "Image: <img src='assets/$image' alt='$name' style='width:150px;'><br>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the database connection
    $db_conn->close();
}
?>
