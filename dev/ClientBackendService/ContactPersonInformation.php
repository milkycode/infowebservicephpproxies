<?php

class ContactPersonInformation
{

    /**
     * @var ShowDescriptionItem[] $AdditionalMailingSigns
     * @access public
     */
    public $AdditionalMailingSigns = null;

    /**
     * @var string $AlternativeSalutation
     * @access public
     */
    public $AlternativeSalutation = null;

    /**
     * @var dateTime $Birthday
     * @access public
     */
    public $Birthday = null;

    /**
     * @var ContactDetail[] $ContactDetails
     * @access public
     */
    public $ContactDetails = null;

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
     * @var CustomerIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @var string $Initials
     * @access public
     */
    public $Initials = null;

    /**
     * @var boolean $IsMailRecipient
     * @access public
     */
    public $IsMailRecipient = null;

    /**
     * @var boolean $IsMain
     * @access public
     */
    public $IsMain = null;

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
     * @var ShowDescriptionItem[] $MailingSigns
     * @access public
     */
    public $MailingSigns = null;

    /**
     * @var string $NameAffex
     * @access public
     */
    public $NameAffex = null;

    /**
     * @var string $Notice
     * @access public
     */
    public $Notice = null;

    /**
     * @var string $Salutation
     * @access public
     */
    public $Salutation = null;

    /**
     * @var ShowDescriptionItem[] $SecondaryMailingSigns
     * @access public
     */
    public $SecondaryMailingSigns = null;

    /**
     * @param GenderType $Gender
     * @param boolean $IsMailRecipient
     * @param boolean $IsMain
     * @access public
     */
    public function __construct($Gender, $IsMailRecipient, $IsMain)
    {
      $this->Gender = $Gender;
      $this->IsMailRecipient = $IsMailRecipient;
      $this->IsMain = $IsMain;
    }

}
