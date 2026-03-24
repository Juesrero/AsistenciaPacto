<x-layouts::app :title="__('Panel de control')">
    @php
        $modules = [
            [
                'title' => 'Asistencias',
                'description' => 'Registro, consulta y consolidado de entradas, salidas y novedades.',
                'badge' => 'Preparación',
                'accent' => 'bg-emerald-100 text-emerald-700 dark:bg-emerald-500/15 dark:text-emerald-300',
            ],
            [
                'title' => 'Actas',
                'description' => 'Estructura base para actas operativas, seguimiento y trazabilidad.',
                'badge' => 'Borrador',
                'accent' => 'bg-cyan-100 text-cyan-700 dark:bg-cyan-500/15 dark:text-cyan-300',
            ],
            [
                'title' => 'Análisis poblacional',
                'description' => 'Zona prevista para métricas, segmentación y comportamiento poblacional.',
                'badge' => 'Pendiente',
                'accent' => 'bg-amber-100 text-amber-700 dark:bg-amber-500/15 dark:text-amber-300',
            ],
        ];

        $stack = [
            'Autenticación Livewire/Fortify',
            'Base MySQL configurada',
            'Interfaz compacta y responsiva',
            'Roles admin y operador',
        ];
    @endphp

    <div class="grid gap-6 xl:grid-cols-[1.65fr_1fr]">
        <section class="rounded-[2rem] border border-white/70 bg-white/85 p-6 shadow-sm shadow-zinc-200/60 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-900/80 dark:shadow-none">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div class="max-w-2xl space-y-3">
                    <div class="inline-flex w-fit items-center gap-2 rounded-full border border-zinc-200 bg-zinc-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">
                        Estado inicial
                    </div>

                    <h2 class="text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white">
                        Tablero listo para empezar a construir módulos reales
                    </h2>

                    <p class="text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                        Esta primera fase deja autenticación, roles, entorno MySQL, idioma base en español y una estructura visual preparada para crecer sin rehacer el proyecto.
                    </p>
                </div>

                <div class="rounded-[1.75rem] bg-zinc-950 px-5 py-4 text-white dark:bg-zinc-100 dark:text-zinc-950">
                    <p class="text-xs font-medium uppercase tracking-[0.2em] text-white/60 dark:text-zinc-500">Estado del panel</p>
                    <p class="mt-2 text-lg font-semibold">Sin registros aún</p>
                    <p class="mt-1 text-sm text-white/70 dark:text-zinc-500">Ideal para conectar tablas, filtros y reportes en la siguiente fase.</p>
                </div>
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-3">
                @foreach ($modules as $module)
                    <article class="rounded-[1.75rem] border border-zinc-200/80 bg-zinc-50/85 p-5 dark:border-zinc-800 dark:bg-zinc-950/40">
                        <div class="flex items-center justify-between gap-3">
                            <h3 class="text-sm font-semibold text-zinc-950 dark:text-white">{{ $module['title'] }}</h3>
                            <span class="rounded-full px-2.5 py-1 text-[11px] font-medium {{ $module['accent'] }}">
                                {{ $module['badge'] }}
                            </span>
                        </div>

                        <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                            {{ $module['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>

            <div class="mt-6 grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($stack as $item)
                    <div class="rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm font-medium text-zinc-700 dark:border-zinc-800 dark:bg-zinc-900 dark:text-zinc-200">
                        {{ $item }}
                    </div>
                @endforeach
            </div>
        </section>

        <aside class="space-y-6">
            <section class="rounded-[2rem] border border-white/70 bg-white/85 p-6 shadow-sm shadow-zinc-200/60 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-900/80 dark:shadow-none">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.24em] text-zinc-400">Roles habilitados</p>
                        <h3 class="mt-2 text-lg font-semibold text-zinc-950 dark:text-white">Acceso inicial</h3>
                    </div>
                    <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-500/15 dark:text-emerald-300">
                        2 perfiles
                    </span>
                </div>

                <div class="mt-5 space-y-3">
                    <div class="rounded-2xl border border-zinc-200 bg-zinc-50 px-4 py-3 dark:border-zinc-800 dark:bg-zinc-950/40">
                        <p class="text-sm font-semibold text-zinc-950 dark:text-white">Administrador</p>
                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">Gestiona configuración global, seguridad y futuras reglas de acceso.</p>
                    </div>

                    <div class="rounded-2xl border border-zinc-200 bg-zinc-50 px-4 py-3 dark:border-zinc-800 dark:bg-zinc-950/40">
                        <p class="text-sm font-semibold text-zinc-950 dark:text-white">Operador</p>
                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-300">Pensado para la operación diaria, captura y consulta de información.</p>
                    </div>
                </div>
            </section>

            <section class="rounded-[2rem] border border-white/70 bg-white/85 p-6 shadow-sm shadow-zinc-200/60 backdrop-blur-xl dark:border-zinc-800 dark:bg-zinc-900/80 dark:shadow-none">
                <p class="text-xs font-semibold uppercase tracking-[0.24em] text-zinc-400">Estado técnico</p>

                <div class="mt-5 space-y-3">
                    <div class="flex items-center justify-between rounded-2xl bg-zinc-50 px-4 py-3 dark:bg-zinc-950/40">
                        <span class="text-sm font-medium text-zinc-600 dark:text-zinc-300">Base de datos</span>
                        <span class="text-sm font-semibold text-zinc-950 dark:text-white">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between rounded-2xl bg-zinc-50 px-4 py-3 dark:bg-zinc-950/40">
                        <span class="text-sm font-medium text-zinc-600 dark:text-zinc-300">Interfaz</span>
                        <span class="text-sm font-semibold text-zinc-950 dark:text-white">Livewire + Tailwind</span>
                    </div>
                    <div class="flex items-center justify-between rounded-2xl bg-zinc-50 px-4 py-3 dark:bg-zinc-950/40">
                        <span class="text-sm font-medium text-zinc-600 dark:text-zinc-300">Idioma base</span>
                        <span class="text-sm font-semibold text-zinc-950 dark:text-white">Español</span>
                    </div>
                </div>
            </section>
        </aside>
    </div>

    <section class="rounded-[2rem] border border-dashed border-zinc-300 bg-white/70 p-8 shadow-sm shadow-zinc-200/40 backdrop-blur-xl dark:border-zinc-700 dark:bg-zinc-900/60 dark:shadow-none">
        <div class="grid gap-5 lg:grid-cols-[1.4fr_1fr] lg:items-center">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.24em] text-zinc-400">Área vacía</p>
                <h3 class="mt-3 text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white">
                    Sin indicadores ni actividad operativa por mostrar todavía
                </h3>
                <p class="mt-3 max-w-2xl text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                    Aquí pueden entrar el resumen diario de asistencia, alertas, actas recientes, segmentación poblacional y gráficos cuando se construyan los módulos de negocio.
                </p>
            </div>

            <div class="rounded-[1.75rem] bg-zinc-950 px-5 py-6 text-white dark:bg-zinc-100 dark:text-zinc-950">
                <p class="text-xs font-medium uppercase tracking-[0.2em] text-white/60 dark:text-zinc-500">Siguiente entrega</p>
                <ul class="mt-4 space-y-3 text-sm text-white/80 dark:text-zinc-600">
                    <li>Crear catálogos y tablas maestras.</li>
                    <li>Definir formularios de asistencia y actas.</li>
                    <li>Agregar reportes y análisis poblacional.</li>
                </ul>
            </div>
        </div>
    </section>
</x-layouts::app>
