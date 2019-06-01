/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('modal', {
    template: '#modal-template'
})
// console.log("hie!");
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#root',
    data: {
      items: [],
      showModal: false,
      hasDeleted: true,
      newItem: { 'name': '','age': '','profession': '' },
      e_name: '',
      e_age: '',
      e_id: '',
      e_profession: '',
    },
    mounted: function mounted() {
            this.getItems();
    },
    methods: {

        getItems: function getItems() {
          var _this = this;
          axios.get('/getItems').then(function (response) {
            _this.items = response.data;
          });
        },
        setVal(val_id, val_name, val_age, val_profession) {
            this.e_id = val_id;
            this.e_name = val_name;
            this.e_age = val_age;
            this.e_profession = val_profession;
         },
    	createItem: function createItem() {
    		var input = this.newItem;
            var _this = this;
    		if (input['name'] == '' || input['age'] == '' || input['profession'] == '') 
    		{
    			alert('have to fill all rows!')
    		}else{
    			axios.post('/getItems/storeItem', input).then(function (response){
                    _this.newItem = {'name': '', 'age': '', 'profession': ''}
                    _this.getItems();
    			});
    		}
    	},
        editItem: function(){
         var i_val_1 = document.getElementById('e_id');
         var n_val_1 = document.getElementById('e_name');
         var a_val_1 = document.getElementById('e_age');
         var p_val_1 = document.getElementById('e_profession');

          axios.post('/getItems/editItem' + i_val_1.value, {val_1: n_val_1.value, val_2: a_val_1.value,val_3: p_val_1.value })
            .then(response => {
              _this.getVueItems();
              _this.showModal=false
            });
          _this.hasDeleted = true;
        
        },
        deleteItem: function deleteItem(item) {
            var _this = this;
            axios.post('/getItems/deleteItem/' + item.id).then(function (response){
            _this.getItems();           
            _this.hasDeleted = false
            });
        }
    }

});
