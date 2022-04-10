@extends('app_main')

@section('main_content')
<div class='flex flex-row justify-center'>
        <div class='flex flex-col w-1/2'>

            <h1 class='text-3xl py-4 text-white'>Авторизация</h1>
            
            @if( $errors->any() )
                <div>
                    @foreach( $errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            
            <form method=post class='flex flex-col w-1/2' action="{{ route('user.auth') }}">
                @csrf
                <div class='py-2 flex flex-col w-full text-white'>
                    <label>Email</label>
                    <input required name='email' type='email' placeholder='email' class='text-black py-2 px-6 border-2 border-blue-400'/>
                </div>
                <div class='py-2 flex flex-col w-full text-white'>
                    <label>Password</label>
                    <input required name='password' placeholder='password' type='password' class='text-black py-2 px-6 border-2 border-blue-400' />
                </div>
                <div class='py-2 flex flex-col w-full'>
                    <input type='submit' name='user_auth' class='py-2 px-6 border-2 bg-blue-400 border-blue-800 text-white'/>
                </div>
            </form>
        </div>
        <div class='flex flex-col w-1/2'>

            <h1 class='text-3xl py-4 text-white'>Регистрация</h1>
            
            @if( $errors->any() )
                <div>
                    @foreach( $errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            
            <form method=post class='w-1/2 flex flex-col' action="{{ route('user.reg') }}">
                @csrf
                <div class='py-2 flex flex-col w-full text-white'>
                    <label>Name</label>
                    <input required name='name' type='text' placeholder='name' class='text-black py-2 px-6 border-2 border-blue-400'/>
                </div>
                <div class='py-2 flex flex-col w-full text-white'>
                    <label>Email</label>
                    <input required name='email' type='email' placeholder='email' class='text-black py-2 px-6 border-2 border-blue-400'/>
                </div>
                <div class='py-2 flex flex-col w-full text-white'>
                    <label>Password</label>
                    <input required name='password' placeholder='password' type='password' class='text-black py-2 px-6 border-2 border-blue-400' />
                </div>
                <div class='py-2 flex flex-col w-full text-white'>
                    <label>Password x2</label>
                    <input required name='password_2' placeholder='password' type='password' class='text-black py-2 px-6 border-2 border-blue-400' />
                </div>
                <div class='py-2 flex flex-col w-full'>
                    <input type='submit' name='user_register' class='py-2 px-6 border-2 bg-blue-400 border-blue-800 text-white'/>
                </div>
            </form>
        </div>
    </div>
@endsection