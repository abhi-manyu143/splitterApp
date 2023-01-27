{{-- @extends('layouts.app')

@section('styles')
<style>

</style>


@section('content')

<div class="content-head">
    <div class="container-fluid">
        <div class="card">
            <h4>Add Member</h4>
            <form action="{{ route('savefriend')}}" method="post">
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
                    <button class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection --}}