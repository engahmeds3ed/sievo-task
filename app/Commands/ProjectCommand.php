<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ProjectCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'project
                            {file : Full path to the input file}
                            {--sortByStartDate : sort results by column "Start date" in ascending order}
                            {--project : filter results by column "Project"}
                            ';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Get projects details based on some filtration from CSV file.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
