<x-app-layout>

    @if(count($categories) > 0)
        @foreach($categories as $c)
            {{ $c->id }}
        @endforeach 
    @else
        <div>No categories currently available</div>
    @endif


</x-app-layout>