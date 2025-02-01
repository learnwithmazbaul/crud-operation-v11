@extends('layout.app')
@section('content')
<!-- Add Employee -->
<div class="" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">
                                <label class="form-label">Employee Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Employee Email *</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="col-12 p-1">
                                <label class="form-label">Employee Phone *</label>
                                <input type="text" class="form-control" id="phone">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection
