<x-app-layout>

    @if(count($statuses) > 0)
        @foreach($statuses as $s)
            {{ $s->id }}
        @endforeach 
    @else
        <div>No statuses are currently available.</div>
    @endif


</x-app-layout>