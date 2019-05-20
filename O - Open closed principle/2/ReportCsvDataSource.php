<?php

class ReportCsvDataSource implements iReport, iReportCsv
{
    public function getData(): mixed
    {
        // TODO: Implement getData() method.
    }

    public function setColumnSeparator(string $columnSeparator): iReport
    {
        // TODO: Implement setSeparator() method.

        return $this;
    }

    public function getColumnSeparator(): string
    {
        // TODO: Implement getSeparator() method.
    }
}