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

use Contao\DataContainer;
use Contao\Widget;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class CreateWidgetEvent
 */
class CreateWidgetEvent extends Event
{
    /**
     * Name of the event.
     */
    const NAME = 'contao-community-alliance.multi-column-wizard-bundle.create-widget';

    /**
     * The data container.
     *
     * @var DataContainer
     */
    private $dcDriver;

    /**
     * The widget.
     *
     * @var Widget
     */
    private $widget;

    /**
     * CreateNewRow constructor.
     *
     * @param DataContainer $dcDriver The data container.
     */
    public function __construct($dcDriver)
    {
        $this->dcDriver = $dcDriver;
    }

    /**
     * Get the data container.
     *
     * @return DataContainer
     */
    public function getDcDriver()
    {
        return $this->dcDriver;
    }

    /**
     * Get the widget.
     *
     * @return Widget
     */
    public function getWidget()
    {
        return $this->widget;
    }

    /**
     * Set the widget.
     *
     * @param Widget $widget The widget to use.
     *
     * @return self
     */
    public function setWidget($widget)
    {
        $this->widget = $widget;

        return $this;
    }
}
