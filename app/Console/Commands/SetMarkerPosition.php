<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetMarkerPosition extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'markers:position {topPosition} {leftPosition}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Move Markers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        event(new \App\Events\MarkerWasMoved($this->argument('topPosition'), $this->argument('leftPosition')));
    }
}
