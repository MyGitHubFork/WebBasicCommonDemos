<template>
  <div>
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
  </div>
</template>
<script>
  const modal = weex.requireModule('modal');
  export default{
    data(){
      return {
        imageList:[
        { src: 'https://gd2.alicdn.com/bao/uploaded/i2/T14H1LFwBcXXXXXXXX_!!0-item_pic.jpg'},
        { src: 'https://gd1.alicdn.com/bao/uploaded/i1/TB1PXJCJFXXXXciXFXXXXXXXXXX_!!0-item_pic.jpg'},
        { src: 'https://gd3.alicdn.com/bao/uploaded/i3/TB1x6hYLXXXXXazXVXXXXXXXXXX_!!0-item_pic.jpg'}
        ],
         checked:false,
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
      }

    }
  }
</script>
<style scoped>
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