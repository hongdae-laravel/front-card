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
                        <p>{{ $user->name }}님 환영합니다.</p>
                    </div>
                    <div>
                        <h2>{{ $user->name }}의 저장소</h2>
                        @if (count($userCards) > 0)
                            <ul>
                                <li>카드 보유: {{ count($userCards) }} 장</li>
                            </ul>
                        @else
                            <ul>
                                <li>보유한 카드가 없습니다.</li>
                            </ul>
                        @endif
                        <ul>
                            @foreach ( $userCards as $card )
                                <li>{{ $card->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2>전체 카드 목록</h2>
                        <ul>
                            <li>총: {{ count($allCards) }} 장</li>
                        </ul>
                        <form action="" method="POST">
                            <ul>
                                @foreach ( $allCards as $card )
                                    <li><input type="checkbox" value="{{ $card->name }}"/> {{ $card->name }}</li>
                                @endforeach
                            </ul>
                            <button>카드 선택</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
