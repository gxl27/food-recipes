@props(['categories', 'recipe'])

<x-card id="recipe-edit" class="p-10  mx-full">
  <div class='max-w-lg mx-auto'>
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Recipe</h2>
      <p class="mb-4">Edit recipe</p>
      <img class=" w-48 mr-6 md:block"
    src="{{$recipe->logo ? asset('storage/' . $recipe->logo) : asset('/images/no-image.jpg')}}" alt="recipe-{{ $recipe->id }}" />
    </header>

    <form method="POST" action="{{ route('recipes.edit', ['id' => $recipe->id]) }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"> Title </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{ $recipe->title }}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="calories" class="inline-block text-lg mb-2">Calories</label>
        <input type="number" class="border border-gray-200 rounded p-2 w-full" name="calories" value="{{ $recipe->calories }}" />

        @error('calories')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="duration" class="inline-block text-lg mb-2">Duration</label>
        <input type="number" class="border border-gray-200 rounded p-2 w-full" name="duration" value="{{ $recipe->duration }}" />

        @error('duration')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      
      <div class="mb-6">
        <label for="category_id" class="inline-block text-lg mb-2">Select Category</label>
        <select class="border border-gray-200 rounded p-2 w-full" name="category_id" required id="category_id_edit">
          @foreach($categories as $category)
              <option value="{{ $category->id }}" {{ ( $category->id == $recipe->category_id) ? 'selected' : '' }} >{{ $category->title}}</option>
          @endforeach
        </select>
        @error('category_id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="logo-edit" class="inline-block text-lg mb-2">
          
          @if($recipe->logo)
            <span class='color-danger font-bold'>This recipe has a picture already!</span>
          @else 
            Add picture
          @endif
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo_edit" />

        @error('logo_edit')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="primary-color-bg text-white rounded py-2 px-4 hover:bg-black">
          Save
        </button>
      </div>
      <x-close-btn/>
    </div>
  </form>
  <form method="POST"action="{{ route('recipes.delete', ['id' => $recipe->id]) }}">
    @csrf
    @method('DELETE')
    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
  </form>

  Ingredients
  Add new ingredient 
  <x-ingredient_new :recipe="$recipe" />
  Edit an ingredient
  @foreach($recipe->ingredients as $ingredient)
    <x-ingredients :ingredient="$ingredient" :recipe="$recipe" />
  @endforeach

  Directions
  Add new direction
  <x-direction_new :recipe="$recipe" />
  Edit a direction
  @foreach($recipe->directions as $direction)
    <x-directions :direction="$direction" :recipe="$recipe" />
  @endforeach
</x-card>
