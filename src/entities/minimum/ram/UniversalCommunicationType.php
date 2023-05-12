<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing UniversalCommunicationType
 *
 * XSD Type: UniversalCommunicationType
 */
class UniversalCommunicationType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType $uRIID
     */
    private $uRIID = null;

    /**
     * Gets as uRIID
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType
     */
    public function getURIID()
    {
        return $this->uRIID;
    }

    /**
     * Sets a new uRIID
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $uRIID
     * @return self
     */
    public function setURIID(\horstoeko\zugferd\entities\minimum\udt\IDType $uRIID)
    {
        $this->uRIID = $uRIID;
        return $this;
    }
}
