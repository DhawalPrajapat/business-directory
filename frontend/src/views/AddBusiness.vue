<template>
  <div class="container my-5">
    <h2 class="mb-4">Add Your Business</h2>
    <form @submit.prevent="submitBusiness">
      <div class="mb-3">
        <label class="form-label">Business Name</label>
        <input v-model="name" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Category</label>
        <select v-model="category" class="form-control" required>
          <option value="">Select Category</option>
          <option value="tech">Technology</option>
          <option value="food">Food</option>
          <option value="health">Health</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea v-model="description" class="form-control" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Contact</label>
        <input v-model="contact" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  name: 'AddBusiness',
  data() {
    return {
      name: '',
      category: '',
      description: '',
      contact: '',
      success: false
    };
  },
  methods: {
    submitBusiness() {
      axios.post('http://localhost/business-directory/backend/addBusiness.php', {
        name: this.name,
        category: this.category,
        description: this.description,
        contact: this.contact
      })
      .then(response => {
        console.log("Business submitted:", response.data);
        if (response.data.success) {
          this.success = true;
          alert("Business added successfully!");
          // Optionally, clear the form
          this.name = this.category = this.description = this.contact = '';

          // this.$router.push('/');
        } else {
          alert("Failed to add business.");
        }
      })
      .catch(error => {
        console.error("Error submitting business:", error);
      });
    }
  }
};
</script>
