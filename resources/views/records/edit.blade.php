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
                <form action="{{ route('update-record',$record->id) }}" method="POST">
                    @csrf
                    <div class="row mainRow">

                        <div class="col-6">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="dropdown" class="form-label" aria-required="true">LGA</label>
                                </div>
                                <div class="col input">
                                    <select class="form-select" aria-label="Default select example" name="lga" value="{{$record->lga}}">
                                        <div id="lga">
                                            <option disabled>Choose Lga</option>
                                            <option value="agr" {{$record->lga == "ajr" ? 'selected' : ''}}>AJR</option>
                                            <option value="bdy" {{$record->lga == "bdy" ? 'selected' : ''}}>BDY</option>
                                            <option value="epe" {{$record->lga == "epe" ? 'selected' : ''}} >EPE</option>
                                            <option value="lkd" {{$record->lga == "lkd" ? 'selected' : ''}} >LKD</option>
                                            <option value="ifk" {{$record->lga == "ifk" ? 'selected' : ''}} >LFK</option>
                                            <option value="alm" {{$record->lga == "alm" ? 'selected' : ''}} >ALM</option>
                                            <option value="ojo" {{$record->lga == "ojo" ? 'selected' : ''}} >OJO</option>
                                            <option value="xxx" {{$record->lga == "xxx" ? 'selected' : ''}} >XXX</option>
                                        </div>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="screened" class="form-label" aria-required="true">Screened</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="screened" id="screened" class="form-control" value="{{$record->screened}}" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="presumptive" class="form-label" aria-required="true">Presumptive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="presumptive" id="presumptive" class="form-control" value="{{$record->presumptive}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="positive" class="form-label" aria-required="true">Positive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="positive" id="positive" class="form-control" value="{{$record->positive}}" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="linked" class="form-label" aria-required="true">Linked</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="linked" id="linked" class="form-control" value="{{$record->linked}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="negative" class="form-label" aria-required="true">Negative</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="negative" id="negative" class="form-control" value="{{$record->negative}}" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="pending" class="form-label" aria-required="true">Pending</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="pending" id="pending" class="form-control" value="{{$record->pending}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="invalid" class="form-label" aria-required="true">Invalid</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="invalid" id="invalid" class="form-control" value="{{$record->invalid}}" required>
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
