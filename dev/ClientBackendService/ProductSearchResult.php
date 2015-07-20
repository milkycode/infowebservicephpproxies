<?php

class ProductSearchResult
{

    /**
     * @var string $ArticleNumber
     * @access public
     */
    public $ArticleNumber = null;

    /**
     * @var ArticleTypeEnum $ArticleType
     * @access public
     */
    public $ArticleType = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @var string $OrderNumber
     * @access public
     */
    public $OrderNumber = null;

    /**
     * @var guid $ProductIdentifier
     * @access public
     */
    public $ProductIdentifier = null;

    /**
     * @var string $ProductName
     * @access public
     */
    public $ProductName = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @param ArticleTypeEnum $ArticleType
     * @param boolean $IsActive
     * @param guid $ProductIdentifier
     * @access public
     */
    public function __construct($ArticleType, $IsActive, $ProductIdentifier)
    {
      $this->ArticleType = $ArticleType;
      $this->IsActive = $IsActive;
      $this->ProductIdentifier = $ProductIdentifier;
    }

}
