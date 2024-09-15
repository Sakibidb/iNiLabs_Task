<?php
interface LoggerInterface {
    public function log($message);
}

class FileLogger implements LoggerInterface {
    public function log($message) {
        file_put_contents("log.txt", $message . "\n", FILE_APPEND);
    }
}

class ConsoleLogger implements LoggerInterface {
    public function log($message) {
        echo $message . "\n";
    }
}

// Example usage
$file_logger = new FileLogger();
$file_logger->log("This is a log message written to file");

$console_logger = new ConsoleLogger();
$console_logger->log("This is a log message printed to console");
?>

<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Hello World!</title>
  </head>
  <body></body>
</html> -->
