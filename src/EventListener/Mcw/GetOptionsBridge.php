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

namespace ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener\Mcw;

use ContaoCommunityAlliance\MultiColumnWizard\Event\GetOptionsEvent;
use ContaoCommunityAlliance\MultiColumnWizardBundle\Event\GetOptionsEvent as GetOptionEventBundle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class GetOptionsBridge
 */
class GetOptionsBridge
{
    /**
     * The event dispatcher.
     *
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * ExecutePostActions constructor.
     *
     * @param EventDispatcherInterface $eventDispatcher The event dispatcher.
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * Listener for building the tiny mce.
     *
     * @param GetOptionEventBundle $event The event.
     *
     * @return void
     */
    public function executeEvent(GetOptionEventBundle $event)
    {
        // Check if we have some old events.
        if (!$this->eventDispatcher->hasListeners(GetOptionsEvent::NAME)) {
            return;
        }

        $eventOld = new GetOptionsEvent(
            $event->getPropertyName(),
            $event->getSubPropertyName(),
            $event->getEnvironment(),
            $event->getModel(),
            $event->getWidget(),
            $event->getOptions()
        );
        $this->eventDispatcher->dispatch($eventOld::NAME, $eventOld);

        if ($eventOld->getOptions() !== $event->getOptions()) {
            $event->setOptions($eventOld->getOptions());
        }
    }
}
