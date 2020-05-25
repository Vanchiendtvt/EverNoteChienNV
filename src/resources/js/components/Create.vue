<template>
     <form action="/notes" method="POST" >
        <div class="form-group">
            <label for="titlenote">Note Title</label>
            <input name="title" type="text" class="form-control" id="titlenote" aria-describedby="title for note" placeholder="Enter your title" v-model="title">
            </div>
            <div class="form-group">
            <label for="bodynote">Content for Note</label>
            <textarea id="bodynote" name="body" class="description" v-model="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</template>
<script>
export default {
    data() {
        return {
            title:'',
            body:''
        }
    },
    
}
</script>