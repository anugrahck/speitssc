@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Starter Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $members }}</h3>
              
              <p>Members</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="/dashboard/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $shortlinks }}</h3>
              
              <p>Short Links</p>
            </div>
            <div class="icon">
              <i class="fas fa-link"></i>
            </div>
            <a href="/dashboard/shortlink" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection