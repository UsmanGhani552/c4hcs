@extends('layout.master')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active link" id="link" role="tabpanel">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Edit Link</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn btn-primary" href="{{ route('records') }}" role="button">Back</a>
                    </div>
                </div>
            </div>
            <div class="formDiv">
                <form action="{{ route('update-target' , $target->id) }}" method="POST">
                    @csrf
                    {{-- <div class="row mainRow">
                        <div class="col-1 label">
                            <label for="name" class="form-label" aria-required="true">Name</label>
                        </div>
                        <div class="col input">
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div> --}}
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="screened" class="form-label" aria-required="true">Screened</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="screened" id="screened" class="form-control" value="{{$target->screened}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="presumptive" class="form-label" aria-required="true">Presumptive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="presumptive" id="presumptive" class="form-control" value="{{$target->presumptive}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="positive" class="form-label" aria-required="true">Positive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="positive" id="positive" class="form-control" value="{{$target->positive}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="linked" class="form-label" aria-required="true">Linked</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="linked" id="linked" class="form-control" value="{{$target->linked}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mainRow">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="dropdown" class="form-label" aria-required="true">LGA</label>
                                </div>
                                <div class="col input">
                                    <select class="form-select" aria-label="Default select example" name="targets">
                                        <div id="lga">
                                            <option disabled>Choose Lga</option>
                                            <option value="MTHLY" {{$target->targets == "MTHLY" ? 'selected' : 'disabled'}}>MTHLY</option>
                                            <option value="MONTHLY" {{$target->targets == "MONTHLY" ? 'selected' : 'disabled'}}>MONTHLY</option>
                                            <option value="WEEKLY" {{$target->targets == "WEEKLY" ? 'selected' : 'disabled'}} >WEEKLY</option>
                                        </div>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection
