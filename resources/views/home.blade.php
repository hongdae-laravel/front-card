@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <p>{{ Auth::user()->name }}님 환영합니다.</p>
                    </div>
                    <div>
                        <h2>{{ Auth::user()->name }}의 저장소</h2>
                        <ul>
                            <li>카드 보유: {{ Auth::user()->cardCount() }} 장</li>
                        </ul>
                        <ul>
                            @foreach ( Auth::user()->getCards() as $card )
                                {{ $card }}
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
