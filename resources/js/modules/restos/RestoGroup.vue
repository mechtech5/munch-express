<template>
  <div class="resto-group__wrapper mb-5">
    <div class="row">
      <div class="col-md-4 mb-4" v-for="resto in localRestos" :key="resto.id">
        <card-component>
          <template slot="title">{{resto.name}}</template>
          <template slot="body">
            {{resto.location}} <br>
            <a v-bind:href="resto.slug" class="card-link">Menu</a>
          </template>
        </card-component>
      </div>
      <div class="col-md-4" v-if="showAddForm">
        <card-component>
          <template slot="title">Add new Restaurant</template>
          <template slot="body">
            <span @click="handleAddNewResto">+</span>
          </template>
        </card-component>
        <modal name="add-new-resto" height="60%">
          <div class="container-padding">
            <resto-add-form
                @addRestoEvent="handleSaveResto" 
                @modalCancel="handleCancelResto"
              >
            </resto-add-form>
          </div>
        </modal>
      </div>
    </div>
  </div>
</template>

<script>
import RestoAddForm from './RestoAddForm.vue';
import axios from 'axios';
export default {
  components: {
    RestoAddForm
  },
  props: ['restos'],
  created() {
    console.log('this.restos.length', this.restos.length);
    this.localRestos = this.restos;
  },
  computed: {
    showAddForm() {
      return (this.localRestos.length < 5) ? true : false;
    }
  },
  data() {
    return {
      localRestos: []
    }
  },
  methods: {
    handleAddNewResto() {
      this.$modal.show('add-new-resto');
    },
    handleCancelResto() {
      this.$modal.hide('add-new-resto');
    },
    handleSaveResto(restoData) {
      axios.post('/api/resto', restoData).then(response => {
        this.localRestos.unshift(response.data);
      });
      this.$modal.hide('add-new-resto');
    }
  }
}
</script>