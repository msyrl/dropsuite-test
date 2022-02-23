<?php

namespace FileCounter;

class DirectoryScanner
{
    const EXCLUDED_NAMES = [
        '.',
        '..',
        '.DS_Store',
    ];

    public static function getFiles(string $target): array
    {
        $files = [];
        self::recursiveGetFiles($target, $files);
        return $files;
    }

    private static function recursiveGetFiles(string $target, array &$files)
    {
        if (is_file($target)) {
            $files[] = $target;
        } else {
            $targets = array_diff(scandir($target), self::EXCLUDED_NAMES);

            foreach ($targets as $value) {
                self::recursiveGetFiles($target . '/' . $value, $files);
            }
        }
    }
}
