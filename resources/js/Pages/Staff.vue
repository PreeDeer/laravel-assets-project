<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="หน้าหลัก">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                สำหรับเจ้าหน้าที่
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-screen p-8">
                    <h1 class="font-bold text-gray-800">จัดการทรัพย์สิน</h1>
                    <h1 class="font-bold text-gray-800">จัดการผู้ใช้งาน</h1>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
