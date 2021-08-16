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

use Contao\DataContainer;
use Contao\Template;
use ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions;
use ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem;
use ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\LoadDataContainer;
use ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ParseTemplate;
use ContaoCommunityAlliance\MultiColumnWizardBundle\Helper\MultiColumnWizardHelper as BundleMultiColumnWizardHelper;

/**
 * Class MultiColumnWizardHelper
 *
 * @deprecated Deprecated and will be removed in version 4. Use
 *             ContaoCommunityAlliance\MultiColumnWizardBundle\Helper\MultiColumnWizardHelper or the services.
 */
// @codingStandardsIgnoreStart
class MultiColumnWizardHelper extends BundleMultiColumnWizardHelper
// @codingStandardsIgnoreEnd
{
    /**
     * Just here to make the constructor public.
     */
    public function __construct()
    {
        trigger_error(
            sprintf(
                'Use of deprecated class "%s". Use instead "%s"',
                __CLASS__,
                BundleMultiColumnWizardHelper::class
            ),
            E_USER_DEPRECATED
        );

        parent::__construct();
    }

    /**
     * Add the scripts and css files to the template.
     *
     * @param Template $objTemplate The template.
     *
     * @return void
     *
     * @deprecated Use the service ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ParseTemplate
     */
    public function addScriptsAndStyles(Template $objTemplate)
    {
        $serviceName = ParseTemplate::class;
        trigger_error(
            sprintf(
                'Use of deprecated function "%s::%s". Use instead the service "%s::%s"',
                __CLASS__,
                __FUNCTION__,
                $serviceName,
                __FUNCTION__
            ),
            E_USER_DEPRECATED
        );

        /** @var ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ParseTemplate $helper */
        $helper = \System::getContainer()->get($serviceName);
        $helper->addScriptsAndStyles($objTemplate);
    }

    /**
     * Support the modal selector.
     *
     * @param string $strTable The table name.
     *
     * @return void
     *
     * @deprecated Use the service ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\LoadDataContainer
     */
    public function supportModalSelector($strTable)
    {
        $serviceName = LoadDataContainer::class;
        trigger_error(
            sprintf(
                'Use of deprecated function "%s::%s". Use instead the service "%s::%s"',
                __CLASS__,
                __FUNCTION__,
                $serviceName,
                __FUNCTION__
            ),
            E_USER_DEPRECATED
        );

        /** @var ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\LoadDataContainer $helper */
        $helper = \System::getContainer()->get($serviceName);
        $helper->supportModalSelector($strTable);
    }

    /**
     * Delegate fixing of ajax post actions to the service.
     *
     * @return void
     *
     * @deprecated Use the service ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem
     */
    public function changeAjaxPostActions()
    {
        $serviceName = InitializeSystem::class;
        trigger_error(
            sprintf(
                'Use of deprecated function "%s::%s". Use instead the service "%s::%s"',
                __CLASS__,
                __FUNCTION__,
                $serviceName,
                __FUNCTION__
            ),
            E_USER_DEPRECATED
        );

        /** @var ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\InitializeSystem $helper */
        $helper = \System::getContainer()->get($serviceName);
        $helper->changeAjaxPostActions();
    }

    /**
     * Delegate execution of ajax post actions to the service.
     *
     * @param string        $action    The action to execute.
     *
     * @param DataContainer $container The data container.
     *
     * @return void
     *
     * @deprecated Use the service ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions
     *
     * @throws \Exception
     */
    public function executePostActions($action, DataContainer $container)
    {
        $serviceName = ExecutePostActions::class;
        trigger_error(
            sprintf(
                'Use of deprecated function "%s::%s". Use instead the service "%s::%s"',
                __CLASS__,
                __FUNCTION__,
                $serviceName,
                __FUNCTION__
            ),
            E_USER_DEPRECATED
        );

        /** @var ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Contao\ExecutePostActions $helper */
        $helper = \System::getContainer()->get($serviceName);
        $helper->executePostActions($action, $container);
    }

    /**
     * Generates a filePicker icon.
     *
     * @param DataContainer $container The data container.
     *
     * @return string
     *
     * @deprecated Use the \ContaoCommunityAlliance\MultiColumnWizardBundle\Helper\MultiColumnWizardHelper::mcwFilePicker
     */
    public function mcwFilePicker(DataContainer $container)
    {
        return parent::mcwFilePicker($container);
    }
}
