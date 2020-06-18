<template>
  <div>
    <model name="note" height="auto">
      <h2 v-html="title"></h2>
      <div v-html="body"></div>
    </model>
  </div>
</template>
<script>
export default {
  prop: ["note"],
  data() {
    return {
      title: this.note.title,
      body: this.note.body
    };
  },
  methods: {
    deleteNote(index) {
      axios.delete(`api/notes/${this.id}`).then(response => {
        this.$emit(deleted);
        console.log("delete success");
      });
    }
  }
};
</script>