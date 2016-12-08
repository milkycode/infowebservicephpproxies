<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ExistsArgument extends Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var Promidata_Service_DTO_DataSelector $Selector
     * @access public
     */
    public $Selector = null;

    /**
     * @param guid $ImporterIdentifier
     * @param Promidata_Service_DTO_DataSelector $Selector
     */
    public function __construct($ImporterIdentifier, Promidata_Service_DTO_DataSelector $Selector)
    {
        parent::__construct($ImporterIdentifier);
        $this->Selector = $Selector;
    }
}