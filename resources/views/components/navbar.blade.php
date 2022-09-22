<header>
  <nav class="flex justify-between items-center container">
    <a href="{{ route('home') }}"><img src="{{asset('images/logo.svg')}}" alt="logo" class="logo" id="logo" /></a>
    <ul class="flex space-x-6 md:space-x-12 mr-6 text-lg">
      @auth
      <li>
        <span class="capitalize color-success">
          <i class="fa-solid fa-user hidden md:inline-block"></i> <span class='mx-2'>{{auth()->user()->name}}</span>
        </span>
      </li>
      <li>
        <span id='btn-recipe-add' class="capitalize cursor-pointer" style='color:#008000'>
          <i class="fa-solid fa-plus "></i> <span class='mx-2 hidden md:inline-block'>Add recipe</span>
        </span>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-right-from-bracket color-danger"></i> <span class='color-danger mx-2 hidden md:inline-block'> Logout</span>
          </button>
        </form>
      </li>
      @else
      <li>
      <a href="{{ route('register') }}" class="hover:text-laravel"><i class="fa-solid fa-user-plus color-success"></i> <span class='color-success mx-2'> Register</span></a>
      </li>
      <li>
        <a href="{{ route('login') }}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket color-success"></i> <span class='color-success mx-2'> Login</span></a>
      </li>
      @endauth
    </ul>
  </nav>
</header>