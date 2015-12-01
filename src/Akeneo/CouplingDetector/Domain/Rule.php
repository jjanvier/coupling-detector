<?php

namespace Akeneo\CouplingDetector\Domain;

/**
 * Rule.
 *
 * @author  Julien Janvier <j.janvier@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
class Rule implements RuleInterface
{
    /** @var string */
    private $subject;

    /** @var array */
    private $requirements;

    /** @var string */
    private $type;

    /** @var ExclusionInterface[] */
    private $exclusions;

    /** @var string */
    private $description;

    /**
     * Rule constructor.
     *
     * @param string               $subject
     * @param array                $requirements
     * @param string               $type
     * @param ExclusionInterface[] $exclusions
     * @param string               $description
     */
    public function __construct($subject, array $requirements, $type, array $exclusions = [], $description = null)
    {
        $this->requirements = $requirements;
        $this->subject = $subject;
        $this->type = $type;
        $this->exclusions = $exclusions;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubject()
    {
        return $this->subject;
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
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function getExclusions()
    {
        return $this->exclusions;
    }
}
