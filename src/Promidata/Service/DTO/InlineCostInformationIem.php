<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_InlineCostInformationIem
{
    /**
     * @var string $ArticleDescription
     * @access public
     */
    public $ArticleDescription = null;

    /**
     * @var string $ArticleName
     * @access public
     */
    public $ArticleName = null;

    /**
     * @var string $ArticleOrderNumber
     * @access public
     */
    public $ArticleOrderNumber = null;

    /**
     * @var string $ArticleTextIntern
     * @access public
     */
    public $ArticleTextIntern = null;

    /**
     * @var string $IndentConfirmationText
     * @access public
     */
    public $IndentConfirmationText = null;

    /**
     * @var string $Option1Key
     * @access public
     */
    public $Option1Key = null;

    /**
     * @var string $Option1Name
     * @access public
     */
    public $Option1Name = null;

    /**
     * @var string $Option2Key
     * @access public
     */
    public $Option2Key = null;

    /**
     * @var string $Option2Name
     * @access public
     */
    public $Option2Name = null;

    /**
     * @var string $OwnArticleNumber
     * @access public
     */
    public $OwnArticleNumber = null;

    /**
     * @var float $QuantityAmount
     * @access public
     */
    public $QuantityAmount = null;

    /**
     * @var string $QuantityUnit
     * @access public
     */
    public $QuantityUnit = null;

    /**
     * @param float $QuantityAmount
     * @access public
     */
    public function __construct($QuantityAmount)
    {
        $this->QuantityAmount = $QuantityAmount;
    }
}