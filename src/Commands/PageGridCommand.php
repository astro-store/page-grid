<?php

namespace AstroStore\PageGrid\Commands;

use Illuminate\Console\Command;

class PageGridCommand extends Command
{
    public $signature = 'page-grid';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
