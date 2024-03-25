@extends('Admin.admin_master')

@section('main')
    <div class="pagetitle">
      <h1>Application</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Application</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Application</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      S.no
                    </th>
                    <th>name</th>
                    <th>url</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $i = 1
                    @endphp
                    @foreach($applications as $application)
                    

                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$application->name}}</td>
                    <td>{{$application->url}}</td>
                    <td>
                    @if($application->status==1)
                    <span class="badge bg-success">Active</span>
                    @else 
                    <span class="badge bg-danger">Inactive</span>
                    @endif</td>
                    <td>
                        @if($application->status==1)
                        <a class="btn btn-success" href="{{route('application.status.change',$application->id)}}"><i class="bi bi-toggle2-on"></i></a>

                        @else 
                        <a class="btn btn-warning" href="{{route('application.status.change',$application->id)}}"><i class="bi bi-toggle2-off"></i></a>
                        @endif
                        
                        <a class="btn btn-primary" href="{{route('application.edit',$application->id)}}"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger" href="{{route('application.delete',$application->id)}}"><i class="bi bi-trash"></i></a>
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
