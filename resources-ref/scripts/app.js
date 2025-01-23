import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
import 'jquery';
import WOW from 'wowjs';
import 'bootstrap/dist/js/bootstrap.min.js';
import 'owl.carousel/dist/owl.carousel.js';
import '@scripts/at-jquery.js';

new WOW.WOW().init();