<?php

function qb() {
    return new \ClanCats\Hydrahon\Builder(
        'mysql',
        function ($query, $queryString, $queryParameters) {
            return $queryString;
        }
    );
}
