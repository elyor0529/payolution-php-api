<?php

namespace ArvPayolutionApi\Request\Transaction\Analysis;

use ArvPayolutionApi\Request\RequestTypes;

/**
 * Class CustomerNumber
 */
class CustomerNumber extends CompositeAbstract implements CompositeContract
{
    /**
     * @return bool
     */
    public function isAvailable()
    {
        return $this->requestType != RequestTypes::CALCULATION;
    }

    /**
     * @return array
     */
    public function collect()
    {
        return [CriterionNames::PAYOLUTION_CUSTOMER_NUMBER => $this->data['customer']['customerId']];
    }
}
