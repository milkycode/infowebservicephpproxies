<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_GetIndentInformationParameter
{
    /**
     * @var string $IndentNumberFull
     * @access public
     */
    public $IndentNumberFull = null;

    /**
     * @access public
     * @param string $IndentNumberFull
     */
    public function __construct($IndentNumberFull = null)
    {
        $this->IndentNumberFull = $IndentNumberFull;
    }
}