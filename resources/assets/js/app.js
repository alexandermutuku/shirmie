
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
var _ = require('lodash');
// var Vue = require('vue');
var VueScrollTo = require('vue-scrollto');

import Vue from 'vue';
import Buefy from 'buefy';
import 'buefy/dist/buefy.css';
import 'bulma/css/bulma.css';

Vue.use(Buefy);

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// var app = new Vue({
//     el: '#app',
//     data: {
//     }

//     });


new Vue({
  el: '#app',
  data: {
    msg: 'asd',
    scrollPosition: 0,
    active: null,
    lastActive: null,
    lastScrollTop: window.pageYOffset || document.documentElement.scrollTop,
    scrollStarted: false,
    down: true
  },
  mounted() {
    this.active = 1
    this.lastActive = 1
    window.addEventListener('scroll', this.handleScroll)
  },
  methods: {
    handleScroll(e) {
      let vm = this
      let options = {
          container: 'body',
          easing: 'ease-in',
          offset: 0,
          cancelable: false,
          onStart: function () {
            document.body.style.overflow = 'hidden'
          },
          onDone: _.debounce(function(element) {
            if (vm.down) vm.active++
            else vm.active--
            vm.scrollStarted = false
            document.body.style.overflow = 'auto'
          }, 100),
          x: false,
          y: true
        }
        let st = window.scrollY
        if (st > this.lastScrollTop) {
            this.down = true
          } else {
            this.down = false
          }
          this.lastScrollTop = st
      if (!this.scrollStarted) {
        this.scrollStarted = true
        if (this.down) {
          this.down = true
          if (this.active === 1) {
            VueScrollTo.scrollTo('.section-2', 800, options)
          } else if (this.active === 2) {
            VueScrollTo.scrollTo('.section-3', 800, options)
          } else if (this.active === 3) {
            VueScrollTo.scrollTo('.section-4', 800, options)
          } else if (this.active === 4) {
            VueScrollTo.scrollTo('.section-5', 800, options)
          } else if (this.active === 5) {
            VueScrollTo.scrollTo('.section-6', 800, options)
          } else if (this.active === 6) {
            VueScrollTo.scrollTo('.section-7', 800, options)
          }
        } else {
          if (this.active === 2) {
            VueScrollTo.scrollTo('.section-1', 800, options)
          } else if (this.active === 3) {
            VueScrollTo.scrollTo('.section-2', 800, options)
          } else if (this.active === 4) {
            VueScrollTo.scrollTo('.section-3', 800, options)
          } else if (this.active === 5) {
            VueScrollTo.scrollTo('.section-4', 800, options)
          } else if (this.active === 6) {
            VueScrollTo.scrollTo('.section-5', 800, options)
          } else if (this.active === 7) {
            VueScrollTo.scrollTo('.section-6', 800, options)
          }
        }
      }
    }
  }
})




 