<div>
    <x-slot name="title">Blog</x-slot>
    <x-header />
    <x-bloghero />
    <x-blogPagePost :posts="$posts" :page="$page"  :categorysRight="$categorysRight" :pageCountCategory="$pageCountCategory" :pages="$pages" :pageCount="$pageCount" :popularPost="$popularPost" />
    <x-footer />
</div>
