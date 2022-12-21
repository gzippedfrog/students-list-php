<?php

class Paginator
{
    public static function getPrevPageLink()
    {
        $params = $_GET;

        if ($params['page'] < 2) {
            return;
        }

        $params['page']--;
        return '/?' . http_build_query($params);
    }

    public static function getNextPageLink($totalPages = 10)
    {
        $params = $_GET;

        if ($params['page'] >= $totalPages) {
            return;
        }

        $params['page']++;
        return '/?' . http_build_query($params);
    }
}