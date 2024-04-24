@extends('layout.master')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active" id="currentweek" role="tabpanel" aria-labelledby="currentweek-tab">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Targets</h2>
                    </div>
                    <div class="col-lg-6">
                        {{-- <a id="" class="btn btn-primary" href="{{ route('create-record') }}" role="button">Add
                            Record</a> --}}
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
                                    <th class="text-start">Type</th>
                                    <th>Screened</th>
                                    <th>Presumptive</th>
                                    <th>
                                        <div class="badge bg-danger">
                                            PRES(YLD)
                                        </div>
                                    </th>
                                    <th>Positive</th>
                                    <th>
                                        <div class="badge bg-danger">
                                            POS(YLD)
                                        </div>
                                    </th>
                                    <th>Linked</th>
                                    <th>
                                        <div class="badge bg-danger">
                                            LKD(YLD)
                                        </div>
                                    </th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="overflow-auto">
                                @foreach ($targets as $index => $target)
                                    <tr>
                                        <td class="text-start">{{ $target->targets }}</td>
                                        <td>{{ $target->screened }}</td>

                                        <td>{{ $target->presumptive }}</td>
                                        @if ($index === 0)
                                            <td>
                                                <div class="badge bg-danger">
                                                    {{ number_format(($presumptive_sum / $screened_sum) * 100, 0) }}%
                                                </div></td>
                                        @else
                                            <td></td>
                                        @endif

                                        <td>{{ $target->positive }}</td>
                                        @if ($index === 0)
                                            <td>
                                                <div class="badge bg-danger">
                                                    {{ number_format(($positive_sum / $presumptive_sum) * 100, 0) }}%
                                                </div></td>
                                        @else
                                            <td></td>
                                        @endif

                                        <td>{{ $target->linked }}</td>
                                        @if ($index === 0)
                                            <td>
                                                <div class="badge bg-danger">
                                                    {{ number_format(($linked_sum / $positive_sum) * 100, 0) }}%
                                                </div></td>
                                        @else
                                            <td></td>
                                        @endif
                                        <td class="text-end">
                                            <div class="dropdown open">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="triggerId" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path
                                                            d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                                    <a class="dropdown-item" href="{{ route('edit-target' , $target->id) }}">Edit</a>
                                                </div>
                                            </div>
                                            <!-- <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg></button> -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                </div>
            </div>
        </div>

    </div>
@endsection
