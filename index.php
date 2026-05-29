<?php
/**
 * Project Name: DeyDospagoda
 * File Name: index.php
 * Description: Primary entrance script acting as a tactical traffic router.
 */

// Initialize session and security core configurations
require_once 'includes/middleware.php';

// Check if a valid user session is already established
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    
    // User is authenticated -> Route directly to the system interactive dashboard
    header("Location: dashboard.php");
    exit;
    
} else {
    
    // User is unauthenticated -> Route to the secure authentication gate
    header("Location: login.php");
    exit;
}
?>