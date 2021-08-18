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

namespace ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao;

use Contao\Template;

/**
 * Class ParseTemplate
 */
class ParseTemplate
{
    /**
     * Add the scripts and stylesheet to the passed template.
     *
     * @param Template $objTemplate The template to add to.
     *
     * @return void
     *
     * @@SuppressWarnings(PHPMD.Superglobals)
     * @SuppressWarnings(PHPMD.CamelCaseVariableName)
     */
    public function addVersion(&$objTemplate)
    {
        // do not allow version information to be leaked in the backend login and install tool (#184)
        if ($objTemplate->getName() != 'be_login' && $objTemplate->getName() != 'be_install') {
            $objTemplate->ua .= ' version_' . str_replace('.', '-', VERSION) . '-' . str_replace(
                '.',
                '-',
                BUILD
            );
        }
    }
}
