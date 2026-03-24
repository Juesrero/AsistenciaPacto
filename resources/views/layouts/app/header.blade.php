@props([
    'title' => __('Panel de control'),
])

<div class="rounded-[2rem] border border-white/70 bg-white/85 p-6 shadow-sm shadow-zinc-200/60 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-900/80 dark:shadow-none">
    <div class="flex flex-col gap-6 xl:flex-row xl:items-center xl:justify-between">
        <div class="space-y-4">
            <div class="inline-flex w-fit items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">
                Fase inicial
            </div>

            <div class="space-y-2">
                <h1 class="text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white sm:text-3xl">
                    {{ $title }}
                </h1>

                <p class="max-w-2xl text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                    Base operativa para control de asistencia, actas y análisis poblacional con autenticación, roles y estructura lista para crecer sin rehacer la interfaz.
                </p>
            </div>

            <div class="flex flex-wrap gap-2">
                <span class="rounded-full border border-zinc-200 bg-zinc-50 px-3 py-1 text-xs font-medium text-zinc-600 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">Laravel 13</span>
                <span class="rounded-full border border-zinc-200 bg-zinc-50 px-3 py-1 text-xs font-medium text-zinc-600 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">Livewire</span>
                <span class="rounded-full border border-zinc-200 bg-zinc-50 px-3 py-1 text-xs font-medium text-zinc-600 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">Tailwind</span>
                <span class="rounded-full border border-zinc-200 bg-zinc-50 px-3 py-1 text-xs font-medium text-zinc-600 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">MySQL</span>
            </div>
        </div>

        <div class="grid gap-3 sm:grid-cols-2 xl:min-w-[24rem]">
            <div class="rounded-[1.75rem] bg-zinc-950 p-4 text-white shadow-lg shadow-zinc-950/10 dark:bg-zinc-100 dark:text-zinc-950 dark:shadow-none">
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-white/60 dark:text-zinc-500">Rol actual</p>
                <p class="mt-2 text-lg font-semibold">{{ auth()->user()->roleLabel() }}</p>
                <p class="mt-1 text-sm text-white/70 dark:text-zinc-500">Autenticación operativa y acceso por perfil listos.</p>
            </div>

            <a
                href="{{ route('profile.edit') }}"
                wire:navigate
                class="rounded-[1.75rem] border border-zinc-200 bg-zinc-50 p-4 transition hover:border-emerald-200 hover:bg-emerald-50/70 dark:border-zinc-700 dark:bg-zinc-800/80 dark:hover:border-emerald-500/30 dark:hover:bg-emerald-500/10"
            >
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-zinc-400">Cuenta</p>
                <p class="mt-2 text-lg font-semibold text-zinc-950 dark:text-white">Configuración</p>
                <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">Perfil, seguridad y apariencia desde una sola vista.</p>
            </a>
        </div>
    </div>
</div>
