<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Context;

use Behat\Behat\Context\Snippet\Generator\ContextTurnipSnippetGenerator;

/**
 * Turnip-accepting context interface.
 *
 * Context that implements this interface is treated as a turnip-friendly context.
 *
 * @see ContextTurnipSnippetGenerator
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface TurnipAcceptingContext extends Context
{
}
