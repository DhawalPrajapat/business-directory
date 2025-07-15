<template>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-4">Login</h2>
        <form @submit.prevent="handleLogin">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input v-model="email" type="email" class="form-control" placeholder="Enter email" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input v-model="password" type="password" class="form-control" placeholder="Password" required />
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Login',
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    handleLogin() {
      // Replace this with actual login validation logic later
      if (this.email && this.password) {
        alert('Login successful!');
        this.$router.push('/');
      } else {
        alert('Please enter email and password.');
      }
    }
  }
};
</script>
