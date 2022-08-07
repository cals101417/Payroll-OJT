<!doctype html>
<html>

<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="img/logo.jpeg">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet/less" type="text/css" href="css/style.less">
  <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
  <title>Payroll System</title>
</head>
<style>
  .message strong {
    color: #8C38FF;
    font-weight: 600;
    margin: 10px;

  }
</style>

<body class="bg-gradient-to-r from-gray-200 to-gray-100">

  <div class="flex justify-between mt-20 text-black">
    <div class="w-5/6 hidden lg:block">
      <img src="img/bglnd.png" class="w-full ">
    </div>

    <div class="w-1/2">
      <h2 class=" text-6xl
        py-6 font-bold  mt-20 text-gray-700">Payroll<br> Management<br> <span class="text-blue-700">System</span></h2>
      <p class=" text-2xl py-6 font-secondary text-black">Providing a safe payroll administration service <br>and ensuring data security</p>
      <p class="text-2xl font-secondary text-gray-100"></p>
      <div class="flex n py-8 mb-8 gap-6">
        <a href="login"><button class="btnlog float-left" type="submit">
            Login
          </button></a>
        <a href="registration"><button class="btnreg float-left" type="submit">
            Signup
          </button></a>
      </div>
      <div class="ml-3">
        <p class=" text-1xl py-2 font-secondary font-bold text-black">Got some Questions?</p>
        <a><button id="buttonmodal" class="btnchat float-left" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 float-left" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
              <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
            </svg>Message Us
          </button></a>

      </div>

      <div id="modal" class="fixed rounded-lg top-0 left-0 w-full h-full px-6 lg:flex items-end justify-end bg-opacity-50 transform scale-0 transition-transform duration-300">
        <!-- Modal content -->
        <div class="bg-gradient-to-r from-yellow-500 to-gray-700 w-1/4 rounded-tl-2xl rounded-tr-2xl">
          <button id="closebutton" type="button" class="focus:outline-none float-right text-gray-200 p-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </button>
          <div class="lg:flex lg:flex-row  p-3">
            <img src="img/admin1.png" class="w-16 hidden lg:block">
            <h1 style="text-shadow: 0px 0px 1px #000000;" class="mt-3 ml-6"><span class=" text-1xl text-white font-bold">How can we help?</span>
              <br><svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 mr-2 float-left text-green-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg><span class="text-sm text-white font-bold">We are online</span>
            </h1>

          </div>
          <div class="app flex flex-col ">
            <header class="flex flex-col text-center justify-end shadow">
              <input type="text" name="username" id="username" class=" w-full bg-gray-300 appearance-none px-4 py-2 text-1xl text-black" placeholder="Enter Employee name">
            </header>
            <div id="messages" class="block rounded-1xl  overflow-y-auto h-80 bg-gray-100 p-3 shadow-lg">
            </div>
            <form id="message_form" class="flex">
              <input type="text" name="message" id="message_input" class="lg:flex-1 p-3" placeholder="Write a message.." />
              <button type="submit" id="message_send" class="appearance-none bg-white text-blue-900 p-3 uppercase transition duration-500 ease-in-out  hover:bg-gray-700 hover:text-white transform hover:-translate-y-1 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-10" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./js/app.js"></script>
<script src="buttonmodal.js"></script>

</html>