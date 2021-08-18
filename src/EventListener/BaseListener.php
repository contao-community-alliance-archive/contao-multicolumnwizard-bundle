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

namespace ContaoCommunityAlliance\MultiColumnWizardBundle\EventListener;

use Contao\Controller;
use Contao\System;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BaseListener
 */
class BaseListener extends Controller
{
    /**
     * BaseListener constructor.
     */
    // @codingStandardsIgnoreStart - This override is not useless, we change visibility.
    public function __construct()
    {
        parent::__construct();
    }
    // @codingStandardsIgnoreEnd

    /**
     * Import a library and make it accessible by its name or an optional key
     *
     * @param string $strClass The class name.
     *
     * @return mixed|object|string
     */
    protected function getNewClassInstance($strClass)
    {
        $container = System::getContainer();

        if (\is_object($strClass)) {
            return $strClass;
        } elseif ($container->has($strClass) && (strpos($strClass, '\\') !== false || !class_exists($strClass))) {
            return $container->get($strClass);
        } elseif (\in_array('getInstance', get_class_methods($strClass))) {
            return \call_user_func(array($strClass, 'getInstance'));
        } else {
            return new $strClass();
        }
    }

    /**
     * Convert a string to a response object
     * Copy from ajax.
     *
     * @param string $str The string to convert.
     *
     * @return Response
     */
    protected function convertToResponse($str)
    {
        return new Response(\Controller::replaceOldBePaths($str));
    }
}
