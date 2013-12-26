<?php

include 'route.php';
include 'functions.php';

$route = new Route();

/*
 * Here's how this system works.  http://nopmc.com/ is the base url.  Anything appened onto the URL eg; http://nopmc.com/staff
 * Will redirect a user to the page located in '/pages/staff.php'.  This is the case for any page name that is appened to the URL.
 * If the page does not exist, (TODO:) it display to the user a 404 Page Not Found.
 * If there is a page that is not hosted by the base URL, you can specify it below under 'URL Redirects'.
 */

//// If there are no arguments appeneded to the URL, take us to the home page
$route->add('/', function() {
            loadPage("home");
        });

// Local redirects
// NOTICE:  Do not modify this.
$route->add('/.+', function($page) {
            loadPage($page);
        });

// URL Redirects
// Add another route for each site you would like to redirect to.
$route->add('/youtube', function() {
            redirectTo("http://youtube.com/");
        });
$route->add('/forum', function() {
            redirectTo("http://nopmc.com/forum");
        });



$route->submit();