@extends('layouts.sidebar')
        @section('sidebarnav')
      
        <!-- content -->
        
        <div class="flex-1 text-2xl">
        @component('component.test')
          @slot('title')
          EMPLOYEE SALARY
          @endslot
          @endcomponent
      
        <div class="grid sm:grid-flow-col pt-10 mx-auto gap-4 ">
          <div class="grid px-32  grid-cols-1 gap-4 ">        
          <div class="mt-28 ">
            <div class="bg-gray-100 py-6 border text-black px-8 shadow">
            <h1 class="text-xl"> Total Number of Beneficiaries </h1>
          </div>
          <div class="bg-gray-600 py-8 border text-white px-8 shadow">
          <h1><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-5 float-left mr-3" viewBox="0 0 20 20" fill="currentColor">
                 <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                 </svg><span class="text-2xl">{{$cust}}</span></h1>
          </div>
        
          </div>
          </div>
          <form class="w-full mx-auto bg-gray-600 text-white max-w-sm  p-8 mt-6" action="addsalary" method="POST">
            @csrf
         <div class="grid grid-cols-1">
          <div>
              <p class="text-xl font-bold text-white mb-4 text-center">ADD DEDUCTION</p>
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Attendance ID
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                   rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                   name="empattendance_id" type="text" value="{{old('empattendance_id')}}">
                   <span class="text-red-300 text-sm">@error('empattendance_id'){{$message}}@enderror</span>
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2" >
                    Type of Deduction
                  </label>
                      <select id="grid-deduction"  class="appearance-none block w-full bg-white text-black border 
                         rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none
                         focus:bg-white" name="typeDeduction">
                        <option>PAG IBIG Contribution</option>
                        <option>Philhealth Contribution</option>
                        <option>SSS Contribution</option>
                       </select>
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Amount of Deduction
                  </label>
                  <input class="appearance-none block w-full bg-white text-black border 
                   rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none 
                  focus:bg-white" name="deductionAmount" type="number">
                  
                </div>
              </div>
              
              <button class="bg-blue-500 hover:bg-blue-700 w-full text-white text-base font-bold  py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
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
        

         
      <section class="container py-8 mx-auto">
        <div class="flex px-2 py-6 mt-16 gap-6 justify-between ">
                  <div class="flex-1">
                      
                  </div>
                  <div>
                  <form action="{{route('salary')}}" method="post">
                    @csrf
                       <input type="search" name="lname" class=" pl-3 pr-4 py-1 text-base border-2 border-black-900 focus:outline-none text-black "
                  placeholder="Enter last name">
                  <button class="bg-blue-700 text-base px-6 py-1 text-white" type="submit">Search</button>
                  </div>
                  </form>
</div>
          
        
          <div class="w-full overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-y-auto h-96">
              <table class="w-full text-base">
                <thead>
                  <tr class="font-bold text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">LAST NAME</th>
                    <th class="px-4 py-3">FIRST NAME</th>
                    <th class="px-4 py-3">TYPE OF DEDUCTION</th>
                    <th class="px-4 py-3">DEDUCTIONS</th>
                    <th class="px-4 py-3">TOTAL AMOUNT</th>
                    <th class="px-4 py-3">ACTION</th>
                   
                  </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($data as $item)
                   <tr class="text-gray-700">
                    <td class="px-4 py-3 border">#{{$item->id}}</td>
                    <td class="px-4 py-3 border">{{$item->lname}}</td>
                    <td class="px-4 py-3 border">{{$item->fname}}</td>
                    <td class="px-4 py-3 border">
                      <h1>{{$item->typeDeduction}}</h1>
                    </td>
                    <td class="px-4 py-3 border">
                      <h1>₱ {{$item->deductionAmount}}</h1>
                    </td>
                    <td class="px-4 py-3 border">₱ {{$item->deducted_salary}}</td>
                    <td class="px-4 py-3 border">
                      <a href="deletesalary/{{ $item->id }}" id="buttonmodal"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-red-400 float-left" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg></a>
                  </td>
                    
                  </tr>
                </tbody>
                @endforeach
               
              </table>

            </div>
          </div>
        </section>
        </div>
        </div>  </div>
        <script src="sidebar.js"></script>
@endsection