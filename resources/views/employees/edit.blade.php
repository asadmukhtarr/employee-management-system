@extends('layouts.app')
@section('content')
<!-- Default box -->
  @include('alert')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Employee</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <form action="{{ route('employee.update',$employee->id) }}" method="post">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" value="{{ $employee->name }}" name="name" />
          @error('name')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" value="{{ $employee->email }}" name="email" />
          @error('email')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="form-group">
          <label>What's App</label>
          <input type="text" class="form-control" value="{{ $employee->whatsapp }}" name="wp" />
          @error('wp')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="form-group">
          <label>ID Card</label>
          <input type="text" class="form-control" value="{{ $employee->idcard }}" name="id" />
          @error('id')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="form-group">
          <label>Salary</label>
          <input type="text" class="form-control" value="{{ $employee->salary }}" name="salary" />
          @error('salary')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="form-group">
          <button class="btn btn-danger"><i class="fa fa-save"></i> Save </button>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>

@endsection