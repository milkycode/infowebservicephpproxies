<?php
/**
 * Base Exception for Promidata PromotionalOffice Service.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Exception extends Exception
{
    protected $innerMessages = array();

    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get inner soap exceptions (recursive).
     * @return array
     */
    public function getInnerExceptionMessages()
    {
        $previous = $this->getPrevious();
        if (!empty($previous->detail->ExceptionDetail->InnerException)) {
            $this->getInnerException($previous->detail->ExceptionDetail->InnerException);
        }

        return $this->innerMessages;
    }

    protected function getInnerException($e)
    {
        if (!empty($e->Message)) {
            $this->innerMessages[] = $e->Message;
        }
        if (!empty($e->InnerException)) {
            $this->getInnerException($e->InnerException);
        }
    }
}