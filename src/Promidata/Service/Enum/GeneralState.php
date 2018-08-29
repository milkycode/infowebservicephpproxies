<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Enum_GeneralState
{
    const __default = 'Unknown';
    const Unknown = 'Unknown';
    const Created = 'Created';
    const Send = 'Send';
    const Confirmed = 'Confirmed';
    const Decline = 'Decline';
    const Converted = 'Converted';
}