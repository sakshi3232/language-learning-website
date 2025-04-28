<?php
    // This checks if the connection is HTTPS or not.
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        // If HTTPS is active, we start the URL with 'https://'
        $uri = 'https://';
    } else {
        // Otherwise, we use 'http://'
        $uri = 'http://';
    }
    
    // This appends the host name (your local or server domain) to the URL.
    // $_SERVER['HTTP_HOST'] gets the current domain (e.g., localhost or your domain name)
    $uri .= $_SERVER['HTTP_HOST'];

    // Redirects the browser to the /dashboard/ directory.
    // 'header' function sends an HTTP header to the browser, telling it to go to a new URL.
    header('Location: '.$uri.'/dashboard/');
    
    // Stops further script execution after the redirect.
    exit;
?>
