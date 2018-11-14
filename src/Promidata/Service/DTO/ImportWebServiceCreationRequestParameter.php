<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ImportWebServiceCreationRequestParameter
{
    /**
     * @var string $JsonContent
     * @access public
     */
    public $JsonContent = null;

    /**
     * @var string $SourceName
     * @access public
     */
    public $SourceName = null;

    /**
     * @var string $SourceName
     * @var string $JsonContent
     * @access public
     */
    public function __construct($SourceName = null, $JsonContent = null)
    {
        $this->SourceName = $SourceName;
        $this->JsonContent = $JsonContent;
    }
}