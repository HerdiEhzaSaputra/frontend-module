<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    @push('page_css')
        <style>
            .custom-control-label {
                cursor: pointer;
            }
        </style>
    @endpush

    @section('third_party_stylesheets')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    @endsection

    @section('breadcrumb')
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Create</span>
                </div>
            </li>
        </ol>
    @endsection

    <div class="container max-w-full mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="md:w-full pr-4 pl-4">
                {{-- @include('utils.alerts') --}}
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Create Role <i class="bi bi-check"></i>
                        </button>
                    </div>
                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                        <div class="flex-auto p-6">
                            <div class="mb-4">
                                <label for="name">Role Name <span class="text-red-600">*</span></label>
                                <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text" name="name" required>
                            </div>

                            <hr>

                            <div class="mb-4">
                                <label for="permissions">Permissions <span class="text-red-600">*</span></label>
                            </div>

                            <div class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="select-all">
                                    <label class="custom-control-label" for="select-all">Give All Permissions</label>
                                </div>
                            </div>

                            <div class="flex flex-wrap ">
                                <!-- Dashboard Permissions -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Dashboard
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_total_stats" name="permissions[]"
                                                            value="show_total_stats" {{ old('show_total_stats') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_total_stats">Total Stats</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_notifications" name="permissions[]"
                                                            value="show_notifications" {{ old('show_notifications') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_notifications">Notifications</label>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_month_overview" name="permissions[]"
                                                            value="show_month_overview" {{ old('show_month_overview') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_month_overview">Month Overview</label>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_weekly_sales_purchases" name="permissions[]"
                                                            value="show_weekly_sales_purchases" {{ old('show_weekly_sales_purchases') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_weekly_sales_purchases">Weekly Sales & Purchases</label>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_monthly_cashflow" name="permissions[]"
                                                            value="show_monthly_cashflow" {{ old('show_monthly_cashflow') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_monthly_cashflow">Monthly Cashflow</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- User Management Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            User Mangement
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_user_management" name="permissions[]"
                                                            value="access_user_management" {{ old('access_user_management') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_user_management">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_own_profile" name="permissions[]"
                                                            value="edit_own_profile" {{ old('edit_own_profile') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_own_profile">Own Profile</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Products Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Products
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_products" name="permissions[]"
                                                            value="access_products" {{ old('access_products') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_products">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_products" name="permissions[]"
                                                            value="show_products" {{ old('show_products') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_products">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_products" name="permissions[]"
                                                            value="create_products" {{ old('create_products') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_products">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_products" name="permissions[]"
                                                            value="edit_products" {{ old('edit_products') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_products">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_products" name="permissions[]"
                                                            value="delete_products" {{ old('delete_products') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_products">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_product_categories" name="permissions[]"
                                                            value="access_product_categories" {{ old('access_product_categories') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_product_categories">Category</label>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="print_barcodes" name="permissions[]"
                                                            value="print_barcodes" {{ old('print_barcodes') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="print_barcodes">Print Barcodes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Adjustments Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Adjustments
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_adjustments" name="permissions[]"
                                                            value="access_adjustments" {{ old('access_adjustments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_adjustments">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_adjustments" name="permissions[]"
                                                            value="create_adjustments" {{ old('create_adjustments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_adjustments">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_adjustments" name="permissions[]"
                                                            value="show_adjustments" {{ old('show_adjustments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_adjustments">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_adjustments" name="permissions[]"
                                                            value="edit_adjustments" {{ old('edit_adjustments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_adjustments">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_adjustments" name="permissions[]"
                                                            value="delete_adjustments" {{ old('delete_adjustments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_adjustments">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quotations Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Quotaions
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_quotations" name="permissions[]"
                                                            value="access_quotations" {{ old('access_quotations') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_quotations">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_quotations" name="permissions[]"
                                                            value="create_quotations" {{ old('create_quotations') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_quotations">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_quotations" name="permissions[]"
                                                            value="show_quotations" {{ old('show_quotations') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_quotations">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_quotations" name="permissions[]"
                                                            value="edit_quotations" {{ old('edit_quotations') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_quotations">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_quotations" name="permissions[]"
                                                            value="delete_quotations" {{ old('delete_quotations') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_quotations">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="send_quotation_mails" name="permissions[]"
                                                            value="send_quotation_mails" {{ old('send_quotation_mails') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="send_quotation_mails">Send Email</label>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_quotation_sales" name="permissions[]"
                                                            value="create_quotation_sales" {{ old('create_quotation_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_quotation_sales">Sale From Quotation</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Expenses Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Expenses
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_expenses" name="permissions[]"
                                                            value="access_expenses" {{ old('access_expenses') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_expenses">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_expenses" name="permissions[]"
                                                            value="create_expenses" {{ old('create_expenses') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_expenses">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_expenses" name="permissions[]"
                                                            value="edit_expenses" {{ old('edit_expenses') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_expenses">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_expenses" name="permissions[]"
                                                            value="delete_expenses" {{ old('delete_expenses') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_expenses">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_expense_categories" name="permissions[]"
                                                            value="access_expense_categories" {{ old('access_expense_categories') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_expense_categories">Category</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Customers Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Customers
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_customers" name="permissions[]"
                                                            value="access_customers" {{ old('access_customers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_customers">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_customers" name="permissions[]"
                                                            value="create_customers" {{ old('create_customers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_customers">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_customers" name="permissions[]"
                                                            value="show_customers" {{ old('show_customers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_customers">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_customers" name="permissions[]"
                                                            value="edit_customers" {{ old('edit_customers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_customers">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_customers" name="permissions[]"
                                                            value="delete_customers" {{ old('delete_customers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_customers">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Suppliers Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Suppliers
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_suppliers" name="permissions[]"
                                                            value="access_suppliers" {{ old('access_suppliers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_suppliers">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_suppliers" name="permissions[]"
                                                            value="create_suppliers" {{ old('create_suppliers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_suppliers">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_suppliers" name="permissions[]"
                                                            value="show_suppliers" {{ old('show_suppliers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_suppliers">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_suppliers" name="permissions[]"
                                                            value="edit_suppliers" {{ old('edit_suppliers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_suppliers">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_customers" name="permissions[]"
                                                            value="delete_customers" {{ old('delete_customers') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_customers">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sales Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Sales
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_sales" name="permissions[]"
                                                            value="access_sales" {{ old('access_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_sales">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_sales" name="permissions[]"
                                                            value="create_sales" {{ old('create_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_sales">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_sales" name="permissions[]"
                                                            value="show_suppliers" {{ old('show_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_sales">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_sales" name="permissions[]"
                                                            value="edit_sales" {{ old('edit_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_sales">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_sales" name="permissions[]"
                                                            value="delete_sales" {{ old('delete_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_sales">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_pos_sales" name="permissions[]"
                                                            value="create_pos_sales" {{ old('create_pos_sales') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_pos_sales">POS System</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_sale_payments" name="permissions[]"
                                                            value="access_sale_payments" {{ old('access_sale_payments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_sale_payments">Payments</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sale Returns Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Sale Returns
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_sale_returns" name="permissions[]"
                                                            value="access_sale_returns" {{ old('access_sale_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_sale_returns">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_sale_returns" name="permissions[]"
                                                            value="create_sale_returns" {{ old('create_sale_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_sale_returns">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_sale_returns" name="permissions[]"
                                                            value="show_sale_returns" {{ old('show_sale_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_sale_returns">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_sale_returns" name="permissions[]"
                                                            value="edit_sale_returns" {{ old('edit_sale_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_sale_returns">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_sale_returns" name="permissions[]"
                                                            value="delete_sale_returns" {{ old('delete_sale_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_sale_returns">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_sale_return_payments" name="permissions[]"
                                                            value="access_sale_return_payments" {{ old('access_sale_return_payments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_sale_return_payments">Payments</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Purchases Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Purchases
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_purchases" name="permissions[]"
                                                            value="access_purchases" {{ old('access_purchases') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_purchases">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_purchases" name="permissions[]"
                                                            value="create_purchases" {{ old('create_purchases') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_purchases">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_purchases" name="permissions[]"
                                                            value="show_purchases" {{ old('show_purchases') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_purchases">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_purchases" name="permissions[]"
                                                            value="edit_purchases" {{ old('edit_purchases') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_purchases">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_purchases" name="permissions[]"
                                                            value="delete_purchases" {{ old('delete_purchases') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_purchases">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_purchase_payments" name="permissions[]"
                                                            value="access_purchase_payments" {{ old('access_purchase_payments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_purchase_payments">Payments</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Purchases Returns Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Purchase Returns
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_purchase_returns" name="permissions[]"
                                                            value="access_purchase_returns" {{ old('access_purchase_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_purchase_returns">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_purchase_returns" name="permissions[]"
                                                            value="create_purchase_returns" {{ old('create_purchase_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_purchase_returns">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="show_purchase_returns" name="permissions[]"
                                                            value="show_purchase_returns" {{ old('show_purchase_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_purchase_returns">View</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_purchase_returns" name="permissions[]"
                                                            value="edit_purchase_returns" {{ old('edit_purchase_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_purchase_returns">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_purchase_returns" name="permissions[]"
                                                            value="delete_purchase_returns" {{ old('delete_purchase_returns') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_purchase_returns">Delete</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_purchase_return_payments" name="permissions[]"
                                                            value="access_purchase_return_payments" {{ old('access_purchase_return_payments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_purchase_return_payments">Payments</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Currencies Permission -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Currencies
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_currencies" name="permissions[]"
                                                            value="access_currencies" {{ old('access_currencies') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_currencies">Access</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="create_currencies" name="permissions[]"
                                                            value="create_currencies" {{ old('create_currencies') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_currencies">Create</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="edit_currencies" name="permissions[]"
                                                            value="edit_currencies" {{ old('edit_currencies') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_currencies">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="delete_currencies" name="permissions[]"
                                                            value="delete_currencies" {{ old('delete_currencies') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_currencies">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reports -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Reports
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_reports" name="permissions[]"
                                                            value="access_reports" {{ old('access_reports') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_reports">Access</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Settings -->
                                <div class="lg:w-1/3 pr-4 pl-4 md:w-1/2 pr-4 pl-4 mb-3">
                                    <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 h-full border-0 shadow">
                                        <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                                            Settings
                                        </div>
                                        <div class="flex-auto p-6">
                                            <div class="flex flex-wrap ">
                                                <div class="w-1/2">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                            id="access_settings" name="permissions[]"
                                                            value="access_settings" {{ old('access_settings') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_settings">Access</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@push('page_scripts')
    <script>
        $(document).ready(function() {
            $('#select-all').click(function() {
                var checked = this.checked;
                $('input[type="checkbox"]').each(function() {
                    this.checked = checked;
                });
            })
        });
    </script>
@endpush
</x-app-layout>
