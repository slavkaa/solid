<?php

declare(strict_types=1);

namespace Dto;

class InputData
{
    private string $sourceId;

    private string $message;

    public function __construct(string $sourceId, string $message)
    {
        $this->sourceId = $sourceId;
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSourceId(): string
    {
        return $this->sourceId;
    }
}
