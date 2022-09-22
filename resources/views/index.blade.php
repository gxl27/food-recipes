<x-layout>

   @include('partials._banner')

  <div id="app">
    <vueroot/>
  </div>
  @guest
  <div class='w-full, p-8 text:lg flex justify-center'>
    You must be logged in to see the recipes.  <a href="{{ route('register') }}" class="hover:text-laravel"><span class='color-success mx-2'> Register</span></a> or         <a href="{{ route('login') }}" class="hover:text-laravel"> <span class='color-success mx-2'> Login</span></a>
  </div>
  @endguest

  @auth
    <x-recipe_new :categories="$categories" />
    <x-recipe_edit :categories="$categories" :recipe="$recipe" />
  @endauth

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/main.js') }}"></script>
</x-layout>
  