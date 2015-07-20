<?php

class GetCollectiveInvoiceListResponse
{

    /**
     * @var ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     * @access public
     */
    public $GetCollectiveInvoiceListResult = null;

    /**
     * @param ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     * @access public
     */
    public function __construct($GetCollectiveInvoiceListResult)
    {
      $this->GetCollectiveInvoiceListResult = $GetCollectiveInvoiceListResult;
    }

}
