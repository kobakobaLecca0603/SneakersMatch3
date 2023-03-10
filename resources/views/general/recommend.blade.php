<!DOCTYPE html>

@extends('layouts.app')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/windsmatch.css') }}" rel="stylesheet">
    <title>recommend.blade.php</title>
</head>
<body>      
            <!--$profiles_uniqueに値が入っていない場合-->
            @if($profiles_unique == null)
                <h3>あなたにオススメできる方が見つかりませんでした</h3>
                <p><a href='/index'>プロフィール一覧に戻る</a></p>
                
            <!--$profiles_uniqueに値が入っていた場合-->
            @else
                <h1 class='center'>あなたにオススメな方</h1>
                    <div class='row align-items-start'>
                        
                        <!--プロフィール情報をforeachで出力-->
                        @foreach($profiles_unique as $profile)
                        <div class='col-4 profile-index'>
                            <div class="profile">
                                <h2><a href='/profile/{{$profile->id}}/show'>{{$profile->nickname}}</a></h2>
                            </div>
                            <div>スニーカー: 
                                @foreach($profile->instruments as $instrument)
                                <span>{{$instrument->name}}</span>
                                @endforeach
                            </div>
                            <div>足のサイズ: 
                                @foreach($profile->genres as $genre)
                                <span>{{$genre->name}}</span>
                                @endforeach
                            </div>
                            
                            <p>スニーカー歴:{{$profile->musical_experience}}</p>
                            <img src="{{$profile->image_url}}" alt="" class='image_search' />
                        </div>
                    @endforeach
                </div>
                <p><a href='/index'>他の人のプロフィールを見る</a></p>    
            @endif
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection