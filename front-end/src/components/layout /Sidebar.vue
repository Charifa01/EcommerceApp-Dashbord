<script setup lang="js">
import { reactive, ref } from 'vue';
import { HomeIcon } from '@heroicons/vue/24/outline';
import {ClipboardIcon} from '@heroicons/vue/24/outline';
import {CubeIcon }from '@heroicons/vue/24/outline';
import {TagIcon }from '@heroicons/vue/24/outline';
import {UserCircleIcon} from '@heroicons/vue/24/outline';
import {UserGroupIcon} from '@heroicons/vue/24/outline';

//bg-[url(/img/line-pattern.svg)]
const menu = ref([
    { name: "Home", icon : HomeIcon },
    { name: "Orders", icon : ClipboardIcon  },
    { name: "Products", icon : CubeIcon   },
    { name: "Categories",icon : TagIcon },
    { name: "Custumers", icon : UserCircleIcon },
    { name: "Profile", icon : UserGroupIcon   },
  ]);
</script>
<template>
        <aside class="flex w-1/6 flex-col px-4 pt-10 pb-6 bg-white">
      <a
        href="#"
        class="flex justify-center items-center gap-x-4 text-2xl font-medium text-black focus:outline-none"
      >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
        </svg>
        <span>Dashboard</span>
      </a>
      <ul class="flex flex-1 flex-col gap-y-4 pt-10">
        <li class="item py-4 rounded-lg " v-for="(item, index) in menu" :key="index">
          <a
            href="#"
            class="flex justify-center items-center gap-x-4 text-gray-400 hover:font-medium hover:text-white focus:font-medium focus:text-white focus:outline-none"
          > 
          <Component :is="item.icon" class="h-6 w-6 stroke-current" />
            <span>{{ item.name }}</span>
          </a>
        </li>
      </ul>
     
    </aside>
   
    
</template>
<style scoped>
.item:hover,
.item:hover a{
    background: #623ce8;
    color : #eee
}
</style>