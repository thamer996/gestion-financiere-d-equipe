@extends('admin')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Payments</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    

    <!-- Main content -->
    <form action="{{ route('payments.store') }}" method="POST" >
    
			@csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Payment</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Destination</label>
                <input type="text" name="destination" class="form-control" placeholder="Source" required>
              </div>
              <div class="form-group">
                <label for="inputName">price($)</label>
                <input type="number" name="price" class="form-control" placeholder="price" required>
              </div>
              <div class="form-group">
                <label for="inputName">reason</label>
                <input type="text" name="reason" class="form-control" placeholder="reason" required>
              </div>
             
              
             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
      
        <div class="col-12">
        <input type="reset" value="Cancel" class="btn btn-secondary ">
          <input type="submit" value="ADD New Payment" class="btn btn-success ">
        </div>
        
    </section>
    
@endsection