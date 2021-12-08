@props(['name'])

<div class="mb-6">
    <x-form.label name="{{ $name }}"/>

    <input class="border border-gray-300 p-2 w-full rounded"
           type="text"
           name="{{ $name }}"
           id="{{ $name }}"
           required
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</div>
