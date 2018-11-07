@extends('layouts.auth')

@section('content')

<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-xs">
      <h1 class="font-sans font-hairline mb-6 text-center">Register Here</h1>
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('register') }}">
          @csrf()

            @include('layouts.error')
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-hairline mb-2" for="name">
            Name
          </label>
          <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                 id="name" type="text" placeholder="Name">
        </div>
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-hairline mb-2" for="email">
            Email Address
          </label>
          <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                 id="email" type="email" placeholder="Email Address">
        </div>
        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-hairline mb-2" for="password">
            Password
          </label>
          <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" 
                type="password" placeholder="******************">
        </div>
        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-hairline mb-2" for="password_confirmation">
            Confirm Password
          </label>
          <input name="password_confirmation" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" 
                id="password_confirmation" 
                type="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
            Register
          </button>
        </div>
        <div class="flex items-center justify-between pt-2">
          <a class="bg-green hover:bg-green-dark text-white no-underline font-bold py-2 px-4 rounded" 
             href="{{ route('login') }}">
            Already have an account?
          </a>
        </div>
      </form>
      <p class="text-center text-grey text-xs">
        ©2018 tailwindadmin. All rights reserved.
      </p>
    </div>
  </div>
@endsection
