<template>
    <div>
        <p>
            <router-link :to="{ name: 'note' }"></router-link>
            <router-link :to="{ name: 'create' }"></router-link>
        </p>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
