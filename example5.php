<?php 

$startTime = microtime(true);

// https://www.php.net/manual/en/language.generators.overview.php
function xrange($start, $limit, $step = 1) {
    if ($start <= $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be positive');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be negative');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

$t = xrange(1, 100000000, 1);

foreach ($t as $number) {
    // echo "$number ";
}

$executionTime = microtime(true) - $startTime; // in second
$memoryPeak = memory_get_peak_usage() / 1024 / 1024; // in megabyte

echo round($executionTime, 2) . 's, ' . round($memoryPeak, 1) . 'MB '.PHP_EOL;
// on my pc
// for 1.000.000
// xrange 0.04s, 0.4MB
// range 0.02s, 32.4MB 
// for 100.000.000
// xrange 3.77s, 0.4MB 
// range 1.81s, 4096.3MB 