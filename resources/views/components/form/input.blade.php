@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-black/10 border border-black/10 px-5 py-4 w-full',
        'value' => old($name)
    ];
@endphp

<x:form.field :$label :$name>
    <input {{ $attributes($defaults) }} />
</x:form.field>
