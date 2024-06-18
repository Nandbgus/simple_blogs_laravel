<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container gap-2 ">
        <article class="border-2 p-4 shadow-sm bg-white">
            <h2 class="text-3xl font-bold tracking-tight">{{ $post['title'] }}</h2>
            <div class=" text-gray-500 text-base">
                <span>By</span>
                <a href="/authors/{{ $post->author->username }}" class="text-gray-500 text-base hover:text-blue-500">{{ $post->author->name }}</a>
                <span>In </span> @foreach ($post->categories as $category)
                <a class="bg-blue-500 text-white rounded-sm p-2 py-1" href="/category/{{ $category->slug }}">{{ $category->nama }}</a>
                @endforeach | {{ $post->created_at->diffForHumans() }}
            </div>
            <p>{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts
            </a>
        </article>

    </div>
</x-layout>