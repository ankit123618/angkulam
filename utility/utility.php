<?php
// Function to log errors to a file
function logError($message) {
    // Create or open the log file in append mode
    $file = fopen(getenv("LOG_PATH"), 'a');

    // Add the current date and time to the log entry
    $logEntry = date('[Y-m-d H:i:s] ') . $message . "\n";

    // Write the log entry to the file
    fwrite($file, $logEntry);

    // Close the file
    fclose($file);
}
?>
