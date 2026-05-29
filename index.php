<?php
/**
 * Project Name: DeyDospagoda
 * File Name: index.php (Production Fixed Routing Engine)
 * Description: Clean, fail-safe entry point that bypasses browser-side loading screens.
 */

// 1. Force HTTPS layer redirect on live hosting if accessed via insecure HTTP
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    // Protocol is already secure
} else {
    // Redirect to secure port variant instantly
    if ($_SERVER['HTTP_HOST'] !== 'localhost' && $_SERVER['HTTP_HOST'] !== '127.0.0.1') {
        $secure_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: " . $secure_url);
        exit;
    }
}

// 2. Safely initialize session tracking configurations 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 3. Routing Evaluation Matrix
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    
    // Valid session found -> Route directly to operations control center
    header("Location: dashboard.php");
    exit;
    
} else {
    
    // Anonymous traffic detected -> Route directly to secure authentication gateway
    header("Location: login.php");
    exit;
}
?>