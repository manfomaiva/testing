@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('admin.services.create') }}" class="btn btn-inverse-info">Add Service</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Services All</h6>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>S1</th>
            <th>Title</th>
            <th>Description</th>
            <th>Icon</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $key => $item )
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->services_Title }}</td>
                <td>{{ $item->services_Description }}</td>
                <td>{{ $item->services_Icon }}

                <td>{{ $item->type_action}}
                    <a href="{{ route('edit.services',$item->id) }}" class="btn btn-inverse-warning">Edit</a>
                    <a href="{{ route('delete.services',$item->id) }}" class="btn btn-inverse-danger" id="delete">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>





@endsection
