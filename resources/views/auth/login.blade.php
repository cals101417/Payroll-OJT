
<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="img/logo.jpeg">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Payroll System</title>
</head>
<body class="bg-gray-700 mx-auto">

<div class="py-16">
  <div class="grid text-center sm:grid-flow-col gap-6  ">
  
<div class="grid grid-cols-1 mx-auto">
    <div class="mx-auto">
    <p class="py-6 text-white w-52 text-2xl">Good Day, <span class="text-yellow-600">Admin!</span></p>
  </div>
      <div>
        <div class="bg-gray-600 shadow rounded-3xl" style="width: 500px; height: 650px;">
          <form class="w-full mx-auto bg-gray-600 text-white max-w-sm  p-6 mt-4" action="{{route('login-user')}}" method="POST">
          @csrf
            <img class="mx-auto pb-12" src="img/login.png">
            <div class="flex flex-wrap -mx-3 mb-4">
              <div class="w-full px-3">
              <span class="text-red-300 text-sm">@error('username'){{$message}}@enderror</span>
                <input class="appearance-none rounded-3xl block text-base w-full bg-white text-black border 
                  py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" name="username" type="text" value="{{old('username')}}">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2" >
                  Username
                </label>
              </div>
            </div>
            
            <div class="flex flex-wrap -mx-3 mb-4">
              <div class="w-full px-3">
              <span class="text-red-300 text-sm">@error('password'){{$message}}@enderror</span>
                <input class="appearance-none rounded-3xl block w-full bg-white text-black border 
                 text-base py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" name="password" type="password">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2" >
                  Password
                </label>
            </div>
          </div>
        
          <button class="bg-white hover:text-white hover:bg-blue-700 w-36 text-black text-base font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Login
          </button>
            <div class="pt-6">
            <div class="bg-gray-300 w-full" style="height: 3px;"></div>
            <a href="registration"><p class="pt-3">Create an Admin Account, <span class="text-yellow-500 font-bold">SIGN UP</span></a></p>
            <a href="/" class="underline text-blue-300 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent;">Return to home</a>
          </div>
          </div>
          </form>
          <div class="pt-6">
          @if(Session::has('success'))
          <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">{{Session::get('fail')}}</div>
          @endif
</div>
</div>
      </div>
    </div>
    
    </div>
  </div>
</body>
</html>