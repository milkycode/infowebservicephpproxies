<?php
/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ArticleTextItem
{
    /**
     * @var Promidata_Service_Enum_ArticleLanguageType $ArticleLanguageType
     * @access public
     */
    public $ArticleLanguageType = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     * @param Promidata_Service_Enum_ArticleLanguageType $ArticleLanguageType
     * @access public
     */
    public function __construct(Promidata_Service_Enum_ArticleLanguageType $ArticleLanguageType = null)
    {
        $this->ArticleLanguageType = $ArticleLanguageType;
    }
}