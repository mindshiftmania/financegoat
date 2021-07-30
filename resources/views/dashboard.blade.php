<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>FinanceGoat</title>
        @livewireStyles
    </head>
    <body>
        <div>
            <nav class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="font-bold text-white text-xl">Finance Goat</h1>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        </div>
                    </div>
                    </div>
                    <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                        <div>
                            <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>

                        <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                    <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    </div>
                </div>
                </div>
                <div class="md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                    </div>
                    <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    </div>
                    <div class="mt-3 px-2 space-y-1">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>

                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>

                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                    </div>
                </div>
                </div>
            </nav>

            <header class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="flex-1 min-w-0">
                            <h1 class="text-lg font-bold leading-7 text-gray-900">
                            Dashboard
                            </h1>
                        </div>
                        <div class="mt-4 flex md:mt-0 md:ml-4">
                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Add an income
                            </button>
                            <button type="button" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Add an expense
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <main class="bg-gray-100">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                    <h1 class="order-1 text-gray-900 text-lg font-extrabold tracking-tight mt-2 mb-5">Accounts</h1>
                    <div>
                        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                First account
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                71,897
                            </dd>
                            </div>

                            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Second account
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                58.16%
                            </dd>
                            </div>

                            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Third account
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                24.57%
                            </dd>
                            </div>
                        </dl>
                    </div>
                    <h1 class="order-1 text-gray-900 text-lg font-extrabold tracking-tight mt-5 mb-5">Stats</h1>
                    <div>
                        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                First account
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                71,897
                            </dd>
                            </div>

                            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Second account
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                58.16%
                            </dd>
                            </div>

                            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Third account
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                24.57%
                            </dd>
                            </div>
                        </dl>
                    </div>
                    <h1 class="order-1 text-gray-900 text-lg font-extrabold tracking-tight mt-5 mb-5">Transaction details</h1>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Transaction
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Incomes
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Expenses
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Odd row -->
                                    <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        Jane Cooper
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Regional Paradigm Technician
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        jane.cooper@example.com
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        @livewireScripts
    </body>
</html>
