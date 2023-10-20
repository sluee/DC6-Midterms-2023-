<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import {Head} from '@inertiajs/vue3'
</script>

<template>
    <Head title="Create Sales" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Create Sales</h2>
        </template>

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <!-- component -->
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-brand">
                            Date
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-brand" type="date" >
                            <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-name">
                            Client
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-name" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-2">

                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-category">
                            Payment
                            </label>
                            <div class="relative">
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-category">
                                <option>Cash</option>
                                <option>Bank Transfer</option>
                                <option>Check</option>
                            </select>
                            </div>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-category">
                            Product
                            </label>
                            <div class="relative">
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-category">
                                <option>SmartPhone</option>
                                <option>Bag</option>
                                <option>ElectricFan</option>
                            </select>
                            </div>
                        </div>

                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-retail-price">
                            Retail Price
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-retail-price" type="text" placeholder="Apple">
                            <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-qty-stocks">
                            Quantity Stock
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-qty-stocks" type="text" placeholder="">
                        </div>
                    </div>

                    <button class="px-2 py-2 mt-2 bg-blue-400 w-full rounded border border-blue-600 shadow hover:bg-blue-500">
                        Create Product
                    </button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
