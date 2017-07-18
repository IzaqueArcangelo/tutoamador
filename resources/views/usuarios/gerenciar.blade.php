@extends('templates.layout.admin')
@section('header')
    {{--<div class="sub-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1> Man must explore, and this is exploration at its greatest</h1>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
@push('estilo')
@endpush
@section('conteudo')
   <div class="container-fluid container-customize">
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                   <ul class="nav nav-pills nav-stacked admin-menu">
                       <li class="active"><a href="#" data-target-id="establishment"><i class="fa fa-home fa-fw"></i> Establishment </a></li>
                       <li><a href="#" data-target-id="administration"><i class="fa fa-list-alt fa-fw"></i> Administration </a></li>
                       <li><a href="#" data-target-id="finance"><i class="fa fa-file-o fa-fw"></i> Finance </a></li>
                       <li><a href="#" data-target-id="supplydemand"><i class="fa fa-bar-chart-o fa-fw"></i> Supply & Demand</a></li>
                       <li><a href="#" data-target-id="vehicle"><i class="fa fa-table fa-fw"></i> Vehicle Management </a></li>
                       <li><a href="#" data-target-id="traffic"><i class="fa fa-tasks fa-fw"></i> Traffic Management </a></li>
                       <li><a href="#" data-target-id="training"><i class="fa fa-calendar fa-fw"></i> Training Management </a></li>
                       <li><a href="#" data-target-id="intelligence"><i class="fa fa-book fa-fw"></i> Intelligence </a></li>
                       <li><a href="#" data-target-id="djms"><i class="fa fa-pencil fa-fw"></i> DJMS </a></li>
                       <li><a href="#" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i> Settings </a></li>
                   </ul>
               </div>
               <div class="col-md-9 well admin-content" id="home">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="widgets">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="pages">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="charts">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="table">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="forms">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="calender">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="library">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="applications">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
               <div class="col-md-9 well admin-content" id="settings">
                   <p>
                       Hello! This is a demo snippet.<br>
                       It is for users, which use one-page layouts.
                   </p>
               </div>
           </div>
       </div>
   </div>

@endsection
