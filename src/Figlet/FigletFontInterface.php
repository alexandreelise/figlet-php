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
interface FigletFontInterface
{
    /**
     * @param   string  $fontName
     *
     * @return FigletInterface
     */
    public function setFont($fontName);

    /**
     * @param   string  $color
     *
     * @return FigletInterface
     */
    public function setFontColor($color);

    /**
     * @param   string  $fontDir
     *
     * @return FigletInterface
     */
    public function setFontDir($fontDir);

    /**
     * @param   int  $stretching
     *
     * @return FigletInterface
     */
    public function setFontStretching($stretching);
}
