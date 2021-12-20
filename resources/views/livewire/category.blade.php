<div>
    <x-slot name="title">Category</x-slot>
    <x-header />
    <x-categoryHero />
    <x-categorys :categorys="$categorys" :page="$page" :pageCount="$pageCount"/>
    <x-footer />
</div>
