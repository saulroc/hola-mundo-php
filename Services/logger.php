<?php

class Logger
{
    private string $nombreFicheroLog;

    public function __construct($nombreFicheroLog)
    {
        $this->nombreFicheroLog = $nombreFicheroLog;
    }

    public function log(string $message)
    {
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents($this->nombreFicheroLog, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
    }
}