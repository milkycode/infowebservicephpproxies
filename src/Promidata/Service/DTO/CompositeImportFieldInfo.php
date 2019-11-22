<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_CompositeImportFieldInfo extends Promidata_Service_DTO_ImportFieldInfo
{
    /**
     * @var Promidata_Service_DTO_ImportFieldInfo[] $CompositeFields
     * @access public
     */
    public $CompositeFields = null;

    /**
     * @param boolean $IsRequired
     * @access public
     */
    public function __construct($IsRequired)
    {
        parent::__construct($IsRequired);
    }
}