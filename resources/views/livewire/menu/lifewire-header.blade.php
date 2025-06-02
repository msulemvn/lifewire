<div>
    <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
        <flux:brand href="#" logo="lifewire.svg" name="Lifewire" class="max-lg:hidden dark:hidden" />
        <flux:brand href="#" logo="lifewire.svg" name="Lifewire" class="max-lg:hidden! hidden dark:flex" />
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
                <flux:navbar.item class="max-lg:hidden" icon="arrow-right" href="/login">Login</flux:navbar.item>
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
    <flux:sidebar stashable sticky class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />
        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>               
        </flux:navlist>
        <flux:spacer />
        <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
            <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>
    <flux:main container>
    </flux:main>
</div>