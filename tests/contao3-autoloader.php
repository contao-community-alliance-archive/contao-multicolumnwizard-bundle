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
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2011 Andreas Schempp
 * @copyright  2011 certo web & design GmbH
 * @copyright  2013-2019 MEN AT WORK
 * @copyright  2021 The CCA team.
 * @license    https://spdx.org/licenses/LGPL-3.0-or-later.html LGPL-3.0-or-later
 * @filesource
 */

spl_autoload_register(

    /*
     * Mapping between root namespace of contao and the contao namespace.
     * Can map class, interface and trait.
     */

    function ($class) {
        if (substr($class, 0, 7) === 'Contao\\') {
            return;
        }

        // Class.
        if (!\class_exists($class, true) && \class_exists('\\Contao\\' . $class, true)) {
            if (!\class_exists($class, false)) {
                \class_alias('\\Contao\\' . $class, $class);
            }

            return;
        }

        // Trait.
        if (!\trait_exists($class, true) && \trait_exists('\\Contao\\' . $class, true)) {
            if (!\trait_exists($class, false)) {
                \class_alias('\\Contao\\' . $class, $class);
            }

            return;
        }

        // Interface.
        if (!\interface_exists($class, true) && \interface_exists('\\Contao\\' . $class, true)) {
            if (!\interface_exists($class, false)) {
                \class_alias('\\Contao\\' . $class, $class);
            }

            return;
        }
    }
);
