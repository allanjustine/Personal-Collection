<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import ToogledNav from '@/Components/ToogledNav.vue'
    import { ref } from 'vue';

    let width = ref('w-[250px]')
    let hidden = ref("")
    let size = ref('w-[50px] h-[50px]')

    function toggleWidth() {
        if(width.value == 'w-[250px]') {
            width.value = 'w-[80px]'
            size.value = 'w-[29px] h-[29px]'
            hidden.value = "hidden"
        }else {
            width.value = ['w-[250px]']
            size.value = 'w-[50px] h-[50px]'
            hidden.value = ""
        }
    }
</script>

<template>

<div class="flex min-h-screen">
    <div id="sidebar" class="bg-pink-900 p-6 duration-500" :class="width" style="position: relative;">
        <button class="text-xl text-pink-600" @click="toggleWidth" style="position: absolute; right: -25px; top:10px">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div id="branding" class="flex justify-between">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxsB-zYkCr0ryubv8Rbn6o3BEJqXPiy025cQe1Ojc8UQ&s" alt="Logo"
                class="w-[50px] h-[50px] mx-auto rounded-full object-cover" :class="size">
            <h1 class="text-lg text-center text-pink-200 my-2 mr-5" :class="hidden">Personal Collection</h1>

        </div>
        <hr class="border-pink-600 my-3">

        <MainNav :class="hidden"></MainNav>
        <ToogledNav :class="{'hidden' : !hidden}"></ToogledNav>
    </div>
    <div id="container" class="flex-1">
        <slot />
    </div>
</div>

</template>
