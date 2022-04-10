@extends('app_main')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    .icon-with-gifs{
        margin: 5px 5px 5px 5px;
    }
    .icons-with-letters{
        background-image: url(https://avatars.mds.yandex.net/i?id=775d255ed5e1d035ac4ea24e033ae33b-5624761-images-thumbs&n=13&exp=1);
    }
    .menu{
        background-color: #2268B7;
    }
    .menu:hover{
        background-color: #2C5789;
    }
    .exit{
        background-color: #C92828;
    }
    .exit:hover{
        background-color:#8E1D1D;
    }
    .clocks{
        background-image: url(https://catherineasquithgallery.com/uploads/posts/2021-03/1614612669_109-p-fon-snega-dlya-fotoshopa-150.jpg);
        display: cover;
        color: white;
    }
</style>
@section('main_content')
                <div class='p-4 pt-10 w-full text-center bg-white rounded-md clocks'>
                        <div id="time-till-ny-counter" class='text-9xl '>00:00:00:00
                        </div>
                        <span class='text-2xl w-full'>времени до нового года</span>
                </div>
            

        <div class='mt-5 text-2xl text-center bg-white rounded-md'>Ваши письма: </div>
        @if(Auth::check())
        <div class='flex flex-row pt-5'>       
            @foreach($letters_all as $letter)
            <div class="snap-x">
                <div class="snap-start">
                    <div class="w-60 h-40 mr-5">                      
                            <div class="icons-with-letters w-full h-full text-white p-2 rounded-md">
                                <div class="bg-white w-full h-full text-black rounded-md text-xl" >
                                @if($letters_all->count() > 0)
                                    {{$letter->body}}
                                @else
                                    Писем нет! 
                                @endif
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
@else

<div class='flex flex-row pt-5'>       
            
            <div class="snap-x">
                <div class="snap-start">
                    <div class="w-60 h-40 mr-5">                      
                            <div class="icons-with-letters w-full h-full text-white p-2 rounded-md">
                                <div class="bg-white w-full h-full text-black rounded-md text-xl" >
                                
                                    Писем нет! Зарегестрируйтесь
                               
                                </div>
                            </div>
                    </div>
                </div>
            </div>
           
        </div>
@endif
    <div class='flex flex-col text-center mt-10 my-5'>
        <div class=''>
            
               
               <div class='rounded-md py-5 text-center bg-white text-2xl'
               >
               Говорят, что самые хорошие детишки могут получить подарок за хорошие письма:
                </div>
                <div class='mt-10 flex flex-row w-full justify-center flex-wrap'>
                @foreach($gifts_all as $gift)
                        <div class='w-1/5 px-10 snap-x'>
                            <div class='py-2 snap-start'><img src='{{ $gift->img_url }}' class='w-12/12 rounded-lg'/></div>
                        </div>
                @endforeach
                </div>
                
            

        </div>
        
        <!-- 
                    
                   
                    <div class='p-4 w-1/6'>
                        @if( Auth::check() )
                            <a href="{{ route('user.logout')}}">
                                <div class='flex flex-col items-center'>
                                
                                    <a class='text-sm' href="{{ route('user.logout')}}">
                                    
                                    <span class='text-sm ml-2'>{{Auth::user()->email}}</span>
                                    </a>
                                </div>
                            </a>
                        @else
                            <a href="{{route('login')}}">
                                <div class='ml-10'>
                                <img src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-exit-hotel-wanicon-lineal-color-wanicon.png"/>                        </div>
                            </a>
                        @endif
                    </div> -->
        <!-- <div class='py-4'>
            <h3>Пользователь/Дед Мороз</h3>
            <ul class='pl-4'>
                <li>Посмотреть список написанных писем</li>
                <li>Посмотреть выбранное письмо с содержанием</li>
                <li>Написать ответ на выбранное письмо</li>
                <li>Дед мороз может подарить подарок</li>
                <li>? Рейтинг писем по категориям: самое длинное</li>
            </ul>
        </div> -->

@endsection