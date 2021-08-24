<div>
    <div class="pb-5">
        <div class="flex items-center justify-between">
            <h3 class="text-lg leading-6 font-medium text-gray-900 flex items-center">
                <a href="#"
                   class="p-3 bg-gray-200 border-2 rounded-md  border-gray-400 cursor-pointer hover:bg-gray-300 ">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <span class="ml-4">Add Customer Profile</span>
            </h3>
        </div>
    </div>
    <form wire:submit.prevent="save">
        <div class="shadow  rounded-md overflow-hidden ">
            <div class="bg-white space-y-6  rounded-t-md">
                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    @include('include.errors')
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="customer_name"
                                   class="block text-sm font-medium text-gray-700">Customer Name</label>
                            <input type="text" autocomplete="off"
                                   id="customer_name" wire:model.defer="customer.name"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="business_name"
                                   class="block text-sm font-medium text-gray-700">Business Name</label>
                            <input type="text" autocomplete="off"
                                   id="business_name" wire:model.defer="customer.company"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="contact_number"
                                   class="block text-sm font-medium text-gray-700">Contact Number</label>
                            <input type="text" autocomplete="off"
                                   id="contact_number" wire:model.defer="customer.contact"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="email"
                                   class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email"
                                   autocomplete="off" wire:model.defer="customer.email"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="location"
                                   class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" id="location"
                                   autocomplete="off" wire:model.defer="customer.location"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="address"
                                   class="block text-sm font-medium text-gray-700">Address Line</label>
                            <input type="text" id="address"
                                   autocomplete="off" wire:model.defer="customer.address"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <label for="remarks"
                                   class="block text-sm font-medium text-gray-700">Remarks</label>
                            <input type="text" id="remarks"
                                   autocomplete="off" wire:model.defer="customer.remarks"
                                   class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                            <div>
                                <label for="Location" class="block text-sm font-medium text-gray-700">Status</label>
                                <select id="Location" wire:model.defer="customer.current_status"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    <option selected>--Choose--</option>
                                    <option>Talk in Process</option>
                                    <option>On-board</option>
                                    <option>Dropped</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-6">
                            <fieldset class="space-y-5">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="referral" aria-describedby="comments-description" name="comments"
                                               type="checkbox" wire:model="customer.is_referred"
                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="referral" class="font-medium text-gray-700">Add Referral</label>
                                        <p id="comments-description" class="text-gray-500">Get to know about how your
                                            business grows.</p>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        @if($customer['is_referred'])
                            <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                                <label for="referral_contact"
                                       class="block text-sm font-medium text-gray-700">Referral Contact Number</label>
                                <input type="text" id="referral_contact"
                                       autocomplete="off" wire:model.defer="customer.referral_contact"
                                       class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                                <label for="referral_address"
                                       class="block text-sm font-medium text-gray-700">Referral Address</label>
                                <input type="text" id="referral_address"
                                       autocomplete="off" wire:model.defer="customer.referral_address"
                                       class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-2 lg:col-span-2">
                                <label for="referral_details"
                                       class="block text-sm font-medium text-gray-700">Referral Details</label>
                                <input type="text" id="referral_details"
                                       autocomplete="off" wire:model.defer="customer.referral_details"
                                       class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <div wire:loading wire:target="save">
                        Saving...
                    </div>
                    <div wire:loading.remove wire:target="save">
                        Save
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
