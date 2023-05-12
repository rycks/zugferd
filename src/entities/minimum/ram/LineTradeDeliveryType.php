<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing LineTradeDeliveryType
 *
 * XSD Type: LineTradeDeliveryType
 */
class LineTradeDeliveryType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\QuantityType $billedQuantity
     */
    private $billedQuantity = null;

    /**
     * Gets as billedQuantity
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\QuantityType
     */
    public function getBilledQuantity()
    {
        return $this->billedQuantity;
    }

    /**
     * Sets a new billedQuantity
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\QuantityType $billedQuantity
     * @return self
     */
    public function setBilledQuantity(\horstoeko\zugferd\entities\minimum\udt\QuantityType $billedQuantity)
    {
        $this->billedQuantity = $billedQuantity;
        return $this;
    }
}
