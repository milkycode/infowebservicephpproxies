<?php
/**
 * Articlenotfound Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Exception_Articlenotfound extends Promidata_Service_Exception
{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}