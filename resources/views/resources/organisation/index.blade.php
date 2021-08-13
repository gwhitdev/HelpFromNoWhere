<x-app-layout>

    @if(count($organisations) > 0)
        @foreach($organisations as $o)
            {{ $o->id }}
        @endforeach 
    @else
        <div>No organisations are currently available.</div>
    @endif


</x-app-layout>