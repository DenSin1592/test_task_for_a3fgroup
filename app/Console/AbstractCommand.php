<?php

namespace App\Console;

use Illuminate\Console\Command;


abstract class AbstractCommand extends Command
{
    private \Illuminate\Support\Carbon $timeStart;

    abstract public function handleCommand(): void;


    public function handle()
    {
        $this->start();
        $this->handleCommand();
        $this->finish();
        return 0;
    }


    private function start(): void
    {
        $this->line('Command start') ;
        $this->timeStart = now();
    }


    private function finish(): void
    {
        $timeMinutesEnd = $this->timeStart->diffInMinutes(now());
        $timeSecondsEnd = $this->timeStart->diffInSeconds(now());
        $this->info('Command end');
        $this->comment('Lead time - ' . $timeMinutesEnd .' minutes (' . $timeSecondsEnd .' seconds)');
    }
}


