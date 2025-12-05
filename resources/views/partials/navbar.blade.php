<nav class="border-b border-slate-800/60 bg-slate-950/80 backdrop-blur sticky top-0 z-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-sky-500 to-emerald-400"></div>
            <div class="flex flex-col leading-tight">
                <span class="font-semibold text-sm tracking-wide">Haya Dev</span>
                <span class="text-[11px] text-slate-400">Digital & Automation</span>
            </div>
        </a>

        <div class="hidden md:flex items-center gap-6 text-sm">
            <a href="{{ route('services') }}" class="hover:text-sky-400">Services</a>
            <a href="{{ route('projects') }}" class="hover:text-sky-400">Projects</a>
            <a href="{{ route('about') }}" class="hover:text-sky-400">About</a>
            <a href="{{ route('contact') }}" class="hover:text-sky-400">Contact</a>

            {{-- Switch language --}}
            <div class="flex items-center gap-2">
                <a href="{{ route('lang.switch', 'id') }}"
                   class="px-2 py-1 rounded text-xs border
                          {{ app()->getLocale() === 'id' ? 'border-sky-500' : 'border-slate-700' }}">
                    ID
                </a>
                <a href="{{ route('lang.switch', 'en') }}"
                   class="px-2 py-1 rounded text-xs border
                          {{ app()->getLocale() === 'en' ? 'border-sky-500' : 'border-slate-700' }}">
                    EN
                </a>
            </div>
        </div>
    </div>
</nav>
