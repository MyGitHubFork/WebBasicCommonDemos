<template>
	<div>
		<scroller>
		<div>
			<text class="butotnBack" @click="postBroadCast">发送广播</text>
		</div>
		<div class="link" @click="jump('./first')">
			<text class='title'>布局练习,字体(first.vue)</text>
		</div>
		<div class="link" @click="jump('./second')">
			<text class='title'>手势(second.vue)</text>
		</div>
		<div class="link" @click="jump('./three')">
			<text class='title'>组件(three.vue)</text>
		</div>
		<div class="link" @click="jump('./four')">
			<text class='title'>系统信息(four.vue)</text>
		</div>
		<div class="link" @click="jump('./five')">
			<text class='title'>内建模块(five.vue)</text>
		</div>
		<div class="link" @click="jump('./six')">
			<text class='title'>通用事件(six.vue)</text>
		</div>
		</scroller>
		<!-- <text class="fixed-button1" @click="jump(`/`)">back</text> -->
	</div>
</template>
<script>
	const modal = weex.requireModule('modal');
	export default {
		data(){
			return {
				"fg":"fsdfsdfs"
			}
		},
		methods:{
			//发送广播
			postBroadCast() {
				// //貌似只有浏览器环境能用。可能是sdk版本太低，必须0.9以上
				const Hulk = new BroadcastChannel("Avengers");
				Hulk.postMessage('hahahaha!!!!');
				
			}
		},
		mounted:function() {
			this.$nextTick(function() {
				const Stack = new BroadcastChannel('Avengers');
				Stack.onmessage = function(event) {
					//console.log(event.data);
					modal.toast({
					  message:"yeye",
					  duration:1.8
					});
				}
			});
		}
	}
</script>
<style scoped>
.butotnBack{
	margin-top: 50px;
	height: 100PX;
  background-color: #FC6621;
  border-radius: 10px;
  /*width: 150px;*/
}
.link{
	margin-top: 50PX;
	height: 100PX;
	background-color: #FC6621;
  border-radius: 10px;
}

.fixed-button1 {
  position: absolute;
  bottom: 50px;
  right: 50px;
  background-color: #FC6621;
  border-radius: 10px;
  width: 120px;
  padding: 15px;
  color: white;
  text-align: center;
}
</style>