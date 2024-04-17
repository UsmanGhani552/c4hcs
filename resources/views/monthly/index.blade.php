@extends('layout.master')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active" id="currentweek" role="tabpanel" aria-labelledby="currentweek-tab">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Monthly</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn green" href="{{ route('monthly-export') }}" role="button">Export
                        </a>
                    </div>
                </div>
            </div>dbece6
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
                                @if(count($current_month) > 0)
                                <tr>
                                    <td class="text-start">{{ date('jS M', strtotime($monthlyTotals->start_date)) }}</td>
                                    <td><div class="badge bg-danger">Current Month</div></td>
                                    <td>{{ $monthlyTotals->screened }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->screened }}%</div></td>

                                    <td>{{ $monthlyTotals->presumptive }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->presumptive }}%</div></td>

                                    <td>{{ $monthlyTotals->positive }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->positive }}%</div></td>

                                    <td>{{ $monthlyTotals->linked }}</td>
                                    <td><div class="badge bg-primary">{{ $performance->linked }}%</div></td>

                                    <td>{{ $monthlyTotals->negative }}</td>
                                    <td>{{ $monthlyTotals->pending }}</td>
                                    <td>{{ $monthlyTotals->invalid }}</td>
                                    <td>{{ date('F', mktime(0, 0, 0, $monthlyTotals->month, 1)) }}</td>
                                    <td>{{ $monthlyTotals->year }}</td>
                                </tr>
                                @else
                                <tr>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td colspan="15" class="text-center">No Current Month Entry</td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                    <td style="display: none;"></td>
                                </tr>
                                @endif
                                @foreach ($monthlies as $monthly)
                                    <tr>
                                        <td class="text-start">{{ date('jS M', strtotime($monthly->start_date)) }}</td>
                                        <td>{{ date('jS M', strtotime($monthly->end_date)) }}</td>
                                        <td>{{ $monthly->screened }}</td>

                                        <td><div class="badge bg-primary">{{ $monthly->performance_screened }}%</div></td>

                                        <td>{{ $monthly->presumptive }}</td>
                                        <td><div class="badge bg-primary">{{ $monthly->performance_presumptive }}%</div></td>

                                        <td>{{ $monthly->positive }}</td>
                                        <td><div class="badge bg-primary">{{ $monthly->performance_positive }}%</div></td>

                                        <td>{{ $monthly->linked }}</td>
                                        <td><div class="badge bg-primary">{{ $monthly->performance_linked }}%</div></td>
                                        <td>{{ $monthly->negitive }}</td>
                                        <td>{{ $monthly->pending }}</td>
                                        <td>{{ $monthly->invalid }}</td>
                                        <td>{{ date('F', mktime(0, 0, 0, $monthly->month, 1)) }}</td>
                                        <td>{{ $monthly->year }}</td>

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
