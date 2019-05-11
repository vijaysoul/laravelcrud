<template>
  <div>
      <h1>Stocks</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Post</router-link>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.id }}</td>
                    <td>{{ post.pname }}</td>
                    <td>{{ post.des }}</td>
                     <td>{{ post.qty }}</td>
                      <td>{{ post.rate }}</td>
                       <td>{{ post.rate + post.qty}}</td>
                    <td><router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></span></router-link>
                   <button class="btn btn-danger glyphicon glyphicon-trash" @click = "deletePost(post.id)"></button>
                   </td>
               <!-- <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></router-link>
                         <a href="#" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span></a> -->
              </tr> 
            </tbody>
        </table>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          posts: []
        }
      },
      created() {
      let uri = '/api/posts';
      this.axios.get(uri).then(response => {
        this.posts = response.data;
      });
  
    },
    methods: {
      deletePost(id)
      {
        let uri = `/api/post/delete/${id}`;
        this.axios.delete(uri).then(response => {
          this.posts.splice(this.posts.indexOf(id), 1);
        });
      }
    }
  }
</script>
