<?php

class ReportGeneratorCsv
{
    /**
     * @param iReport $reportDataSource
     */
    public function setDataSource(iReport $reportDataSource)
    {
        // TODO: Implement getData() method.
    }

    /**
     * @param iReportCsv $reportDataSource
     */
    public function setDataSourceCsv(iReportCsv $reportDataSource)
    {
        // TODO: Implement getData() method.

        $reportDataSource->getSeparator();
    }
}