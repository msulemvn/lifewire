<flux:header container class="sticky top-0 z-50 bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
    <flux:brand href="/" logo="lifewire.svg" name="Lifewire" class="max-lg:hidden dark:hidden" />
    <flux:brand href="/" logo="lifewire.svg" name="Lifewire" class="max-lg:hidden! hidden dark:flex" />
    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="home" href="#" current>Home</flux:navbar.item>
    </flux:navbar>
    <flux:spacer />
    @if (Route::has('login'))
    <nav class="flex items-center justify-end gap-4">
        @auth
        <flux:navbar class="mr-4">
            <flux:navbar.item class="max-lg:hidden" icon="computer-desktop" href="/dashboard">Dashboard</flux:navbar.item>
        </flux:navbar>
        @else
        <flux:navbar class="mr-4">
            <flux:navbar.item class="max-lg:hidden" icon="arrow-right-end-on-rectangle" href="/login">Login</flux:navbar.item>
        </flux:navbar>

        @if (Route::has('register'))
        <flux:navbar class="mr-4">
            <flux:navbar.item class="max-lg:hidden" icon="user-plus" href="/register">Register</flux:navbar.item>
        </flux:navbar>
        @endif
        @endauth
    </nav>
    @endif
</flux:header>