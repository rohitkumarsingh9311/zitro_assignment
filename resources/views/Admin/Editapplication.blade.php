@extends('Admin.admin_master')

@section('main')

<div class="pagetitle">
      <h1>Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Application</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
          <div class="card">
            <div class="card-body">
              <!-- Custom Styled Validation -->
              <form action="{{route('application.store')}}" method="POST" class="row g-3 needs-validation was-validated" novalidate="">
                @csrf
                <input type="hidden" name="id" value="{{$application->id}}">
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Application name</label>
                  <input type="text" name="name" class="form-control" id="validationCustom01" value="{{$application->name}}" required="">
                  
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Application URL</label>
                  <input type="text" name="url" class="form-control" id="validationCustom02" value="{{$application->url}}" required="">
                  
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form><!-- End Custom Styled Validation -->

            </div>
          </div>
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

@endsection
