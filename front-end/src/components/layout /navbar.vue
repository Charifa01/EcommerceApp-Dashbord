<script setup lang="js">
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline';
import {BellIcon} from '@heroicons/vue/24/outline';
import {ChevronDownIcon }from '@heroicons/vue/24/outline';


</script>

<template>
    <nav class="flex items-center gap-x-6 py-5 px-10 bg-white">
        <div class="flex w-4/5 items-center justify-between">
          <h1 class="text-[30px] font-bold text-black ">Overview</h1>
          <div class="flex items-center w-4/5 justify-evenly ">
            <div class="relative w-3/5">
              <span
                class="pointer-events-none absolute inset-y-0 flex items-center px-3"
              >
                <MagnifyingGlassIcon class="w-5 text-gray-400" />
              </span>
              <input
            type="text"
            placeholder="Search"
            class="search rounded-full w-full border-2 border-grey-800 py-3 pr-4 pl-10 text-sm text-black focus:outline-none"
        />
            </div>
            <button
              class="rounded-full py-3 px-10 text-sm text-white w-1/5"
              style="background-color: #623ce8;"
            >
              Search
            </button>
          </div>
        </div>
        <div class="flex w-1/5 items-center justify-end gap-4">
          <div class="flex items-center gap-x-2.5">
            <button
              class="hover relative flex h-11 w-8 items-center justify-center rounded-full text-black" 
            >
              <BellIcon class="" />
              <div class="absolute top-3 right-1 flex h-2 w-2">
                <span
                  class="absolute inline-flex h-full w-full animate-ping rounded-full bg-indigo-400 opacity-75"
                />
                <span class="inline-flex h-2 w-2 rounded-full bg-indigo-400" />
              </div>
            </button>
            
          </div>
          <button
            class="flex h-11 items-center justify-between rounded-full px-2 text-black hover:text-white"
          >
            <img class="w-10 h-10 rounded-full" src="../../assets/profil.png" alt="">
            <span class="pl-2 text-lg">Alexander</span>
            <ChevronDownIcon class="w-5 text-black ml-3" />
          </button>
        </div>
      </nav>
</template>
<style scoped>
.hover:hover{
    color : #623ce8;
}
.search:focus {
    border: 2px solid #623ce8;
  }
</style>