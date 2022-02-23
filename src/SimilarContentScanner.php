<?php

namespace FileCounter;

class SimilarContentScanner
{
    public static function getSummaries(array $files): array
    {
        $contents = [];

        foreach ($files as $file) {
            $content = file_get_contents($file);

            if (array_key_exists($content, $contents)) {
                $contents[$content] += 1;
            } else {
                $contents[$content] = 1;
            }
        }

        return $contents;
    }

    public static function getHumanFriendlySummaries(array $summaries): array
    {
        $result = [];

        foreach ($summaries as $content => $total) {
            $result[] = "{$content} {$total}";
        }

        return $result;
    }

    public static function getHumanFriendlyBiggerSummary($summaries): string
    {
        $biggerNumber = max($summaries);
        $content = array_search($biggerNumber, $summaries);
        return "{$content} {$biggerNumber}";
    }
}
