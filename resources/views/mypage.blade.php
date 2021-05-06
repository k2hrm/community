@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    ようこそ！{{$profile->name}}さん
                    <h2>My Music</h2>
                    <ul>
                        <li>Answer Song</li>
                        <li>ある腫れた日に</li>
                        <li>Silent Poet</li>
                    </ul>
                    <h2>My Music Video</h2>
                    <ul>
                        <li>Answer Song</li>
                        <li>ある腫れた日に</li>
                        <li>Silent Poet</li>
                    </ul>
                    <h2>Music Boostar Tools Menu</h2>
                    <ul>
                        <li>ミュージックビデオを作る</li>
                        <li>ミュージックビデオを公開する</li>
                        <li>音楽を聴いてもらう</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection