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
                    <h2>最近の楽曲投稿</h2>
                    <ul>
                    <li></li>
                    </ul>
                    <p><a href="{{  url('/mypage/') }}/{{ $user->id }}">マイページ</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection