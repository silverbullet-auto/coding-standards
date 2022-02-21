<?php

namespace SilverBulletAuto\CodingStandards\Commands;

use Illuminate\Console\Command;

class CodingStandardsCommand extends Command
{
    public $signature = 'silverbullet-coding-standards';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
