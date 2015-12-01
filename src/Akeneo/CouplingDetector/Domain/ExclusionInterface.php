<?php

namespace Akeneo\CouplingDetector\Domain;

/**
 * Rule requirement exclusion.
 *
 * @author  Julien Janvier <j.janvier@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
interface ExclusionInterface
{
    const TYPE_LEGACY = 'legacy';
    const TYPE_DEPRECATED = 'deprecated';

    /**
     * @return array
     */
    public function getRequirementExclusions();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getDescription();
}
