<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing HeaderTradeSettlementType
 *
 * XSD Type: HeaderTradeSettlementType
 */
class HeaderTradeSettlementType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType $creditorReferenceID
     */
    private $creditorReferenceID = null;

    /**
     * @var string $paymentReference
     */
    private $paymentReference = null;

    /**
     * @var string $taxCurrencyCode
     */
    private $taxCurrencyCode = null;

    /**
     * @var string $invoiceCurrencyCode
     */
    private $invoiceCurrencyCode = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradePartyType $payeeTradeParty
     */
    private $payeeTradeParty = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans
     */
    private $specifiedTradeSettlementPaymentMeans = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeTaxType[] $applicableTradeTax
     */
    private $applicableTradeTax = [

    ];

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\SpecifiedPeriodType $billingSpecifiedPeriod
     */
    private $billingSpecifiedPeriod = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType[] $specifiedTradeAllowanceCharge
     */
    private $specifiedTradeAllowanceCharge = [

    ];

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradePaymentTermsType $specifiedTradePaymentTerms
     */
    private $specifiedTradePaymentTerms = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeSettlementHeaderMonetarySummationType $specifiedTradeSettlementHeaderMonetarySummation
     */
    private $specifiedTradeSettlementHeaderMonetarySummation = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\ReferencedDocumentType $invoiceReferencedDocument
     */
    private $invoiceReferencedDocument = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeAccountingAccountType $receivableSpecifiedTradeAccountingAccount
     */
    private $receivableSpecifiedTradeAccountingAccount = null;

    /**
     * Gets as creditorReferenceID
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType
     */
    public function getCreditorReferenceID()
    {
        return $this->creditorReferenceID;
    }

    /**
     * Sets a new creditorReferenceID
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $creditorReferenceID
     * @return self
     */
    public function setCreditorReferenceID(\horstoeko\zugferd\entities\minimum\udt\IDType $creditorReferenceID)
    {
        $this->creditorReferenceID = $creditorReferenceID;
        return $this;
    }

    /**
     * Gets as paymentReference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }

    /**
     * Sets a new paymentReference
     *
     * @param  string $paymentReference
     * @return self
     */
    public function setPaymentReference($paymentReference)
    {
        $this->paymentReference = $paymentReference;
        return $this;
    }

    /**
     * Gets as taxCurrencyCode
     *
     * @return string
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * Sets a new taxCurrencyCode
     *
     * @param  string $taxCurrencyCode
     * @return self
     */
    public function setTaxCurrencyCode($taxCurrencyCode)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * Gets as invoiceCurrencyCode
     *
     * @return string
     */
    public function getInvoiceCurrencyCode()
    {
        return $this->invoiceCurrencyCode;
    }

    /**
     * Sets a new invoiceCurrencyCode
     *
     * @param  string $invoiceCurrencyCode
     * @return self
     */
    public function setInvoiceCurrencyCode($invoiceCurrencyCode)
    {
        $this->invoiceCurrencyCode = $invoiceCurrencyCode;
        return $this;
    }

    /**
     * Gets as payeeTradeParty
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradePartyType
     */
    public function getPayeeTradeParty()
    {
        return $this->payeeTradeParty;
    }

    /**
     * Sets a new payeeTradeParty
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradePartyType $payeeTradeParty
     * @return self
     */
    public function setPayeeTradeParty(\horstoeko\zugferd\entities\minimum\ram\TradePartyType $payeeTradeParty)
    {
        $this->payeeTradeParty = $payeeTradeParty;
        return $this;
    }

    /**
     * Gets as specifiedTradeSettlementPaymentMeans
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeSettlementPaymentMeansType
     */
    public function getSpecifiedTradeSettlementPaymentMeans()
    {
        return $this->specifiedTradeSettlementPaymentMeans;
    }

    /**
     * Sets a new specifiedTradeSettlementPaymentMeans
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans
     * @return self
     */
    public function setSpecifiedTradeSettlementPaymentMeans(\horstoeko\zugferd\entities\minimum\ram\TradeSettlementPaymentMeansType $specifiedTradeSettlementPaymentMeans)
    {
        $this->specifiedTradeSettlementPaymentMeans = $specifiedTradeSettlementPaymentMeans;
        return $this;
    }

    /**
     * Adds as applicableTradeTax
     *
     * @return self
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeTaxType $applicableTradeTax
     */
    public function addToApplicableTradeTax(\horstoeko\zugferd\entities\minimum\ram\TradeTaxType $applicableTradeTax)
    {
        $this->applicableTradeTax[] = $applicableTradeTax;
        return $this;
    }

    /**
     * isset applicableTradeTax
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetApplicableTradeTax($index)
    {
        return isset($this->applicableTradeTax[$index]);
    }

    /**
     * unset applicableTradeTax
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetApplicableTradeTax($index)
    {
        unset($this->applicableTradeTax[$index]);
    }

    /**
     * Gets as applicableTradeTax
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeTaxType[]
     */
    public function getApplicableTradeTax()
    {
        return $this->applicableTradeTax;
    }

    /**
     * Sets a new applicableTradeTax
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeTaxType[] $applicableTradeTax
     * @return self
     */
    public function setApplicableTradeTax(array $applicableTradeTax)
    {
        $this->applicableTradeTax = $applicableTradeTax;
        return $this;
    }

    /**
     * Gets as billingSpecifiedPeriod
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\SpecifiedPeriodType
     */
    public function getBillingSpecifiedPeriod()
    {
        return $this->billingSpecifiedPeriod;
    }

    /**
     * Sets a new billingSpecifiedPeriod
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\SpecifiedPeriodType $billingSpecifiedPeriod
     * @return self
     */
    public function setBillingSpecifiedPeriod(\horstoeko\zugferd\entities\minimum\ram\SpecifiedPeriodType $billingSpecifiedPeriod)
    {
        $this->billingSpecifiedPeriod = $billingSpecifiedPeriod;
        return $this;
    }

    /**
     * Adds as specifiedTradeAllowanceCharge
     *
     * @return self
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType $specifiedTradeAllowanceCharge
     */
    public function addToSpecifiedTradeAllowanceCharge(\horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType $specifiedTradeAllowanceCharge)
    {
        $this->specifiedTradeAllowanceCharge[] = $specifiedTradeAllowanceCharge;
        return $this;
    }

    /**
     * isset specifiedTradeAllowanceCharge
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSpecifiedTradeAllowanceCharge($index)
    {
        return isset($this->specifiedTradeAllowanceCharge[$index]);
    }

    /**
     * unset specifiedTradeAllowanceCharge
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSpecifiedTradeAllowanceCharge($index)
    {
        unset($this->specifiedTradeAllowanceCharge[$index]);
    }

    /**
     * Gets as specifiedTradeAllowanceCharge
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType[]
     */
    public function getSpecifiedTradeAllowanceCharge()
    {
        return $this->specifiedTradeAllowanceCharge;
    }

    /**
     * Sets a new specifiedTradeAllowanceCharge
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeAllowanceChargeType[] $specifiedTradeAllowanceCharge
     * @return self
     */
    public function setSpecifiedTradeAllowanceCharge(array $specifiedTradeAllowanceCharge)
    {
        $this->specifiedTradeAllowanceCharge = $specifiedTradeAllowanceCharge;
        return $this;
    }

    /**
     * Gets as specifiedTradePaymentTerms
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradePaymentTermsType
     */
    // erics there is no specifiedTradePaymentTerms in MINIMUM profile
    // public function getSpecifiedTradePaymentTerms()
    // {
    //     return $this->specifiedTradePaymentTerms;
    // }

    /**
     * Sets a new specifiedTradePaymentTerms
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradePaymentTermsType $specifiedTradePaymentTerms
     * @return self
     */
    public function setSpecifiedTradePaymentTerms(\horstoeko\zugferd\entities\minimum\ram\TradePaymentTermsType $specifiedTradePaymentTerms)
    {
        $this->specifiedTradePaymentTerms = $specifiedTradePaymentTerms;
        return $this;
    }

    /**
     * Gets as specifiedTradeSettlementHeaderMonetarySummation
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeSettlementHeaderMonetarySummationType
     */
    public function getSpecifiedTradeSettlementHeaderMonetarySummation()
    {
        return $this->specifiedTradeSettlementHeaderMonetarySummation;
    }

    /**
     * Sets a new specifiedTradeSettlementHeaderMonetarySummation
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeSettlementHeaderMonetarySummationType $specifiedTradeSettlementHeaderMonetarySummation
     * @return self
     */
    public function setSpecifiedTradeSettlementHeaderMonetarySummation(\horstoeko\zugferd\entities\minimum\ram\TradeSettlementHeaderMonetarySummationType $specifiedTradeSettlementHeaderMonetarySummation)
    {
        $this->specifiedTradeSettlementHeaderMonetarySummation = $specifiedTradeSettlementHeaderMonetarySummation;
        return $this;
    }

    /**
     * Gets as invoiceReferencedDocument
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\ReferencedDocumentType
     */
    public function getInvoiceReferencedDocument()
    {
        return $this->invoiceReferencedDocument;
    }

    /**
     * Sets a new invoiceReferencedDocument
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\ReferencedDocumentType $invoiceReferencedDocument
     * @return self
     */
    public function setInvoiceReferencedDocument(\horstoeko\zugferd\entities\minimum\ram\ReferencedDocumentType $invoiceReferencedDocument)
    {
        $this->invoiceReferencedDocument = $invoiceReferencedDocument;
        return $this;
    }

    /**
     * Gets as receivableSpecifiedTradeAccountingAccount
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeAccountingAccountType
     */
    public function getReceivableSpecifiedTradeAccountingAccount()
    {
        return $this->receivableSpecifiedTradeAccountingAccount;
    }

    /**
     * Sets a new receivableSpecifiedTradeAccountingAccount
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeAccountingAccountType $receivableSpecifiedTradeAccountingAccount
     * @return self
     */
    public function setReceivableSpecifiedTradeAccountingAccount(\horstoeko\zugferd\entities\minimum\ram\TradeAccountingAccountType $receivableSpecifiedTradeAccountingAccount)
    {
        $this->receivableSpecifiedTradeAccountingAccount = $receivableSpecifiedTradeAccountingAccount;
        return $this;
    }
}
