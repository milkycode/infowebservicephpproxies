<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_CustomerSearchParameterCollection
{
    /**
     * @var Promidata_Service_DTO_CustomerSearchParameter[] $CustomerSearchItems
     * @access public
     */
    public $CustomerSearchItems = null;

    public function Add($SearchKey = null, $SearchValue = null, $Length = null)
    {
        if (!is_null($SearchValue)) {
            if ($Length > 0) {
                $SearchValue = substr($SearchValue, 0, (int)$Length);
            }

            $this->CustomerSearchItems[] = new Promidata_Service_DTO_CustomerSearchParameter($SearchKey, $SearchValue);
        }

        return $this;
    }

    /**
     * @access public
     */
    public function __construct()
    {
        $this->CustomerSearchItems = array();
    }

    /**
     * @return array|Promidata_Service_DTO_CustomerSearchParameter[]
     */
    public function getSearchItems()
    {
        return $this->CustomerSearchItems;
    }
}