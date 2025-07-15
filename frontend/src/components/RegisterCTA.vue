<template>
  <div class="bg-warning py-5 text-center">
    <h2 class="fw-bold mb-3 text-secondary">Own a Business?</h2>
    <p class="lead mb-4 text-secondary">Register now and reach more customers!</p>
    <router-link to="/add-business">
      <button class="btn btn-primary px-4 py-2">Register Your Business</button>
    </router-link>
  </div>
</template>

<script>
export default {
  name: 'RegisterCTA'
};
</script>