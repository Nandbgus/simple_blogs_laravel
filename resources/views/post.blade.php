<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container gap-2 ">
        <article class="border-2 p-4 shadow-sm bg-white">
            <h2 class="text-3xl font-bold tracking-tight">{{ $post['title'] }}</h2>
            <div class=" text-gray-500 text-base">
                <span>By</span>
                <a href="">{{ $post->author->name }}</a>
                <span>In </span><a href="">Tes</a> | {{ $post->created_at->format('j F Y') }}
            </div>
            <p>{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts
            </a>
        </article>

    </div>
</x-layout>