@props(['direction', 'recipe'])

<x-card class="p-3 max-w-lg mx-auto mt-8">

  <form method="POST" action="{{ route('directions.edit', ['id' => $direction->id, 'recipe' => $recipe->id]) }}">
    @csrf
    <div class="mb-3">
      <label for="title" class="inline-block text-lg mb-2"> Title </label>
      <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{ $direction->title }}" />

      @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="position" class="inline-block text-lg mb-2">position</label>
      <input type="number" class="border border-gray-200 rounded p-2 w-full" name="position" value="{{ $direction->position }}" />

      @error('position')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-3">
      <button type="submit" class="primary-color-bg text-white rounded py-2 px-4 hover:bg-black">
        Save
      </button>
    </div>
  </form>
  <form method="POST"action="{{ route('directions.delete', ['id' => $direction->id]) }}">
    @csrf
    @method('DELETE')
    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
  </form>
</x-card>
