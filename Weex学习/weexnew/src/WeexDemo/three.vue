<template>
  <div>
    <div class="wrapper">
      <a class="button" href="http://10.38.69.198:1337/dist/index.weex.js">
        <text class="text">a组件跳转到一个weex项目。如果演示，请选择一个自己本机正在运行的weex项目的地址</text>
      </a>
    </div>
    <div class="wrapper">
      <text>slider组件，就是轮播图</text>
      
    </div>
  </div>
</template>
<style scoped>
  .wrapper {
    flex-direction: row;
    justify-content: center;
    height: 104px;
  }
  .button {
    /*width: 450px;*/
    height: 80px;
   
    padding-top: 20px;
    /*padding-bottom: 20px;*/
    flex:1;
    justify-content: center;
    align-items:center;
    border-width: 2px;
    border-style: solid;
    border-color: #DDDDDD;
    background-color: red
  }
  .text {
    font-size: 30px;
    color: #ffffff;
    text-align: left;
  }
</style>