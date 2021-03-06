<?php
declare(strict_types=1);

namespace LotGD\Core\Console\Command;

use Symfony\Component\Console\Command\Command;

use LotGD\Core\Game;

/**
 * Parent class for daenerys tool commands.
 */
abstract class BaseCommand extends Command
{
    protected $game;

    /**
     * Construct the command, using the provided Game.
     * @param Game $game
     */
    public function __construct(Game $game)
    {
        parent::__construct();
        $this->game = $game;
    }
}
