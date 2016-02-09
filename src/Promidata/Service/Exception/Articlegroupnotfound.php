<?php
/**
 * Articlegroupnotfound Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>

 * @package     Promidata_Service

 */
class Promidata_Service_Exception_Articlegroupnotfound extends Promidata_Service_Exception
{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}