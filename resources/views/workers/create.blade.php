@extends('admin')
@section('content')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Worker</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
    <form action="{{ route('workers.store') }}" method="POST" >
			@csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Worker</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Full Name</label>
                <input type="text" name="fullname" class="form-control" placeholder="Full Name" required >
              </div>
              <div class="form-group">
                <label for="inputClientCompany">salary</label>
                <input type="number" name="salary" class="form-control"  placeholder="salary"required >
              </div>
              <div class="form-group">
                <label for="inputName">job</label>
                <input type="text" name="job" class="form-control" placeholder="job"required >
              </div>
              <div class="form-group">
                <label for="inputName">debut of contrat</label>
                <input type="date" name="debut_of_contrat" class="form-control"required >
              </div>
              <div class="form-group">
                <label for="inputName">end of contrat</label>
                <input type="date" name="end_of_contrat" class="form-control" required>
              </div>
              
              <div class="form-group">
                <label for="inputClientCompany">phone number</label>
                <input type="number" name="phone_number" class="form-control"required  placeholder="phone number" >
              </div>
             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
      
        <div class="col-12">
        <input type="reset" value="cancel" class="btn btn-secondary ">
          <input type="submit" value="ADD New Worker" class="btn btn-success ">
        </div>
      </form>
    </section>
    
@endsection