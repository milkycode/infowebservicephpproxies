<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_SimpleAddress
{
    /**
     * @var string $AddressType
     * @access public
     */
    public $AddressType = null;

    /**
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $CountryName
     * @access public
     */
    public $CountryName = null;

    /**
     * @var boolean $IsMainAdress
     * @access public
     */
    public $IsMainAdress = null;

    /**
     * @var string $Line1
     * @access public
     */
    public $Line1 = null;

    /**
     * @var string $Line2
     * @access public
     */
    public $Line2 = null;

    /**
     * @var string $Line3
     * @access public
     */
    public $Line3 = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $NameAffex
     * @access public
     */
    public $NameAffex = null;

    /**
     * @var string $PostCode
     * @access public
     */
    public $PostCode = null;

    /**
     * @var string $Street
     * @access public
     */
    public $Street = null;

    /**
     * @var string $StreetNumber
     * @access public
     */
    public $StreetNumber = null;

    /**
     * @param boolean $IsMainAdress
     * @access public
     */
    public function __construct($IsMainAdress)
    {
        $this->IsMainAdress = $IsMainAdress;
    }
}