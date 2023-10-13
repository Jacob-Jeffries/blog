<x-layout>

@include ('_posts_fs-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count() )
            <x-posts-grid :posts="$posts" />
        @else
            <p>No Posts Yet. Please create one.</p>
        @endif
    </main>
</x-layout>
