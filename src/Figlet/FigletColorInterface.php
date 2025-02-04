<?php

/**
 * @copyright (c) 2009 - present. Mr Alexandre J-S William ELISÉ. All rights reserved.
 * @license       GNU Affero General Public License v3.0 or later (AGPL-3.0-or-later). See LICENSE.txt file
 */

namespace Povils\Figlet;


/**
 * Interface FigletInterface
 *
 * @package Povils\Figlet
 */
interface FigletColorInterface
{
    /**
     * @param   string  $color
     *
     * @return FigletInterface
     */
    public function setBackgroundColor($color);
}
