<?php

interface iReportCsv
{
    /**
     * @return string
     */
    public function getColumnSeparator() : string;

    /**
     * @param string $columnSeparator
     * @return iReport
     */
    public function setColumnSeparator(string $columnSeparator) : iReport;
}