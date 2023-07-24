<?php

declare(strict_types=1);

namespace Collectors;

use Dto\InputData;
use Dto\ParsingResult;

class BetGeniusDataCollector implements DataCollectorInterface
{
    public function processData(InputData $message): ParsingResult
    {
        $result = new ParsingResult();
        $list = explode(';', $message->getMessage());
        $result->setFromArray($list);

        return $result;
    }
}
