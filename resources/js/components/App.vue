<script setup>
    // import { useRouter } from 'vue-router';

    // const router = useRouter();

    // function goToDashboard() {
    //     router.push({ name: 'tes' });
    // }
</script>
<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <ul>
                        <li>
                            <router-link to="/" class="nav-item nav-link">Welcome</router-link>
                        </li>
                        <li>
                            <router-link :to="{name: 'tes'}" class="nav-item nav-link">Post</router-link>
                        </li>
                    </ul>
                    <br>
                </div>
                <!-- <button @click="goToDashboard">GO</button> -->
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>

