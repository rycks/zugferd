<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing TradePriceType
 *
 * XSD Type: TradePriceType
 */
class TradePriceType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\AmountType $chargeAmount
     */
    private $chargeAmount = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\QuantityType $basisQuantity
     */
    private $basisQuantity = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType $appliedTradeAllowanceCharge
     */
    private $appliedTradeAllowanceCharge = null;

    /**
     * Gets as chargeAmount
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\AmountType
     */
    public function getChargeAmount()
    {
        return $this->chargeAmount;
    }

    /**
     * Sets a new chargeAmount
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\AmountType $chargeAmount
     * @return self
     */
    public function setChargeAmount(\horstoeko\zugferd\entities\minimum\udt\AmountType $chargeAmount)
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * Gets as basisQuantity
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\QuantityType
     */
    public function getBasisQuantity()
    {
        return $this->basisQuantity;
    }

    /**
     * Sets a new basisQuantity
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\QuantityType $basisQuantity
     * @return self
     */
    public function setBasisQuantity(\horstoeko\zugferd\entities\minimum\udt\QuantityType $basisQuantity)
    {
        $this->basisQuantity = $basisQuantity;
        return $this;
    }

    /**
     * Gets as appliedTradeAllowanceCharge
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType
     */
    public function getAppliedTradeAllowanceCharge()
    {
        return $this->appliedTradeAllowanceCharge;
    }

    /**
     * Sets a new appliedTradeAllowanceCharge
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType $appliedTradeAllowanceCharge
     * @return self
     */
    public function setAppliedTradeAllowanceCharge(\horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType $appliedTradeAllowanceCharge)
    {
        $this->appliedTradeAllowanceCharge = $appliedTradeAllowanceCharge;
        return $this;
    }
}
