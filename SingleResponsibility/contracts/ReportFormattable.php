<?php
namespace Vishalsuri\SolidPrincipal\SingleResponsibility\contracts;
use Vishalsuri\SolidPrincipal\SingleResponsibility\Report;

interface ReportFormattable
{
    public function format(Report $report);
}