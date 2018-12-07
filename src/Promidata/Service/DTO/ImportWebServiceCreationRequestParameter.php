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
     * @var string $RequestType
     * @access public
     */
    public $RequestType = null;

    /**
     * @var string $SourceName
     * @access public
     */
    public $SourceName = null;

    /**
     * @var string $JsonContent Your JSON data.
     * @var string $SourceName Custom description only for your reference.
     * @var string $RequestType Indent or Tender.
     * @access public
     */
    public function __construct($JsonContent = null, $SourceName = null, $RequestType = 'Indent')
    {
        $this->SourceName = $SourceName;
        $this->JsonContent = $JsonContent;
        $this->RequestType = $RequestType;
    }
}