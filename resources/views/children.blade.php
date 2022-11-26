<x-appLayout>
    <div class="h-96 bg-red-900">ABC</div>
    <div class="h-96 bg-red-900">ABC</div>
    @foreach ($children as $child)
        <div>{{ $child->name }}</div>
    @endforeach
    <div>{{ $children->links() }}</div>
</x-appLayout>