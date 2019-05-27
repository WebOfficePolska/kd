
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue';

Vue.use(BootstrapVue);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('blog-post', 
    require('./components/BlogPostComponent.vue').default, 
    {
        props: ['title', 'post_id']
    }
    
)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',

    mounted: function () {
    	console.log("mounted...");
    },

    computed: {
      customerName() {
        return this.customer_name.length > 2 ? true : false
      }
    },

    data: {
    	stones: [],
    	percent: 0,
    	message: " ",    	
    	project_file: null,
    },

    methods: {

    	uploadFile: function(){
    		var _this = this;
    		var elmnt = document.getElementById("project_file");
    		console.log(elmnt.files[0]);
    		var fd = new FormData();

    		fd.append("project_file", elmnt.files[0], elmnt.files[0].name);

    		axios.post("/api/zamowienie/zapisz", 
    			fd,	
    			{	headers: {
        				'Content-Type': 'multipart/form-data'
    				},
    				onUploadProgress: function(progressEvent){
     					_this.percent = parseInt( Math.round( ( progressEvent.loaded * 100 ) / progressEvent.total ) ); 						
    				},    				
    			},

    		)
    		.then ( function(res) {    				
    				_this.project_file = res.data.project_file;	
    			}.bind(this))
    		.catch ( function(e){
    			    _this.message = "Wystąpił błąd.";	
    				console.log(e);
    		});
    	},	

    },
});



const vm = new Vue({
  el: '#post',

  filters: {
        moment: function (date) {
            return moment(date).format('YYYY/MM/DD HH:mm');
        }
    },
  
  data: {
        posts: []

  },
  
  created() {
    axios.get("http://z-warszawy.pl//wp-json/wp/v2/posts?_embed")
    .then(response => {this.posts = response.data;})
    .catch( error => {
      window.alert( error );
    } );
  }
});



const pc = new Vue({
  el: '#post-content',

  data: {
        post_id:  document.getElementById('post_id').value,
        post: []
  },
  
  created() {
    axios.get("http://z-warszawy.pl/wp-json/wp/v2/posts/"+this.post_id+"?_embed")
    .then(response => {this.post = response.data;})
    .catch( error => {
      window.alert( error );
    } );
  }
});






$(function () {

	$('[data-toggle="tooltip"]').tooltip()


	$('#stone_name').change(function(e){

	        var stone_id = $(this).val();

	    	$('#stone_type').empty();
	    	$("#stone_type").append('<option value="">Wybierz...</option>');

	        $.get({
	            url: "/api/stone/show/" + stone_id
	        }).done(function(response) {

	        	$.each(response, function(key, data){

						$("#stone_type").append('<option value="' + data.stone_type + '">' + data.stone_type + '</option>');

	        	});

	        });

	});


})
