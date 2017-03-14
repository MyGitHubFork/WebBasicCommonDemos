<template>
  <scroller>
    <div class="wrapper one">
      <a class="button" href="http://localhost:1337/dist/index.weex.js">
        <text class="text">a组件跳转到一个weex项目。如果演示，请选择一个自己本机正在运行的weex项目的地址</text>
      </a>
    </div>
    <div>
      <slider class='slider' interval='3000' auto-play='true'>
        <div class="frame" v-for='img in imageList'>
          <image class='image' resize='cover' :src='img.src'></image>
        </div>
      </slider>
    </div>
    <div class='example'>
      <text class='label'>onchange</text>
      <switch @change='onchange'></switch>
      <text class='info'>{{checked}}</text>
    </div>
    <div>
      <video class='video' :src='src' autoplay controls @start='onstart' @pause='onpause' @finish='onfinish' @fail='onfail'>
      </video>
      <text class='info1'>state:{{state}}</text>
    </div>
    <div class="wrapper">
      <div ref='test' @click='move' class='box'>
      </div>
    </div>
  </scroller>
</template>
<script>
  const modal = weex.requireModule('modal');
  const animation = weex.requireModule('animation');
  export default{
    data(){
      return {
        imageList:[
        { src: 'https://gd2.alicdn.com/bao/uploaded/i2/T14H1LFwBcXXXXXXXX_!!0-item_pic.jpg'},
        { src: 'https://gd1.alicdn.com/bao/uploaded/i1/TB1PXJCJFXXXXciXFXXXXXXXXXX_!!0-item_pic.jpg'},
        { src: 'https://gd3.alicdn.com/bao/uploaded/i3/TB1x6hYLXXXXXazXVXXXXXXXXXX_!!0-item_pic.jpg'}
        ],
         checked:false,
         state:'---',
         src:'http://flv2.bn.netease.com/videolib3/1611/01/XGqSL5981/SD/XGqSL5981-mobile.mp4'
      }
    },
    methods:{
      onchange(event){
        console.log(`onchange,value:${event.value}`);
        modal.toast({
          message:"onchange,value:" + event.value,
          duration:2
        });
        this.checked = event.value;
      },
      onstart:function(event) {
        this.tate = 'onstart';
      },
      onpause:function(event) {
        this.state = 'onpause';
      },
      onfinish:function(event) {
        this.state = 'onfinish';
      },
      onfail:function(event) {
        this.state = 'onfail';
      },
      move:function() {
        var testEl = this.$refs.test;
        animation.transition(testEl,{
          styles:{
            color:'#ff0000',
            transform:'translate(250px,100px)',
            transformOrigin:'center center'
          },
          duration:800,
          timingFunction:'ease',
          delay:0
        },function() {
          modal.toast({message:'animation finished.'});
        });
      }
    }
  }
</script>
<style scoped>
.video{
  width:630px;
  height: 350px;
  margin-top: 60px;
  margin-left: 60px;
}
.box{
  width: 250px;
  height: 250px;
  background-color: #DDD
}
.info1{
  margin-top: 40px;
  font-size: 40px;
  text-align: center;
}
.example{
  flex-direction: row;
  justify-content: flex-start;
  margin-top: 60px;
  border-width: 2px;
  border-color: red;
}
.label{
  font-size: 40px;
  line-height: 60px;
  width: 350px;
  color: #666;
  text-align: right;
  margin-right: 20px;
}
.info{
  font-size: 30px;
  line-height: 60px;
  color: #BBB;
  margin-left: 10px;
}
.slider{
  margin-top: 25px;
  margin-left: 25px;
  width:700px;
  height: 700px;
  border-width: 2px;
  border-style: solid;
  border-color: $41B883;
}
.frame{
  width: 700px;
  height: 700px;
  position: relative;
}
.image{
  width: 700px;
  height: 700px;
}

.one{
  height: 104px;
}
.wrapper {
  flex-direction: row;
  justify-content: center;
  margin-top: 30px;
}
.button {
  /*width: 450px;*/
  height: 80px;
  /*padding-top: 20px;*/
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