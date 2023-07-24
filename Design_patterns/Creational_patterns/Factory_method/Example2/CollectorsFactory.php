<?php

declare(strict_types=1);

require_once (__DIR__ . '/Collectors/Bet365DataCollector.php');
require_once (__DIR__ . '/Collectors/BetGeniusDataCollector.php');
require_once (__DIR__ . '/Collectors/DataCollectorInterface.php');

use Collectors\DataCollectorInterface;
use Collectors\BetGeniusDataCollector;
use Collectors\Bet365DataCollector;

class CollectorsFactory
{
    public function createCollector(string $sourceId): DataCollectorInterface
    {
        switch ($sourceId) {
            case '1':
                return new BetGeniusDataCollector();
            case '2':
                return new Bet365DataCollector();
            default:
                throw new \Exception('Unknown collector ID');
        }
    }
}
