
        @extends('layouts.sidebar')
        @section('sidebarnav')
      
        <!-- content -->
        <div class="flex-1  text-2xl">
        @component('component.test')
          @slot('title')
          EMPLOYEE ATTENDANCE
          @endslot
          @endcomponent

      <div class="p-10">
        <div class="grid md:grid-flow-col gap-4 ">
        <div class="grid grid-cols-1 gap-4">
          <div>
            <div class="py-6"><img class="w-96 h-full mx-auto" src="img/pic1.png"/></div>
          </div>
        </div>
        <div class="grid grid-cols-1 mx-auto">
          <div>
         
  <form class="w-full bg-gray-600 text-white max-w-lg  p-8 mt-6" action="addattendance" method="POST">
              @csrf
              <p class="text-xl font-bold text-white mb-4 text-center">ATTENDANCE & CALCULATION</p>

               <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Employee ID
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="empAdd_id" type="text" value="{{old('empAdd_id')}}">
                    <span class="text-red-300 text-sm">@error('empAdd_id'){{$message}}@enderror</span>
                </div>
                </div>
              
              
                   <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                            date from
                    </label>
                    <input class=" text-base appearance-none block w-full bg-white text-black border border-gray-200
                    rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="datefrom"
                    name="datefrom" type="date">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        date to
                    </label>
                    <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                      rounded py-2 px-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dateto"
                      name="dateto" type="date">
                   </div>
                       <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Workdays
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="workdays"
                    name="workdays" type="number">
                  
                </div>
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Absences
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="absent"
                    name="absent" type="number">
                </div>
               
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   Rate
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="rate"
                    name="rate" type="number"  min="100" value="{{old('rate')}}">
                </div>
                <div class="w-full md:w-1/4 px-3 mt-4 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                   InitialAmount
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-200
                   rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="initialamount"
                    name="initialamount" type="number">
                  
                </div>
                
              </div>
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3 mb-6 md:mb-0">
                  
           
                    <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold mt-6 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                      Submit
                    </button>
                    @if(Session::has('success'))
          <div class="text-white  text-center mt-6 text-sm border-0 rounded relative mb-4 ">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="text-white text-sm text-center mt-6 border-0 rounded relative mb-4">{{Session::get('fail')}}</div>
          @endif
            

                </div>
              </div>
  </form>
          </div>
        </div>
        </div>
     
<div class="mt-16">
         <div class="flex px-6 gap-6 justify-between">
         <div class="flex-1">
            
         </div>
         <form action="{{route('attendance')}}" method="post">
           @csrf
         <div>
         <input type="search" name="lname" class=" pl-3 pr-4 py-1 text-base border-2 border-black-900 focus:outline-none text-black "
              placeholder="Enter last name">
         
         <button class="bg-blue-700 text-base px-6 py-1 text-white " type="submit">Search</button>
         </div>
         </form>
  </div>

        <section class="container mx-auto pt-6  font-sans">
                  <div class="w-full overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-y-auto h-96">
                      <table class="w-full text-base">
                        <thead>
                          <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                          <th class="px-4 py-3">ATTENDANCE ID</th>
                            <th class="px-4 py-3">LAST NAME</th>
                            <th class="px-4 py-3">FIRST NAME</th>
                            <th class="px-4 py-3">RATE</th>
                            <th class="px-4 py-3">Workdays</th>
                            <th class="px-4 py-3">Gross</th> 
                            <th class="px-4 py-3">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                     
                        @foreach($data as $item)
                          <tr class="text-gray-700 border-black">
                            <td class="px-4 py-3 border">#{{$item->id}}</td>
                            <td class="px-4 py-3 border">{{$item->lname}}</td>
                            <td class="px-4 py-3 border">{{$item->fname}}</td>
                            <td class="px-4 py-3 border">₱ {{$item->rate}}</td>
                            <td class="px-4 py-3 border">{{$item->workdays}}</td>
                            <td class="px-4 py-3 border"> ₱ {{$item->initialamount}}</td>
                  </td>
                    <td class="px-4 py-3 border"> 
                      <a href="deleteattendance/{{ $item->empAdd_id }}" id="buttonmodal"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-400 float-left" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg></a>
                  </td>
                            
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                    </div>
                  </div>
                </section>

        </div>
        </div>  
      </div>
      </div>
      @
        <script src="sidebar.js"></script>
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/workdays.js"></script>
        <script src="js/initialamount.js"></script>
@endsection

