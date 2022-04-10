@extends('app_main')


@section('main_content')
   <div class="content h-full">
   @if($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif
    <div class='flex py-2 text-sm text-gray-400'>
            <a href="{{ route('home') }}">Главная</a>
            <span class='px-2'>></span>
            <a href="{{ route('my.letters.list') }}">Список моих писем</a>
            <span class='px-2'>></span>
            <span>Написать письмо</span>
    </div>
    <div class='text-3xl py-4 text-white'>Написать письмо</div>
    <form action="" class="h-max-screen" method="post">
        @csrf 
        
        <div class="mb-5">
            <textarea name="body" id="" class="w-full" rows="10" placeholder='Ваши слова для дедушки Мороза'>{{ old('body') }}</textarea>
        </div>
        <div class="mb-5">
            <input class="w-60 h-30 bg-blue-300 rounded " type="submit" name='send_letter' value='Отправить письмо'>

        </div>
    </form>
   </div>
@endsection