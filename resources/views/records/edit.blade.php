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
                <form action="{{ route('update-record', $record->id) }}" method="POST">
                    @csrf
                    <div class="row mainRow">

                        <div class="col-6">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="dropdown" class="form-label" aria-required="true">LGA</label>
                                </div>
                                <div class="col input">
                                    <select class="form-select" aria-label="Default select example" name="lga"
                                        value="{{ $record->lga }}">
                                        <div id="lga">
                                            <option disabled>Choose Lga</option>
                                            <option value="age" {{ $record->lga == 'age' ? 'selected' : '' }}>Agege</option>
                                            <option value="aje" {{ $record->lga == 'aje' ? 'selected' : '' }}>Ajeromi-Ifelodun</option>
                                            <option value="ali" {{ $record->lga == 'ali' ? 'selected' : '' }}>Alimosho</option>
                                            <option value="amu" {{ $record->lga == 'amu' ? 'selected' : '' }}>Amuwo-Odofin</option>
                                            <option value="apa" {{ $record->lga == 'apa' ? 'selected' : '' }}>Apapa</option>
                                            <option value="bad" {{ $record->lga == 'bad' ? 'selected' : '' }}>Badagry</option>
                                            <option value="epe" {{ $record->lga == 'epe' ? 'selected' : '' }}>Epe</option>
                                            <option value="eti" {{ $record->lga == 'eti' ? 'selected' : '' }}>Eti-Osa</option>
                                            <option value="ibe" {{ $record->lga == 'ibe' ? 'selected' : '' }}>Ibeju-Lekki</option>
                                            <option value="ifa" {{ $record->lga == 'ifa' ? 'selected' : '' }}>Ifako-Ijaye</option>
                                            <option value="ike" {{ $record->lga == 'ike' ? 'selected' : '' }}>Ikeja</option>
                                            <option value="iko" {{ $record->lga == 'iko' ? 'selected' : '' }}>Ikorodu</option>
                                            <option value="kos" {{ $record->lga == 'kos' ? 'selected' : '' }}>Kosofe</option>
                                            <option value="lag-i" {{ $record->lga == 'lag-i' ? 'selected' : '' }}>Lagos Island</option>
                                            <option value="lag-m" {{ $record->lga == 'lag-m' ? 'selected' : '' }}>Lagos Mainland</option>
                                            <option value="mus" {{ $record->lga == 'mus' ? 'selected' : '' }}>Mushin</option>
                                            <option value="ojo" {{ $record->lga == 'ojo' ? 'selected' : '' }}>Ojo</option>
                                            <option value="osh" {{ $record->lga == 'osh' ? 'selected' : '' }}>Oshodi-Isolo</option>
                                            <option value="somo" {{ $record->lga == 'somo' ? 'selected' : '' }}>Somolu</option>
                                            <option value="sur" {{ $record->lga == 'sur' ? 'selected' : '' }}>Surulere</option>

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
                                <div class="col-2 label">
                                    <label for="screened" class="form-label" aria-required="true">Screened</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="screened" id="screened" class="form-control"
                                        value="{{ $record->screened }}">
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
                                <div class="col-2 label">
                                    <label for="presumptive" class="form-label" aria-required="true">Presumptive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="presumptive" id="presumptive" class="form-control"
                                        value="{{ $record->presumptive }}">
                                    @error('presumptive')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="positive" class="form-label" aria-required="true">Positive</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="positive" id="positive" class="form-control"
                                        value="{{ $record->positive }}" disabled>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mainRow">
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="bacteriological" class="form-label"
                                        aria-required="true">Bacteriological</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="bacteriological" id="bacteriological" class="form-control"
                                        value="{{ $record->bacteriological }}">
                                    @error('bacteriological')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="clinical" class="form-label" aria-required="true">Clinical</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="clinical" id="clinical" class="form-control"
                                        value="{{ $record->clinical }}">
                                    @error('clinical')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
                                    <input type="number" name="linked" id="linked" class="form-control"
                                        value="{{ $record->linked }}">
                                    @error('linked')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="negative" class="form-label" aria-required="true">Negative</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="negative" id="negative" class="form-control"
                                        value="{{ $record->negative }}">
                                    @error('negative')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
                                    <input type="number" name="pending" id="pending" class="form-control"
                                        value="{{ $record->pending }}">
                                    @error('pending')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-2 label">
                                    <label for="invalid" class="form-label" aria-required="true">Invalid</label>
                                </div>
                                <div class="col input">
                                    <input type="number" name="invalid" id="invalid" class="form-control"
                                        value="{{ $record->invalid }}">
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
