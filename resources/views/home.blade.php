<x-layout>
  <section id="filter-section" class="mb-10">
    <h2 class="text-lg font-bold mb-2 text-textPrimary">Filter Film</h2>
    <form method="GET" action="/" class="flex gap-4">
        <input 
            type="text" 
            name="search" 
            placeholder="Cari Film..." 
            value="{{ request('search') }}"
            class="w-full p-2 border-primary border-2 rounded-lg bg-slate-600 text-textPrimary" autocomplete="off">
        
        <select name="category_id" class="w-1/2 p-2 border-primary border-2 rounded-lg bg-slate-600 text-textPrimary">
            <option value="">Semua Kategori</option>
            @foreach($categories as $category)
                <option 
                    value="{{ $category->id }}" 
                    {{ request('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="bg-primary text-textPrimary px-4 py-2 rounded-lg">
            Filter
        </button>
    </form>
</section>
<section>
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
    @forelse($films as $film)
    <div class="card border border-gray-500 rounded-[20px] px-[21px] pt-[21px] pb-[10px]">
        <div class="card-header">
            <img src="{{ $film->image }}" alt="" class="rounded-[20px]">
        </div>
        <div class="card-body">
          <div class="flex mt-3 justify-between">
            <div>
              <h3 class="text-textPrimary text-2xl font-bold">{{ $film->title }}</h3>
              <div class="rating flex text-primary mt-[12px] gap-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                  </svg>                                                                                        
              </div>
            </div>
              <p class="text-gray-500 text-lg">{{ $film->category->name }}</p>
          </div>
          <div class="watch flex">
            <a href="{{ route('film.show', $film->id) }}" class="py-[10px] px-[20px] bg-primary font-bold rounded-[12px] w-full text-center mt-5 text-lg">Watch</a>
          </div>
        </div>
    </div>
    @empty
      <p class="text-gray-500">Tidak ada film ditemukan.</p>
    @endforelse
  </div>
</section>
</x-layout>