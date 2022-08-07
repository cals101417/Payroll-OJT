@extends('layouts.sidebar')
        @section('sidebarnav')
      



        <!-- content -->
        
        <div class="flex-1 text-2xl">
        @component('component.test')
          @slot('title')
          PAYROLL RECORDS
          @endslot
          @endcomponent
          

     
          <div class="mt-16">
         <div class="flex px-16 gap-6 justify-between">
         <div class="flex-1">
             <h1 class="w-full font-bold ">BENEFICIARIES</h1>
         </div>
         <form action="{{route('payroll')}}" method="post">
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
                    <div class="w-full overflow-y-auto h-screen">
                      <table class="w-full text-base">
                        <thead>
                          <tr class=" font-semibold tracking-wide text-left text-white bg-gray-700 uppercase border-b border-gray-600">
                          <th class="px-4 py-3">EMPLOYEE ID</th>
                            <th class="px-4 py-3">LAST NAME</th>
                            <th class="px-4 py-3">FIRST NAME</th>
                            <th class="px-4 py-3">RATE</th>
                            <th class="px-4 py-3">GROSS</th>
                            <th class="px-4 py-3">Deductions</th>
                            <th class="px-4 py-3">Net Pay</th> 
         
                            
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                     
                        @foreach($data as $item)
                          <tr class="text-gray-700 border-black">
                            <td class="px-4 py-3 border">#{{$item->id}}</td>
                            <td class="px-4 py-3 border">{{$item->lname}}</td>
                            <td class="px-4 py-3 border">{{$item->fname}}</td>
                            <td class="px-4 py-3 border">{{$item->rate}}</td>
                            <td class="px-4 py-3 border">₱ {{$item->initialamount}}</td>
                            <td class="px-4 py-3 border">₱ {{$item->deductionAmount}}</td>
                            <td class="px-4 py-3 border"> ₱ {{$item->deducted_salary}}</td>
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

    <script src="sidebar.js"></script>
@endsection