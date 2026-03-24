<x-layouts::app.sidebar :title="$title ?? null">
    <div class="space-y-6">
        <x-layouts::app.header :title="$title ?? __('Panel de control')" />

        <flux:main class="space-y-6">
            {{ $slot }}
        </flux:main>
    </div>
</x-layouts::app.sidebar>
