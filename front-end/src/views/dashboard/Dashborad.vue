<script setup >
import Sidebar from '../../components/layout /Sidebar.vue';
import navbar from '../../components/layout /navbar.vue';
import Product from '../Product/Product.vue';

</script>

<template>
    <div class="flex min-h-screen w-full font-sans " style="background:#f5f6fa">
        <Sidebar />
        <main class="flex w-5/6 min-h-screen flex-1 flex-col rounded-l-[48px] " >
            <navbar />
            <Product />
        </main>
    </div>
    
</template>