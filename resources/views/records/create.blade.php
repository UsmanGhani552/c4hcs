@extends('layout.master')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active link" id="link" role="tabpanel">
            <div class="container-fluid current-head">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Create Link</h2>
                    </div>
                    <div class="col-lg-6">
                        <a id="" class="btn btn-primary" href="{{ route('records') }}" role="button">Back</a>
                    </div>
                </div>
            </div>
            <div class="formDiv">
                <form action="{{ route('store-record') }}" method="POST">
                    @csrf
                    <div class="row mainRow">

                        <div class="col-6">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="dropdown" class="form-label" aria-required="true">LGA</label>
                                </div>
                                <div class="col input">
                                    <select class="form-select" aria-label="Default select example" name="lga">
                                        <div id="lga">
                                            <option selected disabled>Choose Lga</option>
                                            <option value="ajr">AJR</option>
                                            <option value="bdy">BDY</option>
                                            <option value="epe">EPE</option>
                                            <option value="lkd">LKD</option>
                                            <option value="ifk">LFK</option>
                                            <option value="alm">ALM</option>
                                            <option value="ojo">OJO</option>
                                            <option value="xxx">XXX</option>
                                        </div>
                                    </select>
                                    @error('lga')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="screened" class="form-label" aria-required="true">Screened</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="screened" id="screened" class="form-control">
                                    @error('screened')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="presumptive" class="form-label" aria-required="true">Presumptive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="presumptive" id="presumptive" class="form-control">
                                    @error('presumptive')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="positive" class="form-label" aria-required="true">Positive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="positive" id="positive" class="form-control" disabled>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="bacteriological" class="form-label"
                                        aria-required="true">Bacteriological</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="bacteriological" id="bacteriological" class="form-control">
                                    @error('bacteriological')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">

                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="clinical" class="form-label" aria-required="true">Clinical</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="clinical" id="clinical" class="form-control">
                                    @error('clinical')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="linked" class="form-label" aria-required="true">Linked</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="linked" id="linked" class="form-control">
                                    @error('linked')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">

                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="negative" class="form-label" aria-required="true">Negative</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="negative" id="negative" class="form-control">
                                    @error('negative')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="pending" class="form-label" aria-required="true">Pending</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="pending" id="pending" class="form-control">
                                    @error('pending')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">

                        <div class="col-6">
                            <div class="row">
                                <div class="col-3 label">
                                    <label for="invalid" class="form-label" aria-required="true">Invalid</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="invalid" id="invalid" class="form-control">
                                    @error('invalid')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
