import Vue from 'vue'
import router from './router.js'
import SocialSharing from 'vue-social-sharing'
import axios from 'axios'

// ここから追加
import jQuery from "jquery";
window.$ = window.jQuery = jQuery;
require('bootstrap');
// ここまで追加

Vue.prototype.$http = axios;

Vue.use(SocialSharing);

new Vue({
  router: router,
}).$mount('#app')
