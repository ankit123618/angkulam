<?php
$connection = mysqli_connect(getenv("HOST"), getenv("USER"), getenv("PASSWORD"), getenv("DATABASE"));
if(!$connection) {
    echo "Connection failed";
    logError("Connection failed");
}
else {
    echo "Connection Successful";
    logError("Connection Successful");
}
?>