@extends('app_main')

<!--//stack -->

@section('main_content')
    
    <div>
        <div class='flex py-2 text-sm text-gray-400'>
            <a href="{{ route('home') }}">Главная</a>
            <span class='px-2'>></span>
            <a href="{{ route('my.letters.list') }}">Список моих писем</a>
            <span class='px-2'>></span>
            <span>Редактировать письмо</span>
        </div>

        @if( $errors->any() )
            <div>
                @foreach( $errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        
        <div class='text-3xl py-4 text-white'>Редактировать письмо</div>

        <form method=post class='w-full' action="{{ route( 'letter.update', ['id' => $letter->id ] )}}">
            @csrf
            <div>
                <textarea name='body' class='w-full h-60 border-blue-400 py-2 px-4' placeholder='Что же вы хотите сказать Дедушке Морозу?'>{{ $letter->body }}</textarea>
            </div>
            <div>
                <input class='mt-5 bg-blue-400 text-black py-2 px-6 rounded-md shadow-md snow-bg' type='submit' name='save_letter' value='Отредактировать письмо'/>
            </div>
        </form>
    </div>
@endsection