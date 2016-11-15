Offline Mobile Application
====

See example in `main.js`

Works in strict-mode on:

  * Android 2.2
  * Chrome 10
  * Safari 5
  * Firefox 4

Todo

  * iOS 4.3 (expected to work)

Why?

  * Easy abstractions for the most common use cases
  * Fixes timing issue between domReady and applicationCache checking across browsers
  * Periodically checks for updates and prompts user to allow refresh
  * Reliably determines online / offline status
  * Normalizes `applicationCache` events
  * jQuery, MooTools, etc compatible

How to test it yourself
----

  0. fork this repository
  0. load this dummy app on your phone
  0. change the version string in the `main.manifest`
  0. push the change
  0. refresh the page on your phone
  0. rinse and repeat to test the various features

Install, Update on Startup, Update on Demand
====

Abstracts `applicationCache` to more easily handle the top 3 use cases:

  * **Install** the app on initial page load
  * **Automatically upgrade** the app on subsequent page loads
  * Gracefully **upgrade** the app **during use**
    * check for updates periodically (every hour default)
    * check for updates manually


The events can be handled in this fashion:

  * `appCache.isInstalled()` - returns true if the application is already installed
  * `appCache.load.on('EVENT', callback)` - the callback for a page-load cache check
  * `appCache.update.on('EVENT', callback)` - the callback for a periodic or forced callback
  * `appCache.checkNow()` - the same as `applicationCache.update()`
  * `appCache.reload()` - cleanly reload the application with `applicationCache.swapCache()` and `location.refresh()`

Note: Events are handled with a client-side version of Node.js's `EventEmitter`

More Intelligent Cache Events
====

Note: If the DOM is not yet ready, these events will be queued until it is. No worries about race conditions between `DOM` and `applicationCache` in the different browsers or missing the events. 8^D

  * `error`
    * smarter than `applicationCache`'s `error`
    * not emitted if the browser is offline and the cache status is in a non-error state

  * `start` - the `checking` event

  * `loadstart` - the `downloading` event

  * `progress` - the `progress` event

  * `loadend`
    * if `false === appCache.isInstalled()` this is the `cached` event
    * if `true === appCache.isInstalled()` this is the `updateready` event
    * not emitted on `error`
    * if the browser is determined to be offline, this is not called

  * `end`
    * always emitted after all other events have been successful
    * emitted in place of `noupdate`
    * not emitted on `error`

Detecting Online / Offline Status
====

Place the files `online.json` and `offline.json` in the same path as the file which includes `app-cache.js`

Edit the fallback of `main.manifest` like so

    CACHE MANIFEST

    FALLBACK:
    online.json offline.json

  * The browser is assumed to be **offline** if *any* of the following are true:
    * The contents of `offline.json` are retrieved in place of `online.js`
    * The browser is in "Offline Mode"
    * The browser is in "Online Mode", but the OS is in "Offline Mode"
    * The server is unavailable

  * The browser is assumed to be **online** if *any* of the following are true:
    * The browser can't be determined as `offline` by the metrics above
    * A request to `online.json?_no_cache_= + new Date().valueOf()` returns the contents of `online.json`
    * The server is available
    * The request to the server fails
    * The `main.manifest` `FALLBACK` is not set correctly

TODO
====

 * `appCache.isInstalled()` relies on localStorage. Provide strategy using cookies also
 * most online / offline checking to own module and add event handler
 * Handle 'obsolete' event http://www.w3.org/TR/html5/offline.html
  * Ensure that all "last event in sequence cases are handled correctly"
