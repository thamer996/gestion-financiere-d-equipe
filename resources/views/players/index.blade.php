@extends('admin')
@section('content')


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">players</li>
            </ol>
            
          </div>
          
        </div>
        <a class="btn btn-success" href="{{ route('players.create') }}" role="button">New Player</a>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <section class="content">
      <!-- Default box -->
      
      <div class="card card-solid">
      
        <div class="card-body pb-20">
        
          <div class="row">
          @foreach($players as $player)
            <div class="col-lg-4 col-md-9">
            <form action="{{ route('players.destroy', $player->id) }}" method="POST"> 
            <a href="{{ route('players.edit', $player->id) }}"  class="btn btn-primary btn-sm">Edit</a>
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Are you sure you want to delete {{$player->firstname}} ?')" class=" btn btn-danger btn-sm">delete</button>
                            </form>
              <div class="card bg-light d-flex flex-fill">
              
                <div class="card-header text-muted border-bottom-0">
             <h2><b>{{$player->firstname}} {{$player->lastname}}</b></h2>
                 
                </div>
                <div class="card-body pt-">
                  
                  <div class="row">
                    
                    <div class="col-6">
                    <p class="text-muted text-sm"><b>position:<br></b> {{$player->position}}</p>
                      
                      <p class="text-muted text-sm"><b>date of birth:<br></b> {{$player->date_of_birth}}</p>
                      <p class="text-muted text-sm"><b>debut of contract: </b> {{$player->debut_of_contrat}}</p>
                      <p class="text-muted text-sm"><b>end of contract: <br></b> {{$player->end_of_contrat}}</p>
                      <p class="text-muted text-sm"><b>salary: </b> {{$player->salary}}$</p>
                      <p class="text-muted text-sm"><i class="fas fa-lg fa-phone"></i><b> </b> {{$player->phone_number}}</p>
                      
                     
                    </div>
                    
                    <div class="col-6 ">
                    
                      <img src="{{ Storage::url($player->image) }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                    
                  </div>
                  
                </div>
                <div class="card-footer">
                  <div class="text-right">
                  <a class="btn btn-block btn-success" href="{{url('addpayments')}}" role="button">pay</a>
                  </div>
                </div>
                
              </div> 
            </div>
            @endforeach
           
            
            
           
        <!-- /.card-body -->
       
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
      
    </section>
    
@endsection