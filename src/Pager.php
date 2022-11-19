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

    public function getLinkForPage($page, $perPage)
    {
        $link = str_replace("{page}", $page, $this->linkTemplate);
        $link = str_replace("{perPage}", $perPage, $link);

        return $link;
    }
}
