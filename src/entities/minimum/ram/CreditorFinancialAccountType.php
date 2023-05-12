<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing CreditorFinancialAccountType
 *
 * XSD Type: CreditorFinancialAccountType
 */
class CreditorFinancialAccountType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType $iBANID
     */
    private $iBANID = null;

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType $proprietaryID
     */
    private $proprietaryID = null;

    /**
     * Gets as iBANID
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType
     */
    public function getIBANID()
    {
        return $this->iBANID;
    }

    /**
     * Sets a new iBANID
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $iBANID
     * @return self
     */
    public function setIBANID(\horstoeko\zugferd\entities\minimum\udt\IDType $iBANID)
    {
        $this->iBANID = $iBANID;
        return $this;
    }

    /**
     * Gets as proprietaryID
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType
     */
    public function getProprietaryID()
    {
        return $this->proprietaryID;
    }

    /**
     * Sets a new proprietaryID
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $proprietaryID
     * @return self
     */
    public function setProprietaryID(\horstoeko\zugferd\entities\minimum\udt\IDType $proprietaryID)
    {
        $this->proprietaryID = $proprietaryID;
        return $this;
    }
}
