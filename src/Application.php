<?php

namespace FileCounter;

class Application
{
    public static function main($args)
    {
        if (count($args) < 2) {
            throw new \Exception("Error: Please provide target directory");
        }

        $targetDir = $args[1];

        return scandir($targetDir);
    }
}
