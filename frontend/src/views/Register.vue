<template>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-4">Register</h2>
        <form @submit.prevent="handleRegister">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input v-model="name" type="text" class="form-control" placeholder="Enter your name" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input v-model="email" type="email" class="form-control" placeholder="Enter your email" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input v-model="password" type="password" class="form-control" placeholder="Enter your password" required />
          </div>
          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Register',
  data() {
    return {
      name: '',
      email: '',
      password: ''
    };
  },
  methods: {
    handleRegister() {
      // For now just redirect, you can later add real registration logic
      alert('Registration successful!');
      this.$router.push('/');
    }
  }
};
</script>
