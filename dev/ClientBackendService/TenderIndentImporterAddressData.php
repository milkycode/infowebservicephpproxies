<?php

class TenderIndentImporterAddressData
{

    /**
     * @var string $AlternativeSalutation
     * @access public
     */
    public $AlternativeSalutation = null;

    /**
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $CompanyName
     * @access public
     */
    public $CompanyName = null;

    /**
     * @var string $CompanyNameAffex
     * @access public
     */
    public $CompanyNameAffex = null;

    /**
     * @var string $CountryIsoCode
     * @access public
     */
    public $CountryIsoCode = null;

    /**
     * @var string $DispatchTip
     * @access public
     */
    public $DispatchTip = null;

    /**
     * @var string $EMail
     * @access public
     */
    public $EMail = null;

    /**
     * @var string $FaxNumber
     * @access public
     */
    public $FaxNumber = null;

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var GenderType $Gender
     * @access public
     */
    public $Gender = null;

    /**
     * @var string $Initial
     * @access public
     */
    public $Initial = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

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
     * @var string $PhoneNumber
     * @access public
     */
    public $PhoneNumber = null;

    /**
     * @var string $PostCode
     * @access public
     */
    public $PostCode = null;

    /**
     * @var string $Salutation
     * @access public
     */
    public $Salutation = null;

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
     * @var string $UstId
     * @access public
     */
    public $UstId = null;

    /**
     * @param GenderType $Gender
     * @access public
     */
    public function __construct($Gender)
    {
      $this->Gender = $Gender;
    }

}
