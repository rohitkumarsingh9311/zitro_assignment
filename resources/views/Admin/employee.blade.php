@extends('Admin.admin_master')

@section('main')
    <div class="pagetitle">
      <h1>Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Employee</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Employee</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      S.no
                    </th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th >Department</th>
                    <th>Position</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                    @endphp
                    @foreach($employees as $employee)
                    

                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$employee->username}}</td>
                    <td>{{$employee->firstname.' '.$employee->lastname}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->department}}</td>
                    <td>{{$employee->position}}</td>
                    <td>
                        @if($employee->status==1)
                        <a class="btn btn-success" href="{{route('employee.status.change',$employee->id)}}"><i class="bi bi-toggle2-on"></i></a>

                        @else 
                        <a class="btn btn-warning" href="{{route('employee.status.change',$employee->id)}}"><i class="bi bi-toggle2-off"></i></a>
                        @endif
                        
                        <a class="btn btn-primary" href="{{route('employee.edit',$employee->id)}}"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger" href="{{route('employee.delete',$employee->id)}}"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
