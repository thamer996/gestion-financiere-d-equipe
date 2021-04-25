@extends('admin')
@section('content')
<head>
<style>
  
  #total {
  text-align: center;
  color: red;
}
  </style>
</head>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Workers</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
<section class="content">
      <div class="container-fluid">
      <a class="btn btn-success" href="{{ route('workers.create') }}" role="button">New Worker</a>
        <div class="row">
          
          <div class="col-12">
            <div class="card">
              
              <div class="card-header">
                <h3 class="card-title">List of workers</h3>
                
              </div>
              
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>name</th>
                    <th>job</th>
                    <th>debut of contrat</th>
                    <th>end of contrat</th>
                    <th>salary($)</th>
                    <th>phone</th>
                    <th>pay</th>
                    <th>more</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($workers as $worker)
                  
                 
                  <tr>
                    <td>{{$worker->fullname}}</td>
                    <td>{{$worker->job}}</td>
                    <td>{{$worker->debut_of_contrat}}</td>
                    <td>{{$worker->end_of_contrat}}</td>
                    <td>{{$worker->salary}}</td>
                    <td>{{$worker->phone_number}}</td>
                    <td>
                    <a class="btn btn-success btn-sm" href="{{url('payworker/'.$worker->id) }}" role="button">pay</a>
                    </td>
                    <td> 
                    <form action="{{ route('workers.destroy', $worker->id) }}" method="POST"> 
                    <a href="{{ route('workers.edit', $worker->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this {{$worker->fullname}}?')" class=" btn btn-danger btn-sm">delete</button>
                            </form> 
                            
                  </tr>
                  
                  @endforeach
                  </tbody>
                  <tfoot>
                
                  </tfoot>
                </table>
              </div>
             
            </div>
           

           
            
          </div>
          
        </div>
        
      </div>
      
    </section>
@endsection