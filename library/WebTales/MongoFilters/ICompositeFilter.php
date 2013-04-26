<?php
namespace WebTales\MongoFilters;

interface ICompositeFilter extends IFilter
{
    public function addFilter(IFilter $filter);
    
    public function setFilters(array $filters);
}

?>