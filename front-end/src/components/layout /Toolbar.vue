<script setup>
import { Search } from '@element-plus/icons-vue';
import { ref } from 'vue';

const input = ref('');
</script>
<template>
    <div class="flex gap-4 mb-4">
        <!-- <el-input v-model="input" style="width: 240px" placeholder="Please input" /> -->
   
    <el-input
      v-model="input"
      style="width: 240px; height: 40px"
      placeholder="Type something"
      :prefix-icon="Search"
      class=" bg-white rounded-full text-black"
    />
    <el-button @click="show = !show">Click Me</el-button>
  </div>
</template>