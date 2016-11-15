(function () {
  "use strict";

    var urls;

    // http://www.google.com/adplanner/static/top1000/
    urls = [
      // "https://www.google.com/favicon.ico",
      "https://facebook.com/favicon.ico",
      "https://www.youtube.com/favicon.ico",
      "https://www.blogger.com/favicon.ico",
      "https://www.live.com/favicon.ico",
      "https://twitter.com/favicon.ico",
      "https://www.squidoo.com/favicon.ico",
      // "https://www.google.co.in/favicon.ico", -- no query
      "http://www.yahoo.co.jp/favicon.ico",
      "https://www.amazon.com/favicon.ico",
      // "https://www.google.com.hk/favicon.ico", -- no query
      "https://www.linkedin.com/favicon.ico",
      //"https://www.google.de/favicon.ico", - no query params
      "https://bing.com/favicon.ico",
      //"http://wwwstatic.megaupload.com/images/icon.ico",
      /*
      wordpress
      ebay
      half
      microsoft
      flickr
      apple
      bbc.co.uk
      mozilla
      paypal
      craigslist
      imdb
      ask
      cnn
      adobe
      aol
      tumblr
      godaddy
      espn
      about
      nytimes
      livejournal
      myspace
      cnet
      orkut
      ehow
      netflix
      stackoverflow
      weather
      stumbleupon
      answers
      reddit
      devianart
      photobucket
      digg
      sourceforge
      github
      thehuffingtonpost
      bankofamerica
      bit.ly
      vimeo
      fbcdn.net
      chase
      foxnews
      dictionary
      download
      skype
      w3schools
      guardian.co.uk
      wikimedia
      wsj
      yelp
      scribd
      php
      joomla
      etsy
      "http://squidoo.com/favicon.ico"
      gmx
      odesk
      mashable
      istockphoto
      comcast
      dell
      hp
      slideshare
      freelancer
      */
      //"http://www.yahoo.com/favicon.ico",
      //"http://www.baidu.com/favicon.ico",
      //"http://en.wikipedia.org/favicon.ico",
      //"http://es.wikipedia.org/favicon.ico",
      //"http://www.qq.com/favicon.ico",
      //"http://www.msn.com/favicon.ico",
      //"http://www.sina.com.cn/favicon.ico",
      //"http://www.taobao.com/favicon.ico",
    ];

  exports.urls = urls;
  provide('amionline-favinet-list', exports);
}());
