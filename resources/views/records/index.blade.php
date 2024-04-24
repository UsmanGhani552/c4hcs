@extends('layout.master')
@section('content')
    <div class="tab-content">


        <div class="tab-pane active" id="currentweek" role="tabpanel" aria-labelledby="currentweek-tab">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Total Records</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn btn-primary" href="{{ route('create-record') }}" role="button">Add
                            Record</a>
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
                    {{-- <div class="topTable">
                        <table class="table" id="topTable">
                            <thead class="">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        </th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="pinkHighlight">YLD</td>
                                    <td>
                                        </th>
                                    <td class="pinkHighlight">YLD</td>
                                    <td></td>
                                    <td class="pinkHighlight">YLD</td>
                                </tr>
                                <tr class="hoverHighlight">
                                    <td class="heading">MTHLY</td>
                                    <td>5000</td>
                                    <td> </td>
                                    <td>500</td>
                                    <td class="pinkHighlight">17%</td>
                                    <td>50</td>
                                    <td class="pinkHighlight">17%</td>
                                    <td>50</td>
                                    <td class="pinkHighlight">17%</td>
                                </tr>
                                <tr class="hoverHighlight">
                                    <td class="heading">MTHLY</td>
                                    <td>5000</td>
                                    <td> </td>
                                    <td>500</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                </tr>
                                <tr class="hoverHighlight">
                                    <td class="heading">MTHLY</td>
                                    <td>5000</td>
                                    <td> </td>
                                    <td>500</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                    <td>50</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                    <div class="bottomTable">
                        <table class="table" id="mainTable">
                            <thead class="">
                                <tr>
                                    <th>LGA</th>
                                    <th>SCR</th>
                                    <th class="bluebackground">
                                        <div class="badge bg-primary">PERF</div>
                                    </th>
                                    <th>PRES</th>
                                    <th class="bluebackground">
                                        <div class="badge bg-primary">PERF</div>
                                    </th>
                                    <th>POS</th>
                                    <th class="bluebackground">
                                        <div class="badge bg-primary">PERF</div>
                                    </th>
                                    <th>LAB</th>
                                    <th class="bluebackground">
                                        <div class="badge bg-primary">PERF</div>
                                    </th>
                                    <th>X-RAY</th>
                                    <th class="bluebackground">
                                        <div class="badge bg-primary">PERF</div>
                                    </th>
                                    <th>LKD</th>
                                    <th class="bluebackground">
                                        <div class="badge bg-primary">PERF</div>
                                    </th>
                                    <th>NEG</th>
                                    <th>PEND</th>
                                    <th>INVALID</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="overflow-auto">
                                @foreach ($current_week_records as $record)
                                    @php
                                        $screened_performance = number_format(
                                            ($record->screened / $weekly_target->screened) * 100,
                                            0,
                                            '',
                                            '',
                                        );
                                        $presumptive_performance = number_format(
                                            ($record->presumptive / $weekly_target->presumptive) * 100,
                                            0,
                                            '',
                                            '',
                                        );
                                        $positive_performance = number_format(
                                            ($record->positive / $weekly_target->positive) * 100,
                                            0,
                                            '',
                                            '',
                                        );
                                        $linked_performance = number_format(
                                            ($record->linked / $weekly_target->linked) * 100,
                                            0,
                                            '',
                                            '',
                                        );

                                        $class = '';

                                        if (
                                            $screened_performance <= 30 ||
                                            $presumptive_performance <= 30 ||
                                            $positive_performance <= 30 ||
                                            $linked_performance <= 30
                                        ) {
                                            $class = 'red';
                                        } elseif (
                                            ($screened_performance >= 31 && $screened_performance <= 60) ||
                                            ($presumptive_performance >= 31 && $presumptive_performance <= 60) ||
                                            ($positive_performance >= 31 && $positive_performance <= 60) ||
                                            ($linked_performance >= 31 && $linked_performance <= 60)
                                        ) {
                                            $class = 'yellow';
                                        } else {
                                            $class = 'green';
                                        }
                                    @endphp
                                    <tr class="{{ $class }}">
                                        <td>{{ strtoupper($record->lga) }}</td>
                                        <td>{{ $record->screened }}</td>
                                        <td class="bluebackground">
                                            <div class="badge bg-primary">
                                                {{ $screened_performance }}%
                                            </div>
                                        </td>
                                        <td>{{ $record->presumptive }}</td>
                                        <td class="bluebackground">
                                            <div class="badge bg-primary">
                                                {{ $presumptive_performance }}%
                                            </div>
                                        </td>
                                        <td>{{ $record->positive }}</td>
                                        <td class="bluebackground">
                                            <div class="badge bg-primary">
                                                {{ $positive_performance }}%
                                            </div>
                                        </td>
                                        <td>{{ $record->bacteriological }}</td>
                                        <td class="bluebackground">
                                            <div class="badge bg-primary">
                                                {{ $positive_performance }}%
                                            </div>
                                        </td>
                                        <td>{{ $record->clinical }}</td>
                                        <td class="bluebackground">
                                            <div class="badge bg-primary">
                                                {{ $positive_performance }}%
                                            </div>
                                        </td>
                                        <td>{{ $record->linked }}</td>
                                        <td class="bluebackground">
                                            <div class="badge bg-primary">
                                                {{ $linked_performance }}%
                                            </div>
                                        </td>
                                        <td>{{ $record->negative }}</td>
                                        <td>{{ $record->pending }}</td>
                                        <td>{{ $record->invalid }}</td>
                                        <td>{{ date('d-m-Y', strtotime($record->created_at)) }}</td>
                                        <td>
                                            <div class="dropdown open">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="triggerId" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path
                                                            d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                                    <a class="dropdown-item"
                                                        href="{{ route('edit-record', $record->id) }}">Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('delete-record', $record->id) }}">Delete</a>
                                                </div>
                                            </div>
                                            <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <h2 class="boxHeading">Monthly Performance</h2>
            <div class="boxData">
                <div class="container-fluid">
                    <div class="row">
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Screened</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Target :</td>
                                        <td colspan="2" class="heading">{{ $mthly_target->screened }}</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Total :</td>
                                        <td class="heading">{{ $screened_sum }}</td>
                                        {{-- <td class="heading">5000</td> --}}
                                    </tr>
                                    <tr>
                                        <td class="heading">Performance:</td>
                                        <td>{{ number_format(($screened_sum / $mthly_target->screened) * 100, 0) }}%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Presumptive</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Target :</td>
                                        <td colspan="2" class="heading">{{ $mthly_target->presumptive }}</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Total :</td>
                                        <td class="heading">{{ $presumptive_sum }}</td>
                                        {{-- <td class="heading">5000</td> --}}
                                    </tr>
                                    <tr>
                                        <td class="heading">Performance:</td>
                                        <td>{{ number_format(($presumptive_sum / $mthly_target->presumptive) * 100, 0) }}%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Positive</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Target :</td>
                                        <td colspan="2" class="heading">{{ $mthly_target->positive }}</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Total :</td>
                                        <td class="heading">{{ $positive_sum }}</td>
                                        {{-- <td class="heading">5000</td> --}}
                                    </tr>
                                    <tr>
                                        <td class="heading">Performance:</td>
                                        <td>{{ number_format(($positive_sum / $mthly_target->positive) * 100, 0) }}%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box">
                            <table class="table table-responsive table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="heading">Linked</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Target :</td>
                                        <td colspan="2" class="heading">{{ $mthly_target->linked }}</td>
                                    </tr>
                                    <tr>
                                        <td class="heading">Total :</td>
                                        <td class="heading">{{ $linked_sum }}</td>
                                        {{-- <td class="heading">5000</td> --}}
                                    </tr>
                                    <tr>
                                        <td class="heading">Performance:</td>
                                        <td>{{ number_format(($linked_sum / $mthly_target->linked) * 100, 0) }}%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="tab-pane" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
            profile
        </div>
        <div class="tab-pane" id="monthly" role="tabpanel">
            Monthly
        </div>
        <div class="tab-pane" id="settings" role="tabpanel">
            Settings
        </div>
        <div class="tab-pane link" id="link" role="tabpanel">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Create Link</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn btn-primary" href="#" role="button">Back</a>
                    </div>
                </div>
            </div>
            <div class="formDiv">
                <form action="">
                    <div class="row mainRow">
                        <div class="col-1 label">
                            <label for="name" class="form-label" aria-required="true">Name</label>
                        </div>
                        <div class="col input">
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="email" class="form-label" aria-required="true">Email</label>
                                </div>
                                <div class="col input">
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="phone" class="form-label" aria-required="true">Phone
                                        No.</label>
                                </div>
                                <div class="col input">
                                    <input type="tel" name="phone" id="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Changes</button>
                </form>
            </div>
        </div> --}}
    </div>
@endsection
