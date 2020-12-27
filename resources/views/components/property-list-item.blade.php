@props(['property'])
<tr>
    
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$property->title}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        {{$property->type_label}}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        {{$property->area->name}}
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-{{$property->status == 'accepted' ? 'blue' : 'green'}}-800">
            {{$property->status ?? 'checking'}}
        </span>
    </td>
    @can('accept property')
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <a href="{{route('property.accept',['property' => $property])}}" class="text-indigo-600 hover:text-indigo-900">Accept</a>
    </td>
    @endcan
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
</tr>