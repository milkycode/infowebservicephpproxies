<?php

class ArticleTextItem
{

    /**
     * @var ArticleLanguageTypeEnum $ArticleLanguageType
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
     * @param ArticleLanguageTypeEnum $ArticleLanguageType
     * @access public
     */
    public function __construct($ArticleLanguageType)
    {
      $this->ArticleLanguageType = $ArticleLanguageType;
    }

}
