<template>
    <AppLayout title="หน้าหลัก">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                สำหรับเจ้าหน้าที่
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                    <h1 class="font-bold text-gray-800">จัดการทรัพย์สิน</h1>

                    <!-- TABLE -->
                    <table class="table-auto w-full my-3.5">
                        <thead class="bg-sky-500 text-white text-sm leading-wide">
                            <tr class="text-center">
                                <th scope="col" class="px-2 py-3 border-r-2 border-white">ID</th>
                                <th scope="col" class="px-6 py-3 border-r-2 border-white">ชื่อนักศึกษา</th>
                                <th scope="col" class="px-6 py-3 border-r-2 border-white">หมายเลขคำร้อง</th>
                                <th scope="col" class="px-6 py-3 border-r-2 border-white">รหัสนักศึกษา</th>
                                <th scope="col" class="px-6 py-3 border-r-2 border-white">คำอธิบาย</th>
                                <th scope="col" class="px-6 py-3 border-r-2 border-white">วันที่ยืม</th>
                                <th scope="col" class="px-6 py-3 " >สถานะ</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-center bg-slate-100 border-b border-white">
                            <tr v-for="x in assets" class="whitespace-nowrap">
                                <td class="px-1 py-2.5">{{ x.id }}</td>
                                <td class="px-4 py-2.5">{{ x.name }}</td>
                                <td class="px-4 py-2.5">{{ x.no_req }}</td>
                                <td class="px-4 py-2.5">{{ x.student_id }}</td>
                                <td class="px-4 py-2.5">{{ x.description }}</td>
                                <td class="px-4 py-2.5">{{ x.borrow_date }}</td>
                                <td class="px-4 py-2.5">{{ x.status }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- USER MANAGEMENT -->
                    <h1 class="font-bold text-gray-800">จัดการผู้ใช้งาน</h1>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import axios from 'axios';
import { onMounted, ref } from 'vue';

const assets = ref([]);
onMounted(() => {
    axios.get('/api/asset').then((response) => {
        assets.value = response.data;
    });

    console.log(assets.value);
})

</script>
