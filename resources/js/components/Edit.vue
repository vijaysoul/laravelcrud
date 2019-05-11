<template>
  <div>
        <div class="col-sm-4">
    <h1>Edit Post</h1>
    <form  @submit.prevent="updatePost">
     <div class="form-group" >
      <input type="number" class="form-control"  placeholder="Invoice ID"  v-model="post.id">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Product Name"  v-model="post.pname" >
    </div>
     <div class="form-group">
      <input type="text" class="form-control" placeholder="Brand ID" v-model="post.bid" >
    </div>
    
     <div class="form-group">
      <input type="text" class="form-control" placeholder="Description" v-model="post.des">
    </div>
         <div class="form-group">
      <input type="text" class="form-control" placeholder="Quantity" v-model="post.qty">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Price" v-model="post.rate">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
</template>

<script>
    export default {

      data() {
        return {
          post: {}
        }
      },
      created() {
        let uri = `/api/post/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.post = response.data;
        });
      },
      methods: {
        updatePost() {
          let uri = `/api/post/update/${this.$route.params.id}`;
          this.axios.post(uri, this.post).then((response) => {
            this.$router.push({name: 'posts'});
          });
        }
      }
    }
</script>
