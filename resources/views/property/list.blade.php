<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property list') }}
        </h2>
    </x-slot>

    <div>
        <x-property-list>
        @forelse ($properties as $property)

            <x-property-list-item :property="$property"/>
            @empty
            no properties
            @endforelse
        </x-property-list>
    </div>

</x-app-layout>