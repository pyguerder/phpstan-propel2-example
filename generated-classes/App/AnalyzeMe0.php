<?php

namespace App;

use App\Model\BookQuery;
use Propel\Runtime\Collection\ObjectCollection;

class AnalyzeMe0
{
    public function searchBook(string $searchTerm): ObjectCollection
    {
        return BookQuery::create()->find();
    }
}