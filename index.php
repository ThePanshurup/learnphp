<?php

class Job {
    public function task(Logger $logger) {
        for($i=0; $i<=10; $i++) {
            $logger = new ConsoleLogger();
            $logger->log("Task $i completed!");
        }
    }
} 

class ConsoleLogger {
    public function log($message) {
        echo "$message\n";
    }
}

class NothingLogger {
    public function log($message) {
        // 'Random kid'
    }
}

interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    } 
}

$job = new Job();
$logger = new FileLogger();
$job->task($logger);