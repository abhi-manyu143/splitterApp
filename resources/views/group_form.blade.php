@extends('layouts.app')

@section('styles')
<style>
.card{
    padding: 50px;
}
</style>


@section('content')

<div class="content-head">
    <div class="container-fluid">
        <div class="card">
            <h4>Start a new group</h4>
            <form action="{{ route('savegroup')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Name">Group Name</label>
                    <input type="text" class="form-control" name="group_name" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection