@extends('layouts.app')

@section('titulo')
    Regístrate en iGram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 p-5">
            <img src="{{asset('img/usuario.png')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div>
                    <label for="name" id="name" class="md-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg 
                    @error('name') border-red-500 @enderror" value="{{old('name')}}"> 
                    @error('name')
                        <p class="bg-red-400 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="username" id="username" class="md-2 block uppercase text-gray-500 font-bold">Usuario</label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg 
                    @error('username') border-red-500 @enderror" value="{{old('username')}}">
                    @error('username')
                        <p class="bg-red-400 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" id="email" class="md-2 block uppercase text-gray-500 font-bold">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Tu email" class="border p-3 w-full rounded-lg 
                    @error('email') border-red-500 @enderror" value="{{old('email')}}">
                    @error('email')
                        <p class="bg-red-400 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" id="password" class="md-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg 
                    @error('password') border-red-500 @enderror" value="{{old('password')}}">
                    @error('password')
                        <p class="bg-red-400 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" id="password_confirmation" class="md-2 block uppercase text-gray-500 font-bold">Confirmación de Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite Tu Password" class="border p-3 w-full rounded-lg 
                    @error('password_confirmation') border-red-500 @enderror" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                        <p class="bg-red-400 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <br>
                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>

        </div>
    </div>
@endsection

