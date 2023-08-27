@extends('layouts.app')
@section('content')
<!-- Default box -->
  @include('alert')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Employees <font color="red">{{ $salary_sum }} PKR</font></h3>
      <div class="card-tools">
        <a href="{{ route('month.salary') }}">
          <button class="btn btn-sm btn-success float-right"> <i class="fa fa-money"></i> Current Month Salaries</button>
        </a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>What's App</th>
          <th>Salary</th>
          <th>Actions</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->whatsapp }}</td>
          <td>{{ $employee->salary }}</td>
          <td>
            <a href="{{ route('employee.edit',$employee->id) }}">  
            <button class="btn btn-success"><i class="fa fa-edit"></i></button>
            </a>
            <a href="{{ route('employee.delete',$employee->id) }}">
              <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>

@endsection