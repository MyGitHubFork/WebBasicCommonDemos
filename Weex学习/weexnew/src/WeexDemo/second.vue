<template>
	<div>
		<text ontouch="ontouch">Touch手势</text>
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
			ontouch:function(argument) {
				modal.toast({
					message:"test",
					duration:0.8
				});
			}
		}
	}
</script>