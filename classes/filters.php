<?php
    require_once __DIR__ .'/filter.php';
        class Filters{
            private array $filters;
            public function __construct($filters){
            }
            public function getFilters(){
                return $this->filters;
            }
            public function setFilters($filters){
                $this->filters = $filters;
            }
            public function addFilter($filter){
                array_push($this->filters, $filter);
            }
            public function remoweFilterByName($filterName){
                $copy = [];
                foreach($this->filters as $filter){
                    if($filter->getName() == $filterName){
                        continue;
                    }
                    array_push($copy,$filter);
                }
                $this->filters = clone $copy;
            }
        }