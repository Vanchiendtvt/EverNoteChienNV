<template>
  <div>
    <modal name="create-note" height="auto">
      <span @click="hide">
        <i class="fas fa-times close-create-note"></i>
      </span>
      <form method="post">
        <div class="form-group pl-4 pr-4">
          <label for="title" class="font-weight-bold">Note Title</label>
          <input id="title" name="title" type="text" class="form-control" v-model="notes.title" />
        </div>
        <div class="form-group pl-4 pr-4">
          <label for="body" class="font-weight-bold">Note Contents</label>
          <textarea
            class="form-control"
            name="body"
            id="body"
            cols="10"
            rows="10"
            v-model="notes.body"
          ></textarea>
        </div>
        <div class="form-group text-center">
          <button class="btn btn-outline-primary" @click.prevent="saveNote">Create Note</button>
        </div>
      </form>
    </modal>
  </div>
</template>
<script>
export default {
  data() {
    return {
      notes: [],
      user_id: window.Auth.user.id
    };
  },

  methods: {
    saveNote() {
      axios
        .post("/api/notes", {
          title: this.notes.title,
          body: this.notes.body,
          user_id: this.user_id
        })
        .then(response => {
          console.log(response.data.body);
          console.log(response.data.title);
          this.notes.push(response.data);
          this.title = "";
          this.body = "";
          this.$emit("created", response.data);
          this.$modal.hide("create-note");
        })
        .catch(error => {
          console.log(error);
        });
    },
    hide() {
      this.$modal.hide("create-note");
    }
  }
};
</script>
<style scope>
.close-create-note {
  position: relative;
  left: 580px;
}
</style>
