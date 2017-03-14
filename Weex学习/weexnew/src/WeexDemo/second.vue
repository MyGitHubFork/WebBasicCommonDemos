<template>
	<div>
		<text onTouch="touch" ontouchstart="touch">Touch手势</text>
	</div>
</template>
<style scoped>
	
</style>
<script>
	const modal  = weex.requireModule('modal');
	export default{
		data(){
			return{

			}
		},
		methods:{
			touch() {
				modal.toast({
					message:"test",
					duration:0.8
				});
			}
		}
	}
</script>