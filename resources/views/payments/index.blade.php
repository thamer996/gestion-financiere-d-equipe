@extends('admin')
@section('content')
<head>
<style>
  
  #total {
  text-align: center;
  color: red;
}
.btn btn-success{
    
}
  </style>
</head>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Payments</li>
            </ol>
           
          </div>
          
        </div>
        <div class="row">
                
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total amount spent</span>
                      <span class="info-box-number text-center text-muted mb-0">2000$</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Payment Bills</span>
                      <span class="info-box-number text-center text-muted mb-0">20</span>
                    </div>
                    
                  </div>
                </div>
               
              </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
      <div> 
                <a class="btn btn-success" href="{{ route('payments.create') }}" role="button">New payment</a>
              </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Payments</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Destination</th>
                    <th>Price</th>
                    <th>reason</th>
                    <th>created at</th>
                    <th>more</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($payments as $payment)
                  
                 
                  <tr>
                    <td>{{$payment->destination}}</td>
                    <td>{{$payment->price}}$</td>
                    <td>{{$payment->reason}}</td>
                    <td>{{ date_format($payment->created_at, 'jS M Y') }}</td>
                    <td>
                    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST"> 
                    <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this bill?')" class=" btn btn-danger btn-sm">delete</button>
                            </form> 
                  </tr>
                 
                 @endforeach
                  
                  </tbody>
                  <tfoot>
                 <tr>
                 
                   
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection