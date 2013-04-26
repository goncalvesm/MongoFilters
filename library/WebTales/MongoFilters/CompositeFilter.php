<?php
namespace WebTales\MongoFilters;

abstract class CompositeFilter extends AbstractFilter implements ICompositeFilter
{
    protected $_filtersArray = array();
    
	/* (non-PHPdoc)
     * @see \WebTales\MongoFilters\ICompositeFilter::addFilter()
     */
    public function addFilter (\WebTales\MongoFilters\IFilter $filter)
    {
        $this->_filtersArray[] = $filter;
        return $this;
    }
    

    public function setFilters(array $filters)
    {
        $this->_filtersArray = array();
    
        foreach ($filters as $filter) {
            if(!$filter instanceof IFilter){
                throw new Exception(__METHOD__.' only accepts IFilter instance');
            }
            $this->addFilter($filter);
        }
    
        return $this;
    }

    
}

?>