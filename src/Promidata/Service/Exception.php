<?php
/**
 * Base Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>

 * @package     Promidata_Service

 */
class Promidata_Service_Exception extends Exception
{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}