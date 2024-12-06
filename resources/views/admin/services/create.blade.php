@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('admin.services.index') }}" class="btn btn-inverse-info">Back to Services</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add New Service</h6>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.services.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="services_name">Title</label>
                            <input type="text" class="form-control" id="services_name" name="services_name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="type_icon">Icon</label>
                            <input type="text" class="form-control" id="type_icon" name="type_icon" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
