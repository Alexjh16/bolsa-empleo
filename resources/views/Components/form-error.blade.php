@props(['name'])
@error($name)
    <p class="mt-2 text-xs/6 font-semibold text-red-400">* {{ $message }}</p>
@enderror
