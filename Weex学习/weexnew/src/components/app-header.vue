<template>
  <div class="header">
    <div class="logo" @click="jump('/')">
      <image class="image" src="https://news.ycombinator.com/favicon.ico"></image>
    </div>
    <div class="nav">
      <div class="link" @click="jumpout()">
        <text class="title">测试</text>
      </div>
      <div class="link" @click="jump('/demo')">
        <text class="title">WeexDemo</text>
      </div>
      <div class="link" @click="jump('/top')">
        <text class="title">{{test}}</text>
      </div>
      <div class="link" @click="jump('/new')">
        <text class="title">New</text>
      </div>
      <div class="link" @click="jump('/show')">
        <text class="title">Show</text>
      </div>
      <div class="link" @click="jump('/ask')">
        <text class="title">Ask</text>
      </div>
      <div class="link" @click="jump('/job')">
        <text class="title">Job</text>
      </div>
    </div>
  </div>
</template>
<script>
  const bridgeModule = weex.requireModule('bridgeModule');
  const globalEvent = weex.requireModule('globalEvent');
  const modal = weex.requireModule('modal');
  export default {
      // mixins: [mixin],
      data () {
          return {
            "test":"hehe"
          }
      },

      components: {
          // 'desc-comp':Desc
      },
      methods: {
        jumpout(){
          //千万记得这句（先在外部声明),不能在回调中直接使用this.function(),不然不执行
       // var eventModule = require('@weex-module/event');
        //weex.requireModule('event')
        //  var self = this;
        //  eventModule.openURL('Alert.alert(null,"test");',function(ret) { 
        //                     //回调执行
        //  //   self.loadVersionData(ret.result);
        // });
          var self = this;
          var js = {
            name:"pop",
            param:{},
            operation:'Alert.alert(null,"weex to poc");',
          };
          bridgeModule.weexToPOC(js,function(err,res) { 
                              //回调执行
                //alert("hehe");
                //self.test = res.result;
                modal.toast({
                  message:"mm",
                  duration:1.8
                });
              //self.loadVersionData(ret.result);
          });
        },

      },
      created(){
        var self = this;
        // this.$nextTick(() => {
          globalEvent.removeEventListener("test");
          modal.toast({
                message:'yeye',
                duration:0.8
              });
          globalEvent.addEventListener("test",function(e){
              modal.toast({
                message:'hehehhhe',
                duration:0.8
              });
              self.$router.back()
          });
        // })
      },
      mounted(){
      }

  }
</script>
<style scoped>
  .header {
    position: relative;
    height: 120px;
    margin-bottom: 3px;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: #DDDDDD;
    background-color: #FF6600;
  }
  .logo {
    position: relative;
    width: 50px;
    height: 50px;
    top: 35px;
    left: 35px;
    border-width: 3px;
    border-style: solid;
    border-color: #FFFFFF;
  }
  .image {
    width: 44px;
    height: 44px;
  }
  .nav {
    display: flex;
    position: absolute;
    left: 120px;
    top: 35px;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
  }
  .link {
    padding-left: 15px;
    padding-right: 15px;
  }
  .title {
    font-family: Verdana, Geneva, sans-serif;
    font-size: 32px;
    line-height: 44px;
    color: #FFFFFF;
  }
</style>
