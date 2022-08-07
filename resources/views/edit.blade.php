
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <title>Payroll System</title>
</head>
<body>
    <div class="relative min-h-screen bg-gradient-to-r from-gray-200 to-gray-300 md:flex">

        <!-- responsive -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
          <a href="index.html" class="block p-4 text-white font-bold">Payroll</a>
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
           
          </button>
        </div>
  
      
        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            
            <p class="w-full h-12 text-2xl px-36 font-bold">UPDATE INFORMATION</p>
            <div class="bg-gray-800 mx-36" style="width: full; height: 5px;">

        </div>

<div class="grid md:grid-flow-col px-36 ">
        <div class="grid grid-cols-1 gap-4  py-12">
        <div class=" bg-gray-700 text-white px-16 py-12">
            
        <form action="{{route('update')}}" method="post">
            @csrf
            <h1 class="pb-12">EDIT | EMPLOYEE INFORMATION <hr style="height:2px; background-color:black;" class="mt-6"></h1>
            
            <input type="hidden" name="id" value="{{$data->id}}">
         <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-sm font-bold mb-2 mr-8">
                    First Name
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                   type="text" name="fname" value="{{$data->fname}}">
                </div>
              </div>
          
          <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-sm font-bold mb-2 mr-8">
                    Last Name
                  </label>
                  <input class="appearance-none block text-base w-full bg-white text-black border 
                  border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                   type="text" name="lname" value="{{$data->lname}}">
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-sm font-bold mb-2">
                    Address
                  </label>
                  <input class="appearance-none block w-full bg-white text-black border 
                  border-gray-300 rounded text-base py-3 px-4 mb-3 leading-tight focus:outline-none
                   focus:bg-white" name="address" type="text" placeholder="Davao City..." value="{{$data->address}}">
               
                </div>
              </div>
    
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-sm font-bold mb-2">
                   Age
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-300 
                  rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                   type="number" min="1" max="100" name="age" value="{{$data->age}}">
                  
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide  text-sm font-bold mb-2">
                    Sex
                  </label>
                  <input class="appearance-none block w-full text-base bg-white text-black border border-gray-300 rounded py-2 px-4 
                  leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sex" type="text" min="100" value="{{$data->sex}}">
               
                </div>
             
                
                <div class="flex mx-auto justify-between w-full md:w-1/3 gap-6 px-3 mb-6 md:mb-0 mt-24">
                <button href="update" class="bg-blue-500 hover:bg-gray-600 block  text-white text-base font-bold py-4 w-full rounded focus:outline-none focus:shadow-outline">
                UPDATE RECORDS</button>
              <button href="employee" class="bg-red-500  hover:bg-gray-600  text-white text-base font-bold py-4 w-full rounded focus:outline-none focus:shadow-outline">
                CANCEL</button>
              
                </div>
              </div>
           
             
          </div>
          </div>
        </form>

</div>
</div>
</div>


</div>
</body>
</html>