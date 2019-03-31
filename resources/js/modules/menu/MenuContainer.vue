<template>
  <div class="wrapper menu__container">
    <div class="row">
      <div class="col-md-8">
        <card-component>
          <template slot="title">My menu items</template>
          <template slot="body">content will come here</template>
        </card-component>
      </div>

      <div class="col-md-4">
        <card-component>
          <template slot="title">Add menu items</template>
          <template slot="body">form will come here</template>
        </card-component>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  
}
</script>
