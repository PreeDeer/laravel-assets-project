<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>     
    <AppLayout title="หน้าหลัก">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                หน้าหลัก
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-screen p-8">
                    <h1 class="font-bold text-gray-800">กรุณาเลือกการทำรายการ</h1>
                    <img src="/img/loginIMG.png" alt="logo">
                </div>
            </div>
        </div>
    </AppLayout>
</template>
