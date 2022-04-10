<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template class="
    bg-gray-800
    pt-16
    h-screen
    px-72
">
<header>
    <div class="h-2/3 flex flex-wrap content-between border-gray-600 pb-36">
        <p class="
            border-b-2
            font-bold
            border-gray-400
            pb-3
            text-2xl
            text-gray-300
            uppercase
        ">
        Hi! This is Claudio.
        I'm a software engineer
        and I would like work with you.</p>
    </div>
</header>

<section class="bg-gray-200
text-gray-800 px-72 py10 h-screen">
    <h2 text-xl font-bold pt-3>Skills</h2>
</section>

<section class="bg-gray-600
text-gray-200 px-72 py10 h-screen">
    <h2 text-xl font-bold pt-3>Projects</h2>
</section>

<footer class="
    flex
    justify-between
    py-10
    px-72
    bg-gray-800
    text-gray-300
    text-xl
">
    <p>&copy;Claudio Polo.All rights reserved.</p>
    <div class="flex justify-evenly items-center">
        Github
        Twitter
        Linkedin
    </div>
</footer>
</template>
