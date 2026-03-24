<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top_left,_rgba(16,185,129,0.12),_transparent_24%),radial-gradient(circle_at_bottom_right,_rgba(6,182,212,0.10),_transparent_20%)]">
        <div class="relative min-h-screen lg:flex">
            <flux:sidebar sticky collapsible="mobile" class="border-e border-white/70 bg-white/85 px-3 py-4 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-950/90 lg:w-[18rem]">
                <flux:sidebar.header class="pb-4">
                    <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
                    <flux:sidebar.collapse class="lg:hidden" />
                </flux:sidebar.header>

                <div class="rounded-[1.75rem] bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 p-4 text-white shadow-lg shadow-emerald-500/20">
                    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-white/70">Control operativo</p>
                    <p class="mt-2 text-lg font-semibold">{{ config('app.name') }}</p>
                    <p class="mt-2 text-sm leading-6 text-white/80">
                        Plataforma base para asistencia, actas y seguimiento poblacional.
                    </p>
                </div>

                <flux:sidebar.nav class="mt-5">
                    <div class="px-2 pb-2 text-[11px] font-semibold uppercase tracking-[0.24em] text-zinc-400">
                        Navegación
                    </div>

                    <flux:sidebar.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                        Panel de control
                    </flux:sidebar.item>

                    <div class="mt-4 rounded-[1.75rem] border border-zinc-200/80 bg-white/80 p-4 dark:border-zinc-800 dark:bg-zinc-900/70">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400">Módulos siguientes</p>

                        <div class="mt-4 space-y-3 text-sm text-zinc-600 dark:text-zinc-300">
                            <div class="flex items-center justify-between rounded-2xl bg-zinc-50 px-3 py-2 dark:bg-zinc-800/80">
                                <span>Asistencias</span>
                                <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-medium text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-300">Próximo</span>
                            </div>
                            <div class="flex items-center justify-between rounded-2xl bg-zinc-50 px-3 py-2 dark:bg-zinc-800/80">
                                <span>Actas</span>
                                <span class="rounded-full bg-cyan-50 px-2 py-0.5 text-xs font-medium text-cyan-700 dark:bg-cyan-500/10 dark:text-cyan-300">Próximo</span>
                            </div>
                            <div class="flex items-center justify-between rounded-2xl bg-zinc-50 px-3 py-2 dark:bg-zinc-800/80">
                                <span>Población</span>
                                <span class="rounded-full bg-amber-50 px-2 py-0.5 text-xs font-medium text-amber-700 dark:bg-amber-500/10 dark:text-amber-300">Próximo</span>
                            </div>
                        </div>
                    </div>
                </flux:sidebar.nav>

                <flux:spacer />

                <div class="rounded-[1.75rem] border border-zinc-200/80 bg-white/80 p-4 dark:border-zinc-800 dark:bg-zinc-900/70">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-400">Sesión activa</p>
                    <div class="mt-3 flex items-center justify-between gap-3">
                        <div>
                            <p class="text-sm font-semibold text-zinc-950 dark:text-white">{{ auth()->user()->roleLabel() }}</p>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</p>
                        </div>
                        <span class="rounded-full bg-zinc-950 px-2.5 py-1 text-[11px] font-medium text-white dark:bg-white dark:text-zinc-950">Listo</span>
                    </div>
                </div>

                <div class="mt-4">
                    <x-desktop-user-menu />
                </div>
            </flux:sidebar>

            <div class="flex min-h-screen flex-1 flex-col">
                <header class="sticky top-0 z-20 flex items-center gap-3 border-b border-white/70 bg-white/85 px-4 py-3 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-950/90 lg:hidden">
                    <flux:sidebar.toggle class="shrink-0" icon="bars-2" inset="left" />

                    <div class="min-w-0">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-zinc-400">Control operativo</p>
                        <p class="truncate text-sm font-semibold text-zinc-950 dark:text-white">{{ config('app.name') }}</p>
                    </div>

                    <div class="ms-auto flex size-10 items-center justify-center rounded-2xl bg-zinc-950 text-sm font-semibold text-white dark:bg-white dark:text-zinc-950">
                        {{ auth()->user()->initials() }}
                    </div>
                </header>

                <div class="flex-1 px-4 py-5 lg:px-8 lg:py-6">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @fluxScripts
    </body>
</html>
