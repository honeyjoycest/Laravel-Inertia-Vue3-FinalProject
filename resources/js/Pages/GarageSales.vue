
<template>
    <h1>Garage Sales</h1>
    <hr>
<div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="cloth in clothes" :key="cloth.id">
        <div class="card-header bg-info">
            <h4>{{cloth.brand}}</h4>
        </div>
        <div class="card-body">
            <li>{{cloth.color}}</li>
            <li>{{cloth.details}}</li>

        </div>
    </div>
</div>
</template>
<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        clothes: Array
    }
}
</script>

<style scoped>
.card {
    width: 375%;
}
</style>


