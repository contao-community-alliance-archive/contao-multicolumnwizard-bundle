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

namespace MultiColumnWizard\DcGeneral;

use ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\DcGeneral\UpdateDataDefinition as BundleUpdateDataDefinition;

/**
 * Class UpdateDataDefinition
 *
 * @deprecated Deprecated and will be removed in version 4. Use
 *             ContaoCommunityAlliance\MultiColumnWizardBundle\DcGeneral\UpdateDataDefinition
 */
class UpdateDataDefinition extends BundleUpdateDataDefinition
{
    /**
     * UpdateDataDefinition constructor.
     */
    public function __construct()
    {
        trigger_error(
            sprintf(
                'Use of deprecated class "%s". Use instead "%s"',
                __CLASS__,
                BundleUpdateDataDefinition::class
            ),
            E_USER_DEPRECATED
        );
    }
}
