<template>
  <div class="container my-5">
    <h2 class="mb-4 text-secondary">Featured Businesses</h2>
    <div class="row">
      <div v-for="business in filteredBusinesses" :key="business.id" class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">{{ business.name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted text-capitalize">{{ business.category }}</h6>
            <p class="card-text">{{ business.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  name: 'FeaturedBusinesses',
  props: {
    filters: {
      type: Object,
      default: () => ({ searchTerm: '', category: '' })
    }
  },
  data() {
    return {
      businesses: [],
      filteredBusinesses: []
    };
  },
  watch: {
    filters: {
      handler: 'filterBusinesses',
      immediate: true,
      deep: true
    }
  },
  mounted() {
    axios.get('http://localhost/business-directory/backend/getBusinesses.php')
      .then(res => {
        this.businesses = res.data;
        this.filterBusinesses();
      });
  },
  methods: {
    filterBusinesses() {
      const term = this.filters.searchTerm.toLowerCase();
      const category = this.filters.category;

      this.filteredBusinesses = this.businesses.filter(biz => {
        const matchesSearch = biz.name.toLowerCase().includes(term) || biz.description.toLowerCase().includes(term);
        const matchesCategory = category === '' || biz.category === category;
        return matchesSearch && matchesCategory;
      });
    }
  }
};
</script>

