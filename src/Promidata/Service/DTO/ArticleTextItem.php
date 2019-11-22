<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
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