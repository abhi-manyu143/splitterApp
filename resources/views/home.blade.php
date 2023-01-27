@extends('layouts.app')

@section('styles')
<style>
.btn.btn-success {
    margin-left: 28rem;
  }
</style>

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Groups') }}</h1>
                </div>
                <div class="row mb-2">
                    <a href="{{url('addgroup')}}">
                    <button class="btn btn-success">Add group</button>
                    </a>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @foreach ($data as $d)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <a href="{{url('friends/'.$d->id)}}">
                        <div class="card-body">
                            <p class="card-text">
                                {{$d->group_name}}
                            </p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection