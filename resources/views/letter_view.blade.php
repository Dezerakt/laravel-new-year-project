@extends('app_main')

@section('main_content')
   @if($errors->any())
    <div>
        @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
    </div>
   @endif

   <div class="flex py-2 text-sm text-gray-400">
       <a href="{{ route('home')}}">Главная</a>
       <span class='px-2'>></span>
       <span href="{[route('my.letter.list')}}">Список моих писем</span>
        <span class='px-2'>></span>
        <span>Просмотр письма</span>
    </div>

    <div>
        @foreach($letter->gifts as $gift)
            {{ $gift->title }}
        @endforeach
    </div>

@endsection