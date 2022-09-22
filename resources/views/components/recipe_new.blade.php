@props(['categories'])
<x-card  id="recipe-new" class="p-10 w-full">
  <div class='max-w-lg mx-auto'>
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Recipe</h2>
      <p class="mb-4">Create a new recipe</p>
    </header>
  
    <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"> Title </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}" />
  
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <label for="calories" class="inline-block text-lg mb-2">Calories</label>
        <input type="number" class="border border-gray-200 rounded p-2 w-full" name="calories" value="{{old('calories')}}" />
  
        @error('calories')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <label for="duration" class="inline-block text-lg mb-2">Duration</label>
        <input type="number" class="border border-gray-200 rounded p-2 w-full" name="duration" value="{{old('duration')}}" />
  
        @error('duration')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      
      <div class="mb-6">
        <label for="category_id" class="inline-block text-lg mb-2">Select Category</label>
        <select class="border border-gray-200 rounded p-2 w-full" name="category_id" required id="category_id">
          @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->title}}</option>
          @endforeach
        </select>
        @error('category_id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Add picture
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
  
        @error('logo')
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
</x-card>
