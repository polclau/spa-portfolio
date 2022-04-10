<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { defineComponent } from '@vue/runtime-core';
import JetApplicationMark  from '@/Jetstream/ApplicationMark'
import Section from '@/Components/Section'

export default defineComponent({
    components: {
        Head,
        Link,
        JetApplicationMark,
        Section,

    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    }
    })
</script>

<template>
    <Head title="welcome"/>
    <div class="
grid
grid-cols-2
text-right
bg-gray-800
text-gray-300
">
    <div>
        <jet-application-mark class="h-12 w-auto"></jet-application-mark>
    </div>
    <div v-if="canLogin">
        <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm-underline">
        Dashboard
        </Link>

    <template v-else>
        <Link :href="route('login')" class="text-base underline">
        Log in
        </Link>

        <Link v-if="canRegister" :href="route('register')" class="text-base underline place-self-end ml-4">
        Register
        </Link>
    </template>
        </div>
    </div>
<Section>
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
</Section>

<Section class="bg-gray-200
text-gray-800 h-screen">
    <h2 text-xl font-bold pt-3>Skills</h2>
</Section>

<Section class="bg-gray-600
text-gray-200  h-screen">
    <h2 text-xl font-bold pt-3>Projects</h2>
</Section>

<Section class="
    flex
    justify-between
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
</Section>
</template>
