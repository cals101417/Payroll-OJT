@extends('layouts.sidebar')
@section('sidebarnav')


<!-- content -->

<div class="flex-1  text-2xl">

  @component('component.test')
  @slot('title')
  EMPLOYEE LIST
  @endslot
  @endcomponent




  <div class="grid md:grid-flow-col py-16 gap-4 ">
    <div class="grid grid-cols-1 gap-4">
      <div>
        <div class="py-12"><img class="w-96 h-56 mx-auto" src="img/emp.png" /></div>
        <div>
          <p class=" w-full  text-2xl text-center font-bold">Macademia Payroll System </p>
        </div>
        <div>
          <p class="w-full text-sm  text-center font-bold">Don’t Forget to Smile, While Working!</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 mx-auto">
      <div>

        <form class=" bg-gray-600  w-96 text-white max-w-sm  p-8 " action="add" method="POST">

          @csrf
          <p class="text-xl font-bold text-white mb-4 text-center">NEW EMPLOYEE</p>

          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                First Name
              </label>
              <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="fname" type="text" value="{{old('fname')}}">

            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                Last Name
              </label>
              <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="lname" type="text" value="{{old('fname')}}">
            </div>
          </div>


          <div class="flex flex-wrap -mx-3 mb-2 mt-4">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                Address
              </label>
              <input class="appearance-none block w-full bg-white text-black border 
                   rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="address" type="text" value="{{old('address')}}">

            </div>
          </div>

          <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                Age
              </label>
              <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="age" type="number" min="1" max="100" value="{{old('age')}}">

            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                Sex
              </label>

              <select class="block appearance-none w-full bg-white border border-gray-20e text-black py-2 text-base px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sex">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>



          </div>
          <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold mt-6 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
          </button>
        </form>

      </div>
    </div>
  </div>


  <section class="container mx-auto p-6 font-sans">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-y-auto h-96">
        <table class="w-full text-base">
          <thead>
            <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
              <th class="px-4 py-3">ID</th>
              <th class="px-4 py-3">LAST NAME</th>
              <th class="px-4 py-3">FIRST NAME</th>
              <th class="px-4 py-3">ADDRESS</th>
              <th class="px-4 py-3">AGE</th>
              <th class="px-4 py-3">SEX</th>
              <th class="px-4 py-3">ACTION</th>

            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach($list as $item)
            <tr class="text-gray-700">

              <td class="px-4 py-3 border">
                <h1 class="">#{{$item->id}}</h1>
              </td>
              <td class="px-4 py-3 border">{{$item->lname}}</td>
              <td class="px-4 py-3 border">{{$item->fname}}</td>
              <td class="px-4 py-3 border">{{$item->address}}</td>
              <td class="px-4 py-3 border">
                <h1>{{$item->age}}</h1>
              </td>
              <td class="px-4 py-3 border">{{$item->sex}}</td>

              <td class="px-4 py-3 border">
                <a href="edit/{{$item->id}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 float-left" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                  </svg></a>


                <!--href="delete/{{ $item->id }}"-->

                <a href="delete/{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-400 float-left" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                  </svg></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
</div>
</div>
</section>

</div>

</div>

<script src="sidebar.js"></script>

@endsection