<ul class="space-y-2 px-2">
    <li>
        <form action="#" method="GET" class="lg:hidden">
            <label for="mobile-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-2 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5 garlic-auto-save" placeholder="Search">
            </div>
        </form>
    </li>

    <li id="pos" class="relative -left-2">
        <x-menu-active-span route="dashboard" />
        <a href="{{ route('pos') }}" class="flex justify-center ml-2 p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
            <span class="flex-1 ml-3 whitespace-nowrap">{{ __('POS') }}</span>
        </a>
    </li>

    <li id="dashboard" class="relative -left-2">
        <x-menu-active-span route="dashboard" />
        <a href="{{ route('dashboard') }}" class="flex justify-center ml-2 p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
            <span class="flex-1 ml-3 whitespace-nowrap">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li id="Orders" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="orders*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-orders" data-collapse-toggle="dropdown-orders">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" /><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Order') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-orders" class="{{ request()->is('orders*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="orders.index">
                    {{ __('List Order') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="orders.metode-pembayaran">
                    {{ __('Metode Pembayaran') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="orders.cicilan">
                    {{ __('Cicilan') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Konsumen" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="konsumen*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-konsumen" data-collapse-toggle="dropdown-konsumen">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Konsumen') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-konsumen" class="{{ request()->is('konsumen*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="konsumen.index">
                    {{ __('List Konsumen') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.create">
                    {{ __('Create Konsumen') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.groups">
                    {{ __('Konsumens Groups') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.create-group">
                    {{ __('Create Group') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.reward-systems">
                    {{ __('Reward Systems') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.create-reward">
                    {{ __('Create Reward') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.list-coupons">
                    {{ __('List Coupons') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="konsumen.create-coupon">
                    {{ __('Create Coupon') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Inventory" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="inventory*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-product" data-collapse-toggle="dropdown-product">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Inventory') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-product" class="{{ request()->is('inventory*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="inventory.produk">
                    {{ __('Produk') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.create-produk">
                    {{ __('Create Produk') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.print-labels">
                    {{ __('Print Labels') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.categories">
                    {{ __('Categories') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.create-category">
                    {{ __('Create Category') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.units">
                    {{ __('Units') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.create-unit">
                    {{ __('Create Unit') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.unit-groups">
                    {{ __('Unit Groups') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.create-unit-groups">
                    {{ __('Create Unit Groups') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.stock-adjustment">
                    {{ __('Stock Adjustment') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="inventory.stock-flow-records">
                    {{ __('Stock Flow Records') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Suplier" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="suplier*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-suplier" data-collapse-toggle="dropdown-suplier">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Suplier') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-suplier" class="{{ request()->is('suplier*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="suplier.index">
                    {{ __('List Suplier') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="suplier.create">
                    {{ __('Tambah Suplier') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Akunting" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="akunting*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-akunting" data-collapse-toggle="dropdown-akunting">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Akunting') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-akunting" class="{{ request()->is('akunting*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="akunting.expanses">
                    {{ __('Pengeluaran') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="akunting.create-expanses">
                    {{ __('Tambah Pengeluaran') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="akunting.cash-flow-history">
                    {{ __('Cash Flow History') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="akunting.akun">
                    {{ __('Akun') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="akunting.create-akun">
                    {{ __('Tambah Akun') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Pajak" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="pajak*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-pajak" data-collapse-toggle="dropdown-pajak">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Pajak') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-pajak" class="{{ request()->is('pajak*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="pajak.index">
                    {{ __('List Pajak') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="pajak.create">
                    {{ __('Tambah Pajak') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="pajak.taxes-group">
                    {{ __('Grup Pajak') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="pajak.create-taxes-group">
                    {{ __('Tambah Grup Pajak') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Users" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="users*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Users') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-users" class="{{ request()->is('users*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="users.index">
                    {{ __('List Users') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="users.create">
                    {{ __('Tambah Users') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="roles.index">
                    {{ __('Users Roles') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="roles.create">
                    {{ __('Tambah Users Roles') }}
                </x-menu-link>
            </li>
            {{-- <li>
                <x-menu-link href="users.permissions">
                    {{ __('Manage Permissions') }}
                </x-menu-link>
            </li> --}}
        </ul>
    </li>

    <li id="Pengadaan" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="pengadaan*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-pengadaan" data-collapse-toggle="dropdown-pengadaan">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Pengadaan') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-pengadaan" class="{{ request()->is('pengadaan*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="pengadaan.index">
                    {{ __('List Pengadaan') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="pengadaan.create">
                    {{ __('Tambah Pengadaan') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="pengadaan.produk">
                    {{ __('Pengadaan Produk') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Report" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="report*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-report" data-collapse-toggle="dropdown-report">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Report') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-report" class="{{ request()->is('report*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="report.sales-report">
                    {{ __('Sales Report') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.sales-progress">
                    {{ __('Sales progress') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.customer-statement">
                    {{ __('Customer Statement') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.stock-report">
                    {{ __('Stock Report') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.sold-report">
                    {{ __('Sold Report') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.incomes-&-loosses">
                    {{ __('Incomes & Loosses') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.cash-flow">
                    {{ __('Cash Flow') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.annual-report">
                    {{ __('Annual Report') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="report.sales-by-payment">
                    {{ __('Sales by Payment') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

    <li id="Setting" class="relative -left-2">
        <div class=relative>
            <x-menu-active-span route="setting*" />
            <button type="button" class="flex justify-center ml-2 p-2 w-full text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-setting" data-collapse-toggle="dropdown-setting">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{ __('Setting') }}</span>
                {{-- <svg sidebar-toggle-item class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
            </button>
        </div>
        <ul id="dropdown-setting" class="{{ request()->is('setting*') ? 'block' : 'hidden' }} py-1 space-y-1">
            <li>
                <x-menu-link href="setting.umum">
                    {{ __('Umum') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.pos">
                    {{ __('POS') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.konsumen">
                    {{ __('Konsumen') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.orders">
                    {{ __('Orders') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.akunting">
                    {{ __('Akunting') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.reports">
                    {{ __('Reports') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.invoice-setting">
                    {{ __('Invoice Settings') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.workers">
                    {{ __('Workers') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.reset">
                    {{ __('Reset') }}
                </x-menu-link>
            </li>
            <li>
                <x-menu-link href="setting.about">
                    {{ __('About') }}
                </x-menu-link>
            </li>
        </ul>
    </li>

</ul>
