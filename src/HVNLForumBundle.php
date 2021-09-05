<?php

/*
 * This file is part of the HVNLForumBundle package.
 *
 * (c) Henry Voorburg <git@henryvoorburg.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HVNL\ForumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Henry Voorburg <git@henryvoorburg.nl>
 */
class HVNLForumBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}