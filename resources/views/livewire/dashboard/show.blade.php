<div>
    <h3 class="text-lg font-medium leading-6 text-gray-900 mt-2">Accounts</h3>
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
    <h3 class="text-lg font-medium leading-6 text-gray-900 mt-12">Stats</h3>
    <div>
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                First account
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900 h-96">
                <livewire:livewire-column-chart :column-chart-model="$columnChartModel" />
            </dd>
            </div>

            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Second account
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900 h-96">
                <livewire:livewire-column-chart :column-chart-model="$columnChartModel" />
            </dd>
            </div>

            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Third account
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900 h-96">
                <livewire:livewire-column-chart :column-chart-model="$columnChartModel" />
            </dd>
            </div>
        </dl>
    </div>
    <h3 class="text-lg font-medium leading-6 text-gray-900 mt-12">Transaction Details</h3>
    <div class="flex flex-col">
        <div class="mt-5 overflow-x-auto sm:-mx-6 lg:-mx-8">
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
