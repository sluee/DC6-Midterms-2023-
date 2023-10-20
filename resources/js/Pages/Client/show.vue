<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
    import {Head, router, useForm} from '@inertiajs/vue3'
    import moment from 'moment'
    import DangerButton from '@/Components/DangerButton.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue'

    const props = defineProps({
        client:Object,
        total:String

    })

    let deleteForm =useForm({});

    function formattedDate(date){
        return moment(date).format('MMMM   D, YYYY');
    }

    function remove(client){
        deleteForm.delete('/clients/'+props.client.id)
    }
    function edit(){
        router.visit('/clients/edit/'+props.client.id)
    }


</script>

<template>
    <Head title="View Client"/>

   <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl  leading-tight">Viewing {{ client.last_name }} , {{ client.first_name }} </h2>
        </template>

        <div class="py-12">
            <div class="flex -mx-2">
                <div class="w-1/3 ml-2 ">
                    <div class=" pr-6">

                        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 ">
                            <div class="bg-blue-200  shadow-lg sm:rounded-lg">
                                <div class="p-6 text-gray-900 flex">

                                    <div class="flex-1 ml-4 bg-">
                                        <div class="flex">
                                            <h3 class="text-2xl flex-1 ">Client's Detail</h3>

                                        </div>
                                        <hr>
                                        <div class="mt-2" ><strong>Name:</strong>  {{ client.last_name }}, {{ client.first_name }}  </div>
                                        <div class="mt-2" ><strong>Address: </strong>  {{client.address }} </div>
                                        <div class="mt-2"><strong>Phone: </strong> {{ client.phone }}</div>
                                        <div class="mt-2"><strong>Credit Limit: </strong> {{ client.credit_limit }}</div>
                                        <div class="flex  justify-between mr-4  mt-3 mb-2">
                                            <DangerButton @click="remove(client)">
                                                Delete Client
                                            </DangerButton>
                                            <PrimaryButton @click="edit()">Edit Client</PrimaryButton>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                  </div>
                  <div class="w-3/4 ">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="flex">
                                <h3 class="text-2xl flex-1 dark:text-black py-3 px-3">Client's Transaction</h3>

                            </div>
                            <table class="min-w-max w-full table-auto px-3 py-3">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Id</th>
                                        <th class="py-3 px-6 text-left">Date of Purchase</th>
                                        <th class="py-3 px-6 text-left">Payment</th>
                                        <th class="py-3 px-6 text-left"> Total </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light" v-for="sales in client.sales" :key="sales.id"  >

                                    <tr class="border-b border-gray-200 hover:bg-gray-100" >
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">

                                                <p class="font-medium">{{ sales.id }}</p>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">

                                                <p class="font-medium">{{ formattedDate(sales.date) }}</p>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <p class="font-medium">
                                                    {{ sales.is_credit === 0 ? 'Credit' : 'Cash' }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <p class="font-medium">₱ {{ sales.total  }}</p>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                            <!-- <Pagination :links="salesItems.links" class="mt-6 flex justify-center"/> -->
                        </div>
                    </div>
                  </div>
            </div>
        </div>
   </AuthenticatedLayout>
</template>
