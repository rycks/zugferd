<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing TradeSettlementPaymentMeansType
 *
 * XSD Type: TradeSettlementPaymentMeansType
 */
class TradeSettlementPaymentMeansType
{

    /**
     * @var string $typeCode
     */
    private $typeCode = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     */
    private $payerPartyDebtorFinancialAccount = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     */
    private $payeePartyCreditorFinancialAccount = null;

    /**
     * Gets as typeCode
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * @param  string $typeCode
     * @return self
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Gets as payerPartyDebtorFinancialAccount
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccount()
    {
        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * Sets a new payerPartyDebtorFinancialAccount
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     * @return self
     */
    public function setPayerPartyDebtorFinancialAccount(\horstoeko\zugferd\entities\minimum\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount)
    {
        $this->payerPartyDebtorFinancialAccount = $payerPartyDebtorFinancialAccount;
        return $this;
    }

    /**
     * Gets as payeePartyCreditorFinancialAccount
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccount()
    {
        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * Sets a new payeePartyCreditorFinancialAccount
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     * @return self
     */
    public function setPayeePartyCreditorFinancialAccount(\horstoeko\zugferd\entities\minimum\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount)
    {
        $this->payeePartyCreditorFinancialAccount = $payeePartyCreditorFinancialAccount;
        return $this;
    }
}
