@extends('layout.master')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active" id="currentweek" role="tabpanel" aria-labelledby="currentweek-tab">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Weekly</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn btn-success" href="{{ route('weekly-export') }}" role="button">Export
                            </a>
                    </div>
                </div>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="mainTable">
                <div class="container-fluid">
                    <div class="bottomTable">
                        <table class="table" id="mainTable">
                            <thead class="">
                                <tr>
                                    <th class="text-start">Start Date</th>
                                    <th>End Date</th>
                                    <th>Screened</th>
                                    <th><div class="badge bg-primary">Performance</div></th>
                                    <th>Presumptive</th>
                                    <th><div class="badge bg-primary">Performance</div></th>
                                    <th>Positive</th>
                                    <th><div class="badge bg-primary">Performance</div></th>
                                    <th>Linked</th>
                                    <th ><div class="badge bg-primary">Performance</div></th>
                                    <th>Negitive</th>
                                    <th>Pending</th>
                                    <th>Invalid</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    {{-- <th class="text-end">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody class="overflow-auto">
                                @if(count($current_week) > 0)
                                <tr>
                                    <td class="text-start">{{ date('jS M', strtotime($weeklyTotals->start_date)) }}</td>
                                    <td><div class="badge bg-danger">Current Week</div></td>
                                    <td>{{ $weeklyTotals->screened }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->screened }}%</div></td>

                                    <td>{{ $weeklyTotals->presumptive }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->presumptive }}%</div></td>

                                    <td>{{ $weeklyTotals->positive }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->positive }}%</div></td>

                                    <td>{{ $weeklyTotals->linked }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->linked }}%</div></td>

                                    <td>{{ $weeklyTotals->negative }}</td>
                                    <td>{{ $weeklyTotals->pending }}</td>
                                    <td>{{ $weeklyTotals->invalid }}</td>
                                    <td>{{ date('F', mktime(0, 0, 0, $weeklyTotals->month, 1)) }}</td>
                                    <td>{{ $weeklyTotals->year }}</td>
                                </tr>
                                @else
                                <tr>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td colspan="11" class="text-center">No Current Week Entry</td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                </tr>
                                @endif
                                @foreach ($weeklies as $weekly)
                                    <tr>
                                        <td class="text-start">{{ date('jS M', strtotime($weekly->start_date)) }}</td>
                                        <td>{{ date('jS M', strtotime($weekly->end_date)) }}</td>
                                        <td>{{ $weekly->screened }}</td>
                                        <td><div class="badge bg-primary">{{ $weekly->performance_screened }}%</div></td>

                                        <td>{{ $weekly->presumptive }}</td>
                                        <td><div class="badge bg-primary">{{ $weekly->performance_presumptive }}%</div></td>

                                        <td>{{ $weekly->positive }}</td>
                                        <td><div class="badge bg-primary">{{ $weekly->performance_positive }}%</div></td>

                                        <td>{{ $weekly->linked }}</td>
                                        <td><div class="badge bg-primary">{{ $weekly->performance_linked }}%</div></td>

                                        <td>{{ $weekly->negative }}</td>
                                        <td>{{ $weekly->pending }}</td>
                                        <td>{{ $weekly->invalid }}</td>
                                        <td>{{ date('F', mktime(0, 0, 0, $weekly->month, 1)) }}</td>
                                        <td>{{ $weekly->year }}</td>

                                        {{-- <td class="text-end">
                                            <div class="dropdown open">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="triggerId" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path
                                                            d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                                    <button class="dropdown-item" href="#">Edit</button>
                                                </div>
                                            </div>
                                            <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
