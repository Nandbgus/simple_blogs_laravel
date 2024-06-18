<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container grid grid-cols-3 gap-2 ">
        @foreach ($posts as $post)
        <article class="border-2 bg-white shadow-sm p-4">
            <h2 class="text-3xl font-bold tracking-tight"><a class="hover:underline" href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
            <div class=" ">
                <a href="/authors/{{ $post->author->username }}" class="text-gray-500 text-base hover:text-blue-500">{{ $post->author->name }}</a>
                <span>In </span> @foreach ($post->categories as $category)
                <a class="bg-blue-500 text-white rounded-sm p-2 py-1" href="/category/{{ $category->slug }}">{{ $category->nama }}</a>
                @endforeach | {{ $post->created_at->diffForHumans() }}
            </div>
            <p>{{ Str::limit($post['body'], 70) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more
                &raquo;</a>
        </article>
        @endforeach

    </div>
</x-layout>