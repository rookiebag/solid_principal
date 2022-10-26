<?php

namespace Vishalsuri\SolidPrincipal\SingleResponsibility;
use Vishalsuri\SolidPrincipal\SingleResponsibility\contracts\ReportFormattable;

/**
 * Single responsibility
 * JsonReportFormatter has only formatting related actions
 */
class JsonReportFormatter implements ReportFormattable
{
    public function format(Report $report)
    {
        return json_encode($report->getContents());
    }
}