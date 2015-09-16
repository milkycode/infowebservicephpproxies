<?php
class Promidata_Service_DTO_LocalizationItem
{
    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var string $Show
     * @access public
     */
    public $Show = null;

    /**
     * @access public
     * @param string $Show
     * @param string $Description
     * @param string $Language
     */
    public function __construct($Show = null, $Description = null, $Language = null)
    {
        $this->Show = $Show;
        $this->Description = $Description;
        $this->Language = $Language;
    }
}
