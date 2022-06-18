<?php

declare(strict_types=1);

namespace Gildie\task;

use pocketmine\scheduler\Task;
use Gildie\Main;

class NameTagsTask extends Task {

    public function onRun(): void {
        Main::getInstance()->getGuildManager()->updateNameTags();
    }
}