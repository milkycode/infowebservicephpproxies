<?php

class GetPaymentInformationListResponse
{

    /**
     * @var PaymentInformation[] $GetPaymentInformationListResult
     * @access public
     */
    public $GetPaymentInformationListResult = null;

    /**
     * @param PaymentInformation[] $GetPaymentInformationListResult
     * @access public
     */
    public function __construct($GetPaymentInformationListResult)
    {
      $this->GetPaymentInformationListResult = $GetPaymentInformationListResult;
    }

}
