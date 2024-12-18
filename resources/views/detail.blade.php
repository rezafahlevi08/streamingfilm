<x-layout>
    <div class="container mx-auto">
        <div class="card flex flex-wrap bg-[#21242D] py-10 px-8 rounded-2xl">
            <div class="w-full lg:w-1/2">
                <video class="rounded-lg shadow-lg" controls>
                    <source src="{{ asset($film->video_path) }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video.
                </video>
            </div>
            <div class="w-full lg:w-1/2 lg:pl-4">
                <h1 class="text-4xl font-bold mb-4 text-textPrimary">{{ $film->title }}</h1>
                <p class="text-gray-400 mb-2">{{ $film->category->name }}</p>
                <p class="text-textPrimary mb-2">{{ $film->description }}</p>
                <h6 class="text-textPrimary mb-1 text-lg">Aktor</h6>
                <p class="text-gray-300 mb-2">{{ $film->aktor }}</p>
                <h6 class="text-textPrimary mb-1 text-lg">Sutradara</h6>
                <p class="text-gray-300 mb-2">{{ $film->sutradara }}</p>
                <h6 class="text-textPrimary mb-1 text-lg">Tahun</h6>
                <p class="text-gray-300 mb-2">{{ $film->tahun }}</p>
            </div>
        </div>
        
        
    </div>
</x-layout>