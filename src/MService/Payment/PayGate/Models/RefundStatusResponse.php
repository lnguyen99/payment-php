<?php


namespace MService\Payment\PayGate\Models;

use MService\Payment\Shared\Constants\RequestType;

class RefundStatusResponse extends AIOResponse
{
    public function __construct(array $params = array())
    {
        parent::__construct($params);
        $this->setRequestType(RequestType::QUERY_REFUND);
    }

}