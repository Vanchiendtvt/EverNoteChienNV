<template>
    <div>
        <div v-for="note in notes " :key="note.id">
            <h3>{{note.title}}</h3>
            <p>{{note.body}}</p>
        </div>
    </div>
</template>
<script>
export default {
    props:['notes'],
    methods: {
        async ready(){
            const {data} = window.axios.get('/EverNote');
        }
    },
}
</script>