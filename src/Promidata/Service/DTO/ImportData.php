<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ImportData extends Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var Promidata_Service_DTO_ImportFieldDataCollection $ImportFields
     * @access public
     */
    public $ImportFields = null;

    /**
     * @var Promidata_Service_DTO_AdditionalDataCollection $AdditionalData
     * @access public
     */
    public $AdditionalData = null;

    /**
     * @param guid $ImporterIdentifier
     * @access public
     */
    public function __construct($ImporterIdentifier)
    {
        parent::__construct($ImporterIdentifier);
    }
}