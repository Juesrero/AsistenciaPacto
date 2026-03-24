<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(16,185,129,0.16),_transparent_22%),radial-gradient(circle_at_bottom_right,_rgba(6,182,212,0.12),_transparent_18%)] antialiased">
        <div class="flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-md flex-col gap-6">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 shadow-lg shadow-emerald-500/20">
                        <x-app-logo-icon class="size-6 fill-current text-white" />
                    </span>

                    <span class="text-sm font-semibold text-zinc-900">{{ config('app.name', 'Laravel') }}</span>
                </a>

                <div class="flex flex-col gap-6">
                    <div class="rounded-[1.75rem] border border-white/70 bg-white/85 text-stone-800 shadow-sm shadow-zinc-200/60 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-900/80 dark:shadow-none">
                        <div class="px-10 py-8">{{ $slot }}</div>
                    </div>
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
