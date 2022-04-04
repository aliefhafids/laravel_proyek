@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Employee</h2>
</div>


@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/dashboard/employee/create" class="btn btn-primary mb-3">New Employee</a>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Jobdesk</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->category_employees->name}}</td>
                <td>
                    <a href="/dashboard/employee/" class="badge bg-info"><span
                            data-feather="eye"></span></a>
                    <a href="/dashboard/employee/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/employee/{{ $employee->slug }}" method="post" class="d-inline   ">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
                <td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


