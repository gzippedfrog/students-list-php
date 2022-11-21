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

    public function getLinkForPrevPage($page, $perPage)
    {
        $prevPage = (($page - 1) < 1) ? 1 : $page - 1;

        return $this->getLinkForPage($prevPage, $perPage);
    }

    public function getLinkForNextPage($page, $perPage)
    {
        $pages = $this->getTotalPages();
        $nextPage = (($page + 1) > $pages) ? $pages : $page + 1;

        return $this->getLinkForPage($nextPage, $perPage);
    }

}
