@extends('layouts.app')

@section('styles')
<style>
    .title{
    padding: 20px;
}
</style>
@endsection



@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <h4 class="title">Expence</h4>
        @foreach ($data as $d)
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('splitterlist/'.$d->group_id.'/'.$d->title)}}"><div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{$d->title}} : {{$d->amount}}
                        </p>
                    </div>
                </div></a>
            </div>
        </div>
        @endforeach
    </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div class="content-head">
    <div class="container-fluid">
        <div class="card">
            <h4 class="title">Add Expence</h4>
            <form action="{{ url('saveexpence')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" name="amount" value="">
                </div>
                <div class="form-group">
                   <a href=""> <button class="btn btn-success">Add</button> </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection