<x-app-layout>

    @if(count($visibilities) > 0)
        @foreach($visibilities as $v)
            {{ $v->id }}
        @endforeach 
    @else
        <div>No visibility options are currently available.</div>
    @endif


</x-app-layout>