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

use Contao\Environment;
use Contao\Input;

/**
 * Class InitializeSystem
 */
class InitializeSystem
{
    /**
     * The MCW use some strange construction from point of contao.
     * Contao will rewrite the [rowId][fieldname]. This will cause a problem in the validate function
     * of the MCW, 'cause it is not able to find the data. So we have to replace the call, rewrite some elements.
     * And return the "right" mcw context.
     *
     * @return void
     */
    public function changeAjaxPostActions()
    {
        if (!Environment::get('isAjaxRequest')) {
            return;
        }

        $name = \Input::post('name');
        if (!\preg_match('/_row[0-9]*_/i', $name)) {
            return;
        }

        switch (Input::post('action')) {
            // Contao.
            case 'reloadFiletree':
            case 'reloadPagetree':
                Input::setPost('action', Input::post('action') . '_mcw');
                break;

            // DMA
            case 'reloadFiletreeDMA':
            case 'reloadPagetreeDMA':
                Input::setPost('action', \str_replace('DMA', '_mcw', Input::post('action')));
                break;
            default:
        }
    }
}
