<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\UpdateWeeklyTotals;
use App\Console\Commands\UpdateMonthlyTotals;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        UpdateWeeklyTotals::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('update:weekly-totals')->everyMinute();
        $schedule->command(UpdateMonthlyTotals::class)->monthly()->at('00:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
