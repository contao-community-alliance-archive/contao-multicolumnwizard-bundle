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

/**
 * Class LoadDataContainer
 */
class LoadDataContainer
{
    /**
     * Deprecated in Contao 4.x since we didn't have the data in access.
     *
     * @param string $strTable Name of the table.
     *
     * @return void
     *
     * @deprecated Removed in version 4 of mcw. There is no replacement.
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function supportModalSelector($strTable)
    {
        // In previous versions of contao, we got the filed and could add the information to the list. But now, it
        // is not possible, because contao add the information into the url under extra. So we have
        // to add all on the right place when the widget generates the data.
    }
}
