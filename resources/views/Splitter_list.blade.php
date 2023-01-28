@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <h4 class="title">Expence</h4>
        @foreach ($data as $d)
        <div class="row">
            <div class="col-lg-12">
                <a href=""><div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{$d->name}} : {{$exp}}
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

@endsection