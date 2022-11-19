<?php
class Pager
{
    public $totalRecords;
    public $recordsPerPage;
    public $linkTemplate;

    public function __construct($totalRecords, $recordsPerPage, $linkTemplate)
    {
        $this->totalRecords = $totalRecords;
        $this->recordsPerPage = $recordsPerPage;
        $this->linkTemplate = $linkTemplate;
    }

    public function getTotalPages()
    {
        return ceil($this->totalRecords / $this->recordsPerPage);
    }

    public function getLinkForPage($page)
    {
        return str_replace("{page}", $page, $this->linkTemplate);
    }

    public function getLinkForLastPage()
    {
        return str_replace("{page}", $this->getTotalPages(), $this->linkTemplate);
    }
}
