<x-app-layout>

    @if(count($opportunities) > 0)
        @foreach($opportunities as $o)
            {{ $o->id }}
        @endforeach 
    @else
        <div>No opportunities are currently available.</div>
    @endif


</x-app-layout>