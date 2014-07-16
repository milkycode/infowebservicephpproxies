<?php

class Promidata_Service_DTO_UserInformation
{

    /**
     *
     * @var string $Email
     * @access public
     */
    public $Email = null;

    /**
     *
     * @var string $Fax
     * @access public
     */
    public $Fax = null;

    /**
     *
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     *
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     *
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     *
     * @var string $Phone
     * @access public
     */
    public $Phone = null;

    /**
     *
     * @var string $SelfDefined1
     * @access public
     */
    public $SelfDefined1 = null;

    /**
     *
     * @var string $SelfDefined2
     * @access public
     */
    public $SelfDefined2 = null;

    /**
     *
     * @var string $SelfDefined3
     * @access public
     */
    public $SelfDefined3 = null;

    /**
     *
     * @var string $SelfDefined4
     * @access public
     */
    public $SelfDefined4 = null;

    /**
     *
     * @var string $SelfDefined5
     * @access public
     */
    public $SelfDefined5 = null;

    /**
     *
     * @var string $ShortName
     * @access public
     */
    public $ShortName = null;

    /**
     *
     * @var int $UserId
     * @access public
     */
    public $UserId = null;

    /**
     *
     * @param int $UserId
     * @access public
     */
    public function __construct($UserId)
    {
        $this->UserId = $UserId;
    }

}
