<?php

namespace FileCounter;

class Application
{
    public static function main($target)
    {
        $files = DirectoryScanner::getFiles($target);

        if (count($files) < 1) {
            throw new \Exception("Error: There are no files at target directory.");
        }

        $summaries = SimilarContentScanner::getSummaries($files);
        $humanFriendlySummaries = SimilarContentScanner::getHumanFriendlySummaries($summaries);
        $humanhumanFriendlyBiggerSummary = SimilarContentScanner::getHumanFriendlyBiggerSummary($summaries);

        return json_encode([
            'files' => $humanFriendlySummaries,
            'bigger' => $humanhumanFriendlyBiggerSummary,
        ], JSON_PRETTY_PRINT);
    }
}
