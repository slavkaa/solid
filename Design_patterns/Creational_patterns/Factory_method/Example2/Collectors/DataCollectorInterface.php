<?php

declare(strict_types=1);

namespace Collectors;

use Dto\InputData;
use Dto\ParsingResult;

interface DataCollectorInterface
{
    public function processData(InputData $message): ParsingResult;
}
