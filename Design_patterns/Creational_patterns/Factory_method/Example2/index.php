<?php

declare(strict_types=1);

require_once (__DIR__ . '/Dto/InputData.php');
require_once (__DIR__ . '/Dto/ParsingResult.php');
require_once (__DIR__ . '/Collectors/DataCollectorInterface.php');
require_once (__DIR__ . '/Collectors/Bet365DataCollector.php');
require_once (__DIR__ . '/Collectors/BetGeniusDataCollector.php');
require_once (__DIR__ . '/CollectorsFactory.php');

use Dto\InputData;

// BetGenius
$inputMessageBG = new InputData('1', 'football;Premier League;Liverpool;Manchester United;1;0');

// Bet365
$inputMessageB365 = new InputData('2', 'football::Premier League::Liverpool::Manchester United::1::0');

$factory = new CollectorsFactory();
try {
    $collector = $factory->createCollector($inputMessageBG->getSourceId());
    $result = $collector->processData($inputMessageBG);
    var_dump($result);

    echo "\n\n";

    $collector = $factory->createCollector($inputMessageB365->getSourceId());
    $result = $collector->processData($inputMessageB365);
    var_dump($result);
} catch (Exception $e) {
    echo $e->getMessage();
}

/**
 * Factory class is extremal case of Factory method.
 *
 * When you need to add new parser only one place will be changed - CollectorsFactory class, also you need add DataCollector implementation.
 * No other old cade will be affected.
 * We can move Factory implementation to AbstractDataCollector class. But it has some disadvantages:
 * 1. We can`t create dataCollector in other classes if we need it.
 * 2. When amount of Collectors and project as is will grow, choosing logic can become more complicated.
 *      It will grow AbstractDataCollector class.
 *      We will separate logic in different methods, and they will mess with data collection business logic.
 *      It will make class unreadable and hard to understand.
 *
 * If you need to change parsing logic you need to change only one class in Collectors folder.
 *
 * DTO ensure you will never need to change input and output interfaces.
 */
