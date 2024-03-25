@extends('Admin.admin_master')

@section('main')

<div class="pagetitle">
      <h1>Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Add Employee</li>
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
              <form action="{{route('employee.store')}}" method="POST" class="row g-3 needs-validation was-validated" novalidate="">
                @csrf
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" name="firstname" class="form-control" id="validationCustom01" value="" required="">
                  
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" name="lastname" class="form-control" id="validationCustom02" value="" required="">
                  
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required="">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="validationCustom03" required="">
                  
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Registeration Date</label>
                  <input type="date" class="form-control" name="registrationdate" />
                  
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Department</label>
                  <input type="text" name="department" class="form-control" id="validationCustom05" required="">
                  
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Position</label>
                  <input type="text" name="position"  class="form-control" id="validationCustom05" required="">
                  
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
