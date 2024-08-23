@props(['label', 'name'])

<div>
    @if ($label)
        <x:form.label :$name :$label/>
    @endif

<div class="m-4">
    {{$slot}}

    <x:form.error :error="$errors->first($name)" />
</div>
