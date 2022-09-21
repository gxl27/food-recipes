<x-layout>

   @include('partials._banner')

  <div id="app">
    <vueroot/>
  </div>

  @auth
    <x-recipe_new :categories="$categories" />
    <x-recipe_edit :categories="$categories" :recipe="$recipe" />
  @endauth

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/main.js') }}"></script>
</x-layout>
  