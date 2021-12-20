<div>
   <x-slot name="title">Category-post</x-slot>
   <x-header />
   <x-bloghero />
   <x-categoryPost :posts="$posts" :page="$page" :pageCount="$pageCount" />
   <x-footer />
</div>
