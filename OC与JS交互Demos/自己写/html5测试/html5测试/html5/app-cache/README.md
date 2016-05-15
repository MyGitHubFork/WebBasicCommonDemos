Application Cache
====

`window.applicationCache`

**`swapCache()`**

This makes the latest cache update available to the current application.

There is a very limited use case in which using this won't cause hard-to-find bugs.

  * No application logic has changed
  * No filenames, css names / selectors, nor variable names have changed
  * Just static resources have changed.

In short: **don't use `swapCache()`**.

Instead:

  * Indicate to the user that an upgrade is ready
  * Call `window.location.reload();`
