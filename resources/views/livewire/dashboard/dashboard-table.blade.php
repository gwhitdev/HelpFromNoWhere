<div>
    <div>
        <span class="font-bold">{{ ucwords($table) }} List <a class="hover:underline "href="/{{strtolower($table)}}/new">[Add]</a></span>
    </div>
    
    <table @class(['table-auto','w-full', 'bg-red-100'=>$colour == 'red', 'bg-blue-100' => $colour == 'blue','bg-yellow-100'=>$colour == 'yellow'])>
        <thead>
            <tr>
                <th class="w-1/4 px-2 text-left">
                    Id
                </th>
                <th class="w-1/2 px-2 text-left">
                    
                </th>
            
            </tr>
        </thead>
        <tbody>
            @foreach($model as $m)
            <tr>
                <td class="px-2">
                    {{ $m->id }}
                </td>
                <td class="px-2">
                    <a class="hover:underline" href="/{{ strtolower($table) }}/{{ $m->id }}/details">{{ $m->name }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>