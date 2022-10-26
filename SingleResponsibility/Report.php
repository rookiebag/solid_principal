<?php

namespace Vishalsuri\SolidPrincipal\SingleResponsibility;

/**
 * Single responsibility
 * Report has only report related actions
 */
class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2016-04-21';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}