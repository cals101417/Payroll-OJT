@extends('layouts.sidebar')
@section('sidebarnav')




<!-- content -->
<style>
  .message strong {
    color: #630000;
    font-weight: 600;
    margin: 10px;
    font-size: 20px;

  }
</style>

<div class="flex-1 text-2xl">
  @component('component.test')
  @slot('title')
  INTERACT TO EMPLOYEES
  @endslot
  @endcomponent

  <div class="flex flex-row">

    <div class="app  flex flex-col w-full p-16">
      <br>
      <header class="flex  flex-col text-center justify-end shadow">
        <p class="block w-full text-center bg-gray-700 appearance-none p-2
             text-1xl text-lg text-white">Administrator</p>
        <input type="text" name="username" id="username" class=" hidden w-full text-center bg-gray-700 appearance-none p-2
             text-1xl text-lg text-white" value="{{$data->firstname}}(Admin)">
      </header>
      <div style="height:650px" id="messages" class="block rounded-1xl  overflow-y-auto bg-gradient-to-b from-gray-100 to-gray-200 p-3">
      </div>
      <form id="message_form" class="flex ">
        <input type="text" name="message" id="message_input" class="flex-1 p-4 text-base" placeholder="Write a message.." />
        <button type="submit" id="message_send" class="appearance-none bg-white border text-blue-900 p-3 uppercase transition duration-500 ease-in-out  hover:bg-gray-700 hover:text-white transform hover:-translate-y-1 hover:scale-110">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-10" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
      </form>
    </div>
    <div class="hidden lg:block p-12 ">
      <img src="img/cs1.png">
      <form action="Chat" method="post">
        @csrf
        <h1 class="font-bold font-mono text-center">Hello! {{$data->firstname}}</h1>
      </form>
      <div class="py-12 p-8 text-lg text-center">
        <div class="bg-yellow-400 p-16 rounded-full">
          <h1 class="text-3xl mb-2"><span class="mr-1">₱</span>{{$rvn}}</h1>
          <p class="font-bold text-sm">Total Net Pay</p>

          <br>
          <hr class="border w-16 mx-auto border-red-700">
          <br>
          <h1 class="text-3xl mb-2 ml-2 ">{{$cnt}}</h1>
          <p class="font-bold text-sm">Total Employees</p>

        </div>
      </div>
    </div>
  </div>
</div>



</div>
</div>
<script src="./js/app.js"></script>
<script src="sidebar.js"></script>
@endsection