<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing TradePartyType
 *
 * XSD Type: TradePartyType
 */
class TradePartyType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType[] $iD
     */
    private $iD = [

    ];

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType[] $globalID
     */
    private $globalID = [

    ];

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\LegalOrganizationType $specifiedLegalOrganization
     */
    private $specifiedLegalOrganization = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TradeAddressType $postalTradeAddress
     */
    private $postalTradeAddress = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\UniversalCommunicationType $uRIUniversalCommunication
     */
    private $uRIUniversalCommunication = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\ram\TaxRegistrationType[] $specifiedTaxRegistration
     */
    private $specifiedTaxRegistration = [

    ];

    /**
     * Adds as iD
     *
     * @return self
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $iD
     */
    public function addToID(\horstoeko\zugferd\entities\minimum\udt\IDType $iD)
    {
        $this->iD[] = $iD;
        return $this;
    }

    /**
     * isset iD
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetID($index)
    {
        return isset($this->iD[$index]);
    }

    /**
     * unset iD
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetID($index)
    {
        unset($this->iD[$index]);
    }

    /**
     * Gets as iD
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType[]
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType[] $iD
     * @return self
     */
    public function setID(array $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as globalID
     *
     * @return self
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $globalID
     */
    public function addToGlobalID(\horstoeko\zugferd\entities\minimum\udt\IDType $globalID)
    {
        $this->globalID[] = $globalID;
        return $this;
    }

    /**
     * isset globalID
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetGlobalID($index)
    {
        return isset($this->globalID[$index]);
    }

    /**
     * unset globalID
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetGlobalID($index)
    {
        unset($this->globalID[$index]);
    }

    /**
     * Gets as globalID
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType[]
     */
    public function getGlobalID()
    {
        return $this->globalID;
    }

    /**
     * Sets a new globalID
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType[] $globalID
     * @return self
     */
    public function setGlobalID(array $globalID)
    {
        $this->globalID = $globalID;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as specifiedLegalOrganization
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\LegalOrganizationType
     */
    public function getSpecifiedLegalOrganization()
    {
        return $this->specifiedLegalOrganization;
    }

    /**
     * Sets a new specifiedLegalOrganization
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\LegalOrganizationType $specifiedLegalOrganization
     * @return self
     */
    public function setSpecifiedLegalOrganization(\horstoeko\zugferd\entities\minimum\ram\LegalOrganizationType $specifiedLegalOrganization)
    {
        $this->specifiedLegalOrganization = $specifiedLegalOrganization;
        return $this;
    }

    /**
     * Gets as postalTradeAddress
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TradeAddressType
     */
    public function getPostalTradeAddress()
    {
        return $this->postalTradeAddress;
    }

    /**
     * Sets a new postalTradeAddress
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TradeAddressType $postalTradeAddress
     * @return self
     */
    public function setPostalTradeAddress(\horstoeko\zugferd\entities\minimum\ram\TradeAddressType $postalTradeAddress)
    {
        $this->postalTradeAddress = $postalTradeAddress;
        return $this;
    }

    /**
     * Gets as uRIUniversalCommunication
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\UniversalCommunicationType
     */
    public function getURIUniversalCommunication()
    {
        return $this->uRIUniversalCommunication;
    }

    /**
     * Sets a new uRIUniversalCommunication
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\UniversalCommunicationType $uRIUniversalCommunication
     * @return self
     */
    public function setURIUniversalCommunication(\horstoeko\zugferd\entities\minimum\ram\UniversalCommunicationType $uRIUniversalCommunication)
    {
        $this->uRIUniversalCommunication = $uRIUniversalCommunication;
        return $this;
    }

    /**
     * Adds as specifiedTaxRegistration
     *
     * @return self
     * @param  \horstoeko\zugferd\entities\minimum\ram\TaxRegistrationType $specifiedTaxRegistration
     */
    public function addToSpecifiedTaxRegistration(\horstoeko\zugferd\entities\minimum\ram\TaxRegistrationType $specifiedTaxRegistration)
    {
        $this->specifiedTaxRegistration[] = $specifiedTaxRegistration;
        return $this;
    }

    /**
     * isset specifiedTaxRegistration
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSpecifiedTaxRegistration($index)
    {
        return isset($this->specifiedTaxRegistration[$index]);
    }

    /**
     * unset specifiedTaxRegistration
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSpecifiedTaxRegistration($index)
    {
        unset($this->specifiedTaxRegistration[$index]);
    }

    /**
     * Gets as specifiedTaxRegistration
     *
     * @return \horstoeko\zugferd\entities\minimum\ram\TaxRegistrationType[]
     */
    public function getSpecifiedTaxRegistration()
    {
        return $this->specifiedTaxRegistration;
    }

    /**
     * Sets a new specifiedTaxRegistration
     *
     * @param  \horstoeko\zugferd\entities\minimum\ram\TaxRegistrationType[] $specifiedTaxRegistration
     * @return self
     */
    public function setSpecifiedTaxRegistration(array $specifiedTaxRegistration)
    {
        $this->specifiedTaxRegistration = $specifiedTaxRegistration;
        return $this;
    }
}
