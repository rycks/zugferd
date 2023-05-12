<?php

namespace horstoeko\zugferd\entities\minimum\ram;

/**
 * Class representing TradeProductType
 *
 * XSD Type: TradeProductType
 */
class TradeProductType
{

    /**
     * @var \horstoeko\zugferd\entities\minimum\udt\IDType $globalID
     */
    private $globalID = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as globalID
     *
     * @return \horstoeko\zugferd\entities\minimum\udt\IDType
     */
    public function getGlobalID()
    {
        return $this->globalID;
    }

    /**
     * Sets a new globalID
     *
     * @param  \horstoeko\zugferd\entities\minimum\udt\IDType $globalID
     * @return self
     */
    public function setGlobalID(\horstoeko\zugferd\entities\minimum\udt\IDType $globalID)
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
}
