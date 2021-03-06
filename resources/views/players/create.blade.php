@extends('admin')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Players</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add player</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data" >
			@csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="first Name" oninvalid="setCustomValidity('please fill out this field')" required>
              </div>
              <div class="form-group">
                <label for="inputName">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="last Name" required>
              </div>
              
              <div class="form-group">
                <label for="inputName">Date of birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
              </div>
              <div class="form-group">
                        <label>position</label>
                        <select class="form-control" name="position">
                          <option>goalkeeper</option>
                          <option>defence</option>
                          <option>midfield</option>
                          <option>forward</option>
                         
                        </select>
                      </div>
                      <div class="form-group">
                <label for="inputName">nationality</label>
                <input type="text" name="nationality" class="form-control" placeholder="nationality"  required>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">phone number</label>
                <input type="number" name="phone_number" class="form-control"  placeholder="phone number" required>
              </div>
              <div class="form-group">
                <strong>player Image:</strong>
                 <input type="file" name="image" class="form-control" value="public/vm59Oddo3JTifRt8iSv1Zj5Nx3tb9c7M0TiGJ31L.jpg" placeholder="Post Title">
               
            </div>
</div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">contract</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">contract debut</label>
                <input type="date" name="debut_of_contrat"  class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">End of contract</label>
                <input type="date" name="end_of_contrat" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">salary</label>
                <input type="number" name="salary" class="form-control"  placeholder="salary">
              </div>
            </div>
            
            <!-- /.card-body -->
          </div>
          <div class="row">
        <div class="col-12">
        <input type="reset" value="cancel" class="btn btn-secondary ">
          <input type="submit" value="ADD New player" class="btn btn-success float-right">
        </div>
          <!-- /.card -->
        </div>
      </div>
     
      </div>
      </form>
    </section>
    
@endsection