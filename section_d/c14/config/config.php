<?php
define('DEV', true);  // In development or live? Development = true | Live = false

// DOC_ROOT is created because the download code has several versions of the sample site
// On a live site a single forward slash / would indicate the document root folder
// The book just used a path, but these lines allow your code to run if they are in a different folder
$this_folder   = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])); // Folder this file is in
$parent_folder = dirname($this_folder);                      // Parent of this folder
define("DOC_ROOT", $parent_folder . '/public/');             // Document root


// Database settings
$type     = 'mysql';                 // Type of database
$server   = 'localhost';             // Server the database is on
$db       = 'phpbook-1';             // Name of the database
$port     = '';                      // Port is usually 8889 in MAMP and 3306 in XAMPP
$charset  = 'utf8mb4';               // UTF-8 encoding using 4 bytes of data per character
$username = 'YOUR USERNAME';         // Enter YOUR username here
$password = 'YOUR PASSWORD';         // Enter YOUR password here

// DO NOT CHANGE NEXT LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN

// File upload settings
define('UPLOADS', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR); // Image upload folder
define('MEDIA_TYPES', ['image/jpeg', 'image/png', 'image/gif',]); // Allowed file types
define('FILE_EXTENSIONS', ['jpeg', 'jpg', 'png', 'gif',]);       // Allowed file extensions
define('MAX_SIZE', '5242880');                                    // Max file size