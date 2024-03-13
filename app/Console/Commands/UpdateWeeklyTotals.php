<?php

namespace App\Console\Commands;

use App\Models\Record;
use App\Models\Weekly;
use Illuminate\Console\Command;

class UpdateWeeklyTotals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:weekly-totals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update weekly totals for entries';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get the current date
        $endDate = now();

        // Calculate the start date (7 days ago)
        $startDate = $endDate->copy()->subDays(6);

        // Retrieve entries within the last 7 days
        $entries = Record::whereBetween('entry_date', [$startDate, $endDate])->get();

        // Calculate weekly totals
        $weeklyTotals = [
            'screened' => $entries->sum('screened'),
            'presumptive' => $entries->sum('presumptive'),
            'positive' => $entries->sum('positive'),
            'linked' => $entries->sum('linked'),
            'negitive' => $entries->sum('negitive'),
            'pending' => $entries->sum('pending'),
            'invalid' => $entries->sum('invalid'),
            'month' => $entries->isEmpty() ? null : $entries->first()->entry_date->month,
            'year' => $entries->isEmpty() ? null : $entries->first()->entry_date->year,
            'start_date' => $startDate,
            'end_date' => $endDate
        ];

        // Update or create a Week record
        Weekly::updateOrCreate(
            $weeklyTotals
        );

        $this->info('Weekly totals updated successfully!');
    }
}
