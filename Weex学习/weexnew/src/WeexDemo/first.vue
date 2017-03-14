<template>
  <div>
    <div v-for="(v, i) in list" class="row">
      <div v-for="(text, k) in v" class="item">
        <div>
          <text class="textItem">{{text}}</text>
        </div>
      </div>
    </div>
    <div class="wrapper">
    	<div class="box box1">
    	</div>
    	<div class="box box2">
    	</div>
    	<div class="box box3">
    	</div>
    </div>
  </div>
</template>
<style scoped>
  .item{
    flex:1;
    justify-content: center;
    align-items:center;
    border-width:1;
  }
  .row{
    flex-direction: row;
    height:80px;
  }
  .textItem{
  	color: red;
  	font-size: 20px;
  	font-style: italic;
    font-weight: bold;
    text-decoration: underline;
    
  }
  .wrapper{
  	position: absolute;
  	top: 250px;
  	right: 0;
  	left: 0;
  	bottom: 0; 
  }
  .box {
  	width: 400px;
  	height: 400px;
  	position: absolute;
  }
  .box1 {
  	top: 0;
  	left: 0;
  	background-color: #ff0000;
  }
  .box2 {
  	top: 150px;
  	left: 150px;
  	background-color: #0055dd;

  }
  .box3 {
  	top: 300px;
  	left: 300px;
  	background-color: #00ff49;   
  }
</style>
<script>
  module.exports = {
    data: function () {
      return {
        list:[
          ['A', 'B', 'C'],
          ['D', 'E', 'F'],
          ['G', 'H', 'I']
        ]
      }
    }
  }
</script>
