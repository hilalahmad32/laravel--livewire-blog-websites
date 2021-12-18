<div>
    <x-slot name="title">Blog</x-slot>
    <x-header />
    <x-bloghero />
    <x-blogPagePost :posts="$posts" :page="$page" :pageCount="$pageCount" />
    <x-footer />
</div>
