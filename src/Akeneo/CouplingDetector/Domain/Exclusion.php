<?php

namespace Akeneo\CouplingDetector\Domain;

/**
 * Rule requirement exclusion.
 *
 * @author  Julien Janvier <j.janvier@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
class Exclusion implements ExclusionInterface
{
    /** @var array */
    private $requirementExclusions = [];

    /** @var string */
    private $type;

    /** @var string */
    private $description;

    /**
     * Rule constructor.
     *
     * @param array  $requirementExclusions
     * @param string $type
     * @param string $description
     */
    public function __construct(array $requirementExclusions, $type, $description = null)
    {
        $this->requirementExclusions = $requirementExclusions;
        $this->type                  = $type;
        $this->description           = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequirementExclusions()
    {
        return $this->requirementExclusions;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }
}
