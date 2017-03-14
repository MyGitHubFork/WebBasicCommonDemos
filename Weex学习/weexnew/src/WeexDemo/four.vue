<template>
  <scroller class="wrapper">
    <text class="title">Weex SDK Version</text>
    <text class="version">{{version}}</text>
    <div class="group">
      <text class="label">JS Framework</text>
      <text class="value">{{jsfmVersion}}</text>
    </div>
    <div class="group">
      <text class="label">platform</text>
      <text class="value">{{platform}}</text>
    </div>
    <div class="group">
      <text class="label">osVersion</text>
      <text class="value">{{osVersion}}</text>
    </div>
    <div class="group">
      <text class="label">appVersion</text>
      <text class="value">{{appVersion}}</text>
    </div>
    <div class="group">
      <text class="label">deviceModel</text>
      <text class="value">{{deviceModel}}</text>
    </div>
    <div class="group">
      <text class="label">deviceWidth</text>
      <text class="value">{{deviceWidth}}</text>
    </div>
    <div class="group">
      <text class="label">deviceHeight</text>
      <text class="value">{{deviceHeight}}</text>
    </div>
    <div class="controls">
      <text class="button" onclick="copy">copy</text>
    </div>
  </scroller>
</template>

<script>
  var clipboard = weex.requireModule('clipboard');
  var modal = weex.requireModule('modal');

  module.exports = {
    data: {
      version: 'invalid',
      jsfmVersion: 'invalid',
      platform: 'invalid',
      osVersion: 'invalid',
      appVersion: 'invalid',
      deviceModel: 'invalid',
      deviceWidth: 'invalid',
      deviceHeight: 'invalid',
    },
    created: function () {
      try {
        this.jsfmVersion = getJSFMVersion();
      } catch (e) {
        this.jsfmVersion = '≤ 0.15.6';
      }

      if (typeof WXEnvironment === 'object') {
        this.version = WXEnvironment.weexVersion || 'unknown';
        this.platform = WXEnvironment.platform || 'unknown';
        this.osVersion = WXEnvironment.osVersion || 'unknown';
        this.appVersion = WXEnvironment.appVersion || 'unknown';
        this.deviceModel = WXEnvironment.deviceModel || 'unknown';
        this.deviceWidth = WXEnvironment.deviceWidth || 'unknown';
        this.deviceHeight = WXEnvironment.deviceHeight || 'unknown';
      }
    },
    methods: {
      copy: function () {
        try {
          var info = 'Weex SDK Version: ' + this.version + ',\n'
          info += 'JS Framework Version: ' + this.jsfmVersion + ',\n'
          info += 'platform: ' + this.platform + ',\n'
          info += 'osVersion: ' + this.osVersion + ',\n'
          info += 'appVersion: ' + this.appVersion + ',\n'
          info += 'deviceModel: ' + this.deviceModel + ',\n'
          info += 'deviceWidth: ' + this.deviceWidth + ',\n'
          info += 'deviceHeight: ' + this.deviceHeight
          clipboard.setString(info)
          modal.toast({ message: 'copied to cilpboard' })
        } catch (e) {
          modal.toast({ message: 'copy failed' })
        }
      }
    }
  }
</script>

<style>
  .title {
    font-size: 42;
    text-align: center;
    color: #888888;
    margin-top: 50;
    margin-bottom: 20;
  }
  .version {
    font-size: 100;
    text-align: center;
    margin-bottom: 75;
  }
  .group {
    margin-top: 25;
    flex-direction: row;
  }
  .label {
    width: 360;
    font-size: 42;
    text-align: right;
    color: #888888;
  }
  .value {
    padding-left: 50;
    font-size: 42;
  }
  .controls {
    margin-top: 80;
    flex-direction: row;
    justify-content: center;
  }
  .button {
    width: 250;
    color: #666666;
    text-align: center;
    font-size: 50;
    padding-top: 16;
    padding-bottom: 16;
    border-width: 2;
    border-style: solid;
    border-color: #DDDDDD;
    background-color: #F8F8F8; 
  }
</style>
