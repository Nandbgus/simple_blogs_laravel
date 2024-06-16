<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container grid grid-cols-3 gap-2 ">
        @foreach ($posts as $post)
        <article class="border-2 bg-white shadow-sm p-4">
            <h2 class="text-3xl font-bold tracking-tight"><a class="hover:underline" href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
            <div class=" text-gray-500 text-base">
                <a class="hover:underline" href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p>{{ Str::limit($post['body'], 70) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more
                &raquo;</a>
        </article>
        @endforeach

    </div>
</x-layout>