<script setup>
    import { ref } from 'vue';
    import axios from 'axios';

    const name = ref('');
    const email = ref('');
    const posts = ref([]);
    const add_state = ref(false);
    const errors = ref({});
    const post_id = ref('');

    async function getPost() {
        try {
            const res = await axios.get('/api/posts');
            posts.value = res.data;
        } catch (error) {
            console.error(error.response);
        }
    }
    getPost();

    function add(){
        add_state.value = !add_state.value;
    }

    async function remove(id) {
        try {
            const res = await axios.delete(`/api/posts/${id}`)
            posts.value = res.data;
        } catch (error) {
            console.error(error.response)
        }
    }

    async function save() {
        const data = {
            'name' : name.value,
            'email' : email.value,
        }
        try {
            const res = await axios.post(`/api/posts`, data);
            posts.value.push({
                name: res.data.post.name,
                email: res.data.post.email,
            });
        } catch (error) {
            errors.value = error.response.data.errors;
        }
    }

    async function edit(id) {
        add_state.value = !add_state.value;
        try {
            const res = await axios.get(`/api/posts/${id}/edit`)
            name.value = res.data.name;
            email.value = res.data.email;
            post_id.value = res.data.id;
        } catch (error) {
            console.log(error.response);
        }
    }

    async function update(id) {
        const data = {
            'name' : name.value,
            'email' : email.value,
        }
        try {
            const res = await axios.patch(`/api/posts/${id}`, data);
            posts.value = res.data;
        } catch (error) {
            console.log(error.response);
        }
    }

</script>
<template>
    <button @click="add">{{ add_state ? 'Close' : 'Add Form' }}</button>

    <form v-if="add_state" @submit.prevent="save">
        <h1>name</h1>
        <input type="text" v-model="name" />
        <p v-if="errors.name">{{ errors.name }}</p>
        <h1>email</h1>
        <input type="text" v-model="email" />
        <p v-if="errors.email">{{ errors.email }}</p>
        <button type="submit">Save</button>
        <button @click.prevent="update(post_id)">Update</button>
    </form>

    <p>{{ errors }}</p>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="post in posts" :key="post.id">
                <td>{{ post.name }}</td>
                <td>{{ post.email }}</td>
                <td>
                    <button @click="edit(post.id)">{{ add_state ? 'close' : 'edit' }}</button>
                    <button @click="remove(post.id)">x</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>


