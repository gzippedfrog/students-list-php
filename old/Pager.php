<?php

class Pager
{
    public int $totalRecords;
    public int $perPage = 10;
    public string $linkTemplate;

    public function __construct($totalRecords, $linkTemplate)
    {
        $this->totalRecords = $totalRecords;
        $this->linkTemplate = $linkTemplate;
    }

    public function getTotalPages(): int
    {
        return ceil($this->totalRecords / $this->perPage);
    }

    public function getLinkForPage($page = 1, $sortColumn = 'points'): string
    {
        $link = str_replace("{page}", $page, $this->linkTemplate);
        $link = str_replace("{perPage}", $this->perPage, $link);

        return str_replace("{sortColumn}", $sortColumn, $link);
    }
}
