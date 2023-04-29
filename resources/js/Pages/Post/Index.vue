<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

import { ref, onMounted } from 'vue';
import PostForm from '@/Components/PostForm.vue';

const posts = ref([]);

onMounted(async () => {
    const response = await fetch('http://localhost:8000/api/posts');
    posts.value = await response.json();
});
</script>

<template>
    <AppLayout title="หน้าหลัก">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                โพสต์
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                    <h1 class="font-bold text-gray-800">สร้างโพสต์ใหม่</h1>
                    <PostForm />
                    <h1 class="font-bold text-gray-800">โพสต์ทั้งหมด</h1>
                    <details v-for="x in posts.posts">
                        <summary class="text-indigo-700 cursor-pointer">{{ x.title }}</summary>
                        <p>{{ x.body }}</p>
                    </details>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
