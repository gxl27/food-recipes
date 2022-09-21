@props(['recipe'])
<x-card class="p-10 max-w-lg mx-auto mt-24">
  <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">Ingredient</h2>
    <p class="mb-6">Add a new ingredient to {{ $recipe->name }}</p>
  </header>

  <form method="POST" action="{{ route('ingredients.store', ['recipe' => $recipe->id]) }}">
    @csrf
    <div class="mb-6">
      <label for="title" class="inline-block text-lg mb-2"> Title </label>
      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}" />

      @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="position" class="inline-block text-lg mb-2">position</label>
      <input type="number" class="border border-gray-200 rounded p-2 w-full" name="position" value="{{old('position')}}" />

      @error('position')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
    <input type="hidden" class="border border-gray-200 rounded p-2 w-full" name="recipe_id" value="{{ $recipe->id }}" />

      @error('recipe_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button type="submit" class="primary-color-bg text-white rounded py-2 px-4 hover:bg-black">
        Save
      </button>
    </div>
  </form>
</x-card>
