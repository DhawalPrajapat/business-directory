<template>
  <div>
    <Header />
    <SearchBar  @filter-changed="applyFilter" />
    <FeaturedBusinesses  :filters="filters" />
    <RegisterCTA />
    <FooterSection />
  </div>
</template>

<script>
import Header from '../components/Header.vue';
import SearchBar from '../components/SearchBar.vue';
import FeaturedBusinesses from '../components/FeaturedBusinesses.vue';
import RegisterCTA from '../components/RegisterCTA.vue';
import FooterSection from '../components/Footer.vue';

export default {
  name: 'Home',
  components: {
    Header,
    SearchBar,
    FeaturedBusinesses,
    RegisterCTA,
    FooterSection
  },
  data() {
    return {
      filters: {
        searchTerm: '',
        category: ''
      }
    };
  },
  methods: {
    applyFilter(newFilters) {
      this.filters = newFilters;
    }
  }
};
</script>