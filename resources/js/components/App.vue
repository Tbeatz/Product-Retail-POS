<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Welcome</router-link>
                    <br>
                    <router-link :to="{name: 'tes'}" class="nav-item nav-link">Test</router-link>
                </div>
                <button @click="goToDashboard">GO</button>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>

<script setup>
    import { useRouter } from 'vue-router';

    const router = useRouter();

    function goToDashboard() {
        router.push({ name: 'tes' });
    }
</script>
