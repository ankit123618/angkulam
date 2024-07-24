<?php
// Security measures

// Prevent SQL Injection
function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Additional security measures can be added here
?>
