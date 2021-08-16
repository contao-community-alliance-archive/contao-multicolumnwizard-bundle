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
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     David Maack <david.maack@arcor.de>
 * @author     fritzmg <email@spikx.net>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @author     Yanick Witschi <yanick.witschi@certo-net.ch>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2011 Andreas Schempp
 * @copyright  2011 certo web & design GmbH
 * @copyright  2013-2019 MEN AT WORK
 * @copyright  2021 The CCA team.
 * @license    https://spdx.org/licenses/LGPL-3.0-or-later.html LGPL-3.0-or-later
 * @filesource
 */

$GLOBALS['BE_FFL']['multiColumnWizard'] = '\ContaoCommunityAlliance\MultiColumnWizardBundle\Contao\Widgets\MultiColumnWizard';

$GLOBALS['TL_HOOKS']['loadDataContainer'][]  = array(
    'ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\LoadDataContainer',
    'supportModalSelector'
);
$GLOBALS['TL_HOOKS']['initializeSystem'][]   = array(
    'ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem',
    'changeAjaxPostActions'
);
$GLOBALS['TL_HOOKS']['executePostActions'][] = array(
    'ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions',
    'executePostActions'
);
$GLOBALS['TL_HOOKS']['executePostActions'][] = array(
    'ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions',
    'handleRowCreation'
);

if (TL_MODE == 'BE') {
    $GLOBALS['TL_HOOKS']['parseTemplate'][] = array(
        'ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ParseTemplate',
        'addVersion'
    );

    // Add the JS.
    $GLOBALS['TL_JAVASCRIPT']['multicolumnwizard'] = $GLOBALS['TL_CONFIG']['debugMode']
        ? 'bundles/multicolumnwizard/js/multicolumnwizard_be_src.js'
        : 'bundles/multicolumnwizard/js/multicolumnwizard_be.js';

    // Add the css.
    $GLOBALS['TL_CSS']['multicolumnwizard'] = $GLOBALS['TL_CONFIG']['debugMode']
        ? 'bundles/multicolumnwizard/css/multicolumnwizard_src.css'
        : 'bundles/multicolumnwizard/css/multicolumnwizard.css';
}
