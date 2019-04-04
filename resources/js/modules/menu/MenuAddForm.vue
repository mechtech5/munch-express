<template>
  <div class="add_form__wrapper">
    <form v-on:submit.prevent="handleSubmit">
      <div class="form-group">
        <label for="name">Food item</label>
        <input type="text" class="form-control" placeholder="enter food item name" v-model="food.item">
      </div>

      <div class="form-group">
        <label for="name">Select category</label>
        <multiselect
          v-model="food.category"
          :options="categories"
          ></multiselect>
      </div>

      <div class="form-group">
        <label for="name">Price</label>
        <input type="number" class="form-control" placeholder="Enter food item's price" v-model="food.price">
      </div>

      <div class="form-group">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</template>

<script>
import Multiselect from 'vue-multiselect';
export default {
  props: ['categories', 'restoId'],
  components: {
    Multiselect
  },
  data() {
    return {
      food: {
        item: '',
        category: '',
        price: 100
      }
    }
  },
  methods: {
    handleSubmit() {
      console.log('form data', this.food);
      let postData = this.food;
      postData.restoId = this.restoId;
      window.axios.post('api/item/save', postData).then(response => {
        console.log('response', response.data);
      }).catch(error => console.log('error', error.response))
    }
  }
}
</script>

