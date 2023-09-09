<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>

<div class="toogled-nav">
    <Link href="/">
        <i class="fa fa-home"></i><span></span></Link>
    <Link href="personal-collection">
        <i class="fa fa-cart-shopping"></i><span></span></Link>
    <Link href="#">
        <i class="fa fa-question"></i><span></span></Link>
    <Link href="#">
        <i class="fa-solid fa-cart-shopping"></i><span></span></Link>
    <Link href="#">
        <i class="fa-regular fa-images"></i><span></span></Link>
    <Link href="#">
        <i class="fa-solid fa-phone-volume"></i><span></span></Link>
</div>

</template>
