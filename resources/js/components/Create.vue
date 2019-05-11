<template>
  <div>
    <div class="col-sm-4">
     <h2>Add Stock</h2>
  <form @submit.prevent="addPost">

    <div class="form-group" >
      <input type="number" class="form-control" id="id" placeholder="Invoice ID" name="id"   v-model="post.id">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Product Name" name="name" v-model="post.name" >
    </div>
     <div class="form-group">
      <input type="text" class="form-control" id="brand" placeholder="Brand ID" name="brand" v-model="post.brand" >
    </div>
    
     <div class="form-group">
      <input type="text" class="form-control" id="des" placeholder="Description" name="des" v-model="post.des">
    </div>
         <div class="form-group">
      <input type="text" class="form-control" id="qty" placeholder="Quantity" name="qty" v-model="post.qty">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="price" placeholder="Price" name="price" v-model="post.price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

  </div>
</template>

<script>
    export default {
        data(){
        return {
          post:{},
          lastid:{}
        }
    },
     created() {
      let uri = '/api/lastid';
      this.axios.get(uri).then(response => {
        this.lastid = response.data;
      });
     },
    methods: {
      addPost(){
        let uri = '/api/post/create';
        this.axios.post(uri, this.post).then((response) => {
          this.$router.push({name: 'posts'});
        });
      }
    }
  }
</script>
