<template>
  <div class="container my-4">
    <div class="row g-2">
      <div class="col-md-6">
        <input type="text" v-model="searchTerm" placeholder="Search businesses..." class="flex-1 p-2 border rounded" @input="emitFilter" />
      </div>
      <div class="col-md-6">
        <select v-model="category" class="p-2 border rounded float-end" @change="emitFilter">
          <option value="">All Categories</option>
          <option value="tech">Technology</option>
          <option value="food">Food</option>
          <option value="health">Health</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SearchBar',
  data() {
    return {
      searchTerm: '',
      category: ''
    };
  },
  methods: {
    emitFilter() {
      this.$emit('filter-changed', {
        searchTerm: this.searchTerm,
        category: this.category
      });
    }
  }
};
</script>
