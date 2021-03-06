<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel='stylesheet' href='{{  asset ('styleAnnimation/css.css') }}'>
	<title>Document</title>
	
</head>
<body>
	



	<div class="container" id="app">
		<div class="add-product" :class="{'open': formOpen}">
		  <div class="button-copy" v-show="!formOpen" @click="formOpen = true">Add Product</div>
		  <form @submit="cancel()">
	  
			<div class="form--field">
			  <label>Product Title *</label>
			  <input type="text" class="form--element" name="title" v-model="productData.title" placeholder="Title" required="">
			</div>
			<div class="form--container -inline">
			  <div class="form--field -short">
				<label>Product Rating *</label>
				<input type="number" class="form--element" name="rating" v-model="productData.rating" placeholder="Rating" required="" min="0" max="5" step="0.5">
			  </div>
			  <div class="form--field -short">
				<label>Product Price *</label>
				<span class="form--price">$</span>
				<input type="text" class="form--element" name="price" v-model="productData.price" placeholder="Price" required="" min="0" max="500" pattern="\d+(\.\d{2})?">
			  </div>
			  <div class="form--field -short">
				<label>List Price *</label>
				<span class="form--price">$</span>
				<input type="text" class="form--element" name="list_price" v-model="productData.list_price" placeholder="List Price" required="" min="0" max="500" pattern="\d+(\.\d{2})?">
			  </div>
			</div>
			<div class="form--field">
			  <label class="emoji">
				Is Featured
				<input type="checkbox" name="is_featured" v-bind="productData.is_featured">
				<span></span>
			  </label>
			  <p class="featured-note">If Is Featured is selected the product will appear in a large card.</p>
			</div>
			<div class="form--field">
			  <label>Product Description</label>
			  <textarea class="form--element textarea" v-model="productData.description" placeholder="Description">                                
			  </textarea>
			</div>
	  
			<button type="submit" class="submit-button">Add Product</button>
			<div class="cancel"><span @click="cancel()">Cancel</span></div>
		  </form>
		</div>
	  </div>



<script type="text/javascript" > 
var vue = new Vue({
  el: '#app',
  data: {
    formOpen: false,
    productData: {
      title: '',
      rating: '',
      price: '',
      list_price: '',
      is_featured: false
    }
  },
  methods: {
    resetForm: function () {
      this.productData = {
        title: '',
        rating: '',
        price: '',
        list_price: '',
        is_featured: false
      }
    },
    cancel: function() {
      this.formOpen = false;
      this.resetForm();
    }
  }
})
</script>

</body>
</html>