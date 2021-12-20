<div>
    <x-slot name="title">Home</x-slot>
    <x-header  />
    <x-hero :randomPosts="$randomPosts"/>
    <x-slider :categorys="$categorys" />
    <x-blogpost :posts="$posts" :categorysRight="$categorysRight" :pageCount="$pageCount" :pages="$pages" :popularPost="$popularPost" />
    <x-footer />
</div>
