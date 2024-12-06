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
                    <h6 class="card-title">Edit Service</h6>
                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="services_name">Title</label>
                            <input type="text" class="form-control" id="serviceblogsingles_name" name="services_name" value="{{ $service->services_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $service->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="type_icon">Icon</label>
                            <input type="text" class="form-control" id="type_icon" name="type_icon" value="{{ $service->type_icon }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
