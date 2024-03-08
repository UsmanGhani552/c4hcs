@extends('layout.master')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active link" id="link" role="tabpanel">
            <h2>Create Link</h2>
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
        </div>
    </div>
@endsection
