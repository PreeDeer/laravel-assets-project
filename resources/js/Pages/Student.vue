<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="หน้าหลัก">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                สำหรับนักศึกษา
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                    <h1 class="font-bold text-gray-800">การยืม-คืน ครุภัณฑ์</h1>
                    <h1 class="font-bold text-gray-800">ตรวจสอบหนี้สิน</h1>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
