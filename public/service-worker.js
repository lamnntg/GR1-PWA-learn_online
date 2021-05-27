/////////////////////////////////////////////////////////////////////////////
// You can find dozens of practical, detailed, and working examples of
// service worker usage on https://github.com/mozilla/serviceworker-cookbook
/////////////////////////////////////////////////////////////////////////////

// Cache name
var CACHE_NAME = 'cache-version-1';

// Files required to make this app work offline
var REQUIRED_FILES = [
  'index.html',
  '/',
  'https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap',
  'https://unpkg.com/ionicons@5.0.0/dist/ionicons.js',
  'assets/js/lib/jquery-3.4.1.min.js',
  'assets/js/lib/popper.min.js',
  'assets/js/lib/bootstrap.min.js',
  'assets/js/plugins/owl-carousel/owl.carousel.min.js',
  'assets/js/base.js',
  'assets/css/inc/owl-carousel/owl.carousel.min.css',
  'assets/css/inc/owl-carousel/owl.theme.default.css',
  'assets/css/inc/bootstrap/bootstrap.min.css',
  'assets/css/style.css',
  'web/js/jquery-3.3.1.min.js',
  'web/js/jquery-migrate-3.0.1.min.js',
  'web/js/jquery-ui.js',
  'web/js/popper.min.js',
  'web/js/bootstrap.min.js',
  'web/js/owl.carousel.min.js',
  'web/js/jquery.stellar.min.js',
  'web/js/jquery.countdown.min.js',
  'web/js/bootstrap-datepicker.min.js',
  'web/js/jquery.easing.1.3.js',
  'web/js/aos.js',
  'web/js/jquery.fancybox.min.js',
  'web/js/jquery.sticky.js',
  'web/fonts/icomoon/style.css',

  'web/css/bootstrap.min.css',
  'web/css/jquery-ui.css',
  'web/css/owl.carousel.min.css',
  'web/css/owl.theme.default.min.css',
  'web/css/owl.theme.default.min.css',

  'web/css/jquery.fancybox.min.css',

  'web/css/bootstrap-datepicker.css',

  'web/fonts/flaticon/font/flaticon.css',

  'web/css/aos.css',

  'web/css/style.css',
];

self.addEventListener('install', function(event) {
  // Perform install step:  loading each required file into cache
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        // Add all offline dependencies to the cache
        return cache.addAll(REQUIRED_FILES);
      })
      .then(function() {
        return self.skipWaiting();
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return the response from the cached version
        if (response) {
          return response;
        }
        // Not in cache - return the result from the live server
        // `fetch` is essentially a "fallback"
        return fetch(event.request);
      }
    )
  );
});

self.addEventListener('activate', function(event) {
  // Calling claim() to force a "controllerchange" event on navigator.serviceWorker
  event.waitUntil(self.clients.claim());
});

