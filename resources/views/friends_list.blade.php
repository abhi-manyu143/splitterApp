@extends('layouts.app')

@section('styles')
<style>
.btn.btn-success {
    /* margin-left: 28rem; */
  }
</style>



@section('content')


<div class="content">
    <div class="container-fluid">
        @foreach ($data as $d)
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{$d->name}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content-head">
    <div class="container-fluid">
        <div class="card">
            <h4>Add Member</h4>
            <form action="{{ url('savefriend')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" value="">
                </div>
                <div class="form-group">
                   <a href=""> <button class="btn btn-success">Add</button> </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection