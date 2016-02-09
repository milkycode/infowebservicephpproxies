<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetCustomerInformationList
{
    /**
     * @var dateTime $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @param dateTime $startDate
     * @access public
     */
    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }
}