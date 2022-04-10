<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://breaktime.kz/_css/tailwind.css" rel="stylesheet"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
        .snow-hg{
            background-repeat: no-repeat;
            background-position: 10% center;
        }
        header{
            color: white;
            background-color: #2D4263;
            background-size: 140px;
        }
        body{
            background-image: url(https://catherineasquithgallery.com/uploads/posts/2021-02/1612908929_110-p-fon-novogodnii-krasnii-snezhinki-172.jpg);
            font-family: 'Oswald', sans-serif;
            background-size: cover;
        }

    </style>

</head>
<body>
<header class='flex w-full justify-right grid gap-4 grid-cols-2'>
        
      
        <div class='flex w-full justify-right place-content-right'>
            <div class='p-4 w-1/5 navigation'>
                <a href="{{ route('home') }}">
                <img src="https://img.icons8.com/external-justicon-lineal-color-justicon/64/000000/external-santa-claus-christmas-day-justicon-lineal-color-justicon.png"/>                </a>
                 </a>
            </div>
            <div class='p-4 w-1/5 text-center flex place-content-center'>
                <a href="{{ route('letter.compose') }}">
                <img class="pl-4" src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/50/000000/external-letter-christmas-vitaliy-gorbachev-flat-vitaly-gorbachev.png"/>
                <div class='text-sm'>написать письмо</div>
                </a>
            </div>

            <div class='p-4 w-1/5 text-center flex place-content-center'>
                <a href="{{ route('my.letters.list') }}">
                <img  src="https://img.icons8.com/color/50/000000/mailbox-opened-flag-down.png"/>              
                 <div class='text-sm'>ваши письма</div>
                </a>
            </div>
            <div class='p-4 w-1/5 text-center flex place-content-center'>
                <a href="{{ route('letters.list') }}">
                <img class='pl-2' src="https://img.icons8.com/color/48/000000/gift--v1.png"/>   
                <div class='text-sm'>общие письма</div>
                 </a>
            </div>
            <div class='p-4 w-1/5 text-center flex place-content-center'>
                @if(Auth::check())
                    <a href="{{ route('user.logout') }}">
                    <img class='' src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/50/000000/external-exit-hotel-wanicon-lineal-color-wanicon.png"/>   
                    <div class='text-sm'>Выход</div>
                    </a>
                @else
                    <a href="{{ route('login') }}">
                    <img class='' src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/50/000000/external-exit-hotel-wanicon-lineal-color-wanicon.png"/>   
                    <div class='text-sm'>Вход</div>
                    </a>
                @endif
            </div>
      
        </div>
    </header>

<div class='flex w-full justify-center min-h-screen'>
    <div class='flex w-9/12 justify-center'>
        <div class='w-full h-min-screen px-10 pt-5' style='background-color: rgb(42, 8, 45);'>
            @yield('main_content')
        </div>
    </div>
</div>
<script>
        function countDown(){
            var currentDate = new Date();
            var eventDate = new Date(2022, 0, 1); // months start from 0
            var milliseconds = eventDate.getTime() - currentDate.getTime();
            var seconds = parseInt(milliseconds / 1000);
            var minutes = parseInt(seconds / 60);
            var hours = parseInt(minutes / 60);
            var days = parseInt(hours / 24);
            var months = parseInt(days / 30);
            seconds -= minutes * 60;
            minutes -= hours * 60;
            hours -= days * 24;
            days -= months * 30;

            var countDownWrapper = document.getElementById('time-till-ny-counter');
            countDownWrapper.innerHTML = days+':'+zeroPad(hours,2)+':'+zeroPad(minutes,2)+':'+zeroPad(seconds,2);
            
        }

        const zeroPad = (num, places) => String(num).padStart(places, '0')

        setInterval(countDown, 1000)

    </script>



</body>
</html>
