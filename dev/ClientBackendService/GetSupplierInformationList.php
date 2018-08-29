<?php

class GetSupplierInformationList
{

    /**
     * @var dateTime $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @param dateTime $startDate
     * @access public
     */
    public function __construct($startDate)
    {
      $this->startDate = $startDate;
    }

}
