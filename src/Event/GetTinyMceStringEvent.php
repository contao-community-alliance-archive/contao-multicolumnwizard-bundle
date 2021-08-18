<?php

/**
 * This file is part of contao-community-alliance/contao-multicolumnwizard-bundle.
 *
 * (c) 2021 The CCA team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/contao-multicolumnwizard-bundle
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2011 Andreas Schempp
 * @copyright  2011 certo web & design GmbH
 * @copyright  2013-2019 MEN AT WORK
 * @copyright  2021 The CCA team.
 * @license    https://spdx.org/licenses/LGPL-3.0-or-later.html LGPL-3.0-or-later
 * @filesource
 */

namespace ContaoCommunityAlliance\MultiColumnWizardBundle\Event;

/**
 * Class GetTinyMceEvent
 */
class GetTinyMceStringEvent extends GetStringEvent
{
    /**
     * Name of the event.
     */
    const NAME = 'contao-community-alliance.multi-column-wizard-bundle.get-tiny-mce';

    /**
     * The tiny MCE initialization string.
     *
     * @var string
     */
    private $tinyMce;

    /**
     * Set the TinyMce string.
     *
     * @param string $string The TinyMce string.
     *
     * @return $this
     */
    public function setTinyMce($string)
    {
        $this->tinyMce = $string;

        return $this;
    }

    /**
     * Get the TinyMce string.
     *
     * @return string
     */
    public function getTinyMce()
    {
        return $this->tinyMce;
    }
}
