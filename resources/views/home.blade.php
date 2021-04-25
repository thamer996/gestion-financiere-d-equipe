@extends('admin')
@section('content')


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$loggeduserinfo['name']}}</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div>
    </div>
    

   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$loggeduserinfo['budget']}}</h3>

                <p>Budget</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5300$<sup style="font-size: 20px"></sup></h3>

                <p> total Earns</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('earns')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65000$</h3>

                <p>total payments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('payments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
        
        <div class="row">
          
          <section class="col-lg-7 connectedSortable">
           
          </section>
         
          <section class="col-lg-5 connectedSortable">

            
          </section>
          
        </div>
        
      </div>
    </section>
</div>
    @endsection