<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue'
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    clients:Object
})

</script>

<template>
     <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Clients</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap"  >
                <!-- <ProductCard v-for="product in props.products" :product="product" :key="product.id"/> -->
                <!-- <SupplierCard v-for="supplier in props.suppliers" :supplier="supplier" :key="supplier.id"/> -->
                <ClientCard v-for="client in props.clients" :client="client" :key="client.id"></ClientCard>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
