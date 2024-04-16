<?php

namespace App\Console\Commands;

use App\Models\Record;
use App\Models\Target;
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

        // Calculate the start date of the previous month
        $startDate = $endDate->copy()->subWeek()->startOfWeek();

        // Calculate the end date of the previous Week
        $endDate = $endDate->copy()->subWeek()->endOfWeek();    



        // Retrieve entries within the last 7 days
        $entries = Record::whereBetween('created_at', [$startDate, $endDate])->get();

        $weekly_target = Target::where('id', 3)->first();

        // Calculate weekly totals
        $weeklyTotals = [
            'screened' => $entries->sum('screened'),
            'presumptive' => $entries->sum('presumptive'),
            'positive' => $entries->sum('positive'),
            'linked' => $entries->sum('linked'),
            'negative' => $entries->sum('negative'),
            'pending' => $entries->sum('pending'),
            'invalid' => $entries->sum('invalid'),
            'month' => $entries->isEmpty() ? null : $entries->first()->created_at->month,
            'year' => $entries->isEmpty() ? null : $entries->first()->created_at->year,
            'start_date' => $startDate,
            'end_date' => $endDate
        ];

        $performance = [
            'performance_screened' => intval(number_format(($weeklyTotals['screened'] / ($weekly_target->screened * 10)) * 100, 0)),
            'performance_presumptive' => intval(number_format(($weeklyTotals['presumptive'] / ($weekly_target->presumptive * 10)) * 100, 0)),
            'performance_positive' => intval(number_format(($weeklyTotals['positive'] / ($weekly_target->positive * 10)) * 100, 0)),
            'performance_linked' => intval(number_format(($weeklyTotals['linked'] / ($weekly_target->linked * 10)) * 100, 0))
        ];
        // dd($performance);

        // Merge $weeklyTotals and $performance into a single array
        $attributes = array_merge($weeklyTotals, $performance);
        // dd($attributes);

        // Update or create a Week record
        // Weekly::create($attributes);

        Weekly::updateOrCreate([
                'week_number' => $startDate->weekOfYear,
                'year' => $startDate->year
            ],
            $attributes
        );
    }
}
