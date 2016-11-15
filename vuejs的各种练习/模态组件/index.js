/**
 * Created by huangchengdu on 16/10/19.
 */


Vue.component('modal',{
	template:'#modal-template',
	props:{
		show:{
			type:Boolean,
			required:true,
			twoWay:true
		}
	}
})

new Vue({
	el:'#app',
	data:{
		showModal:false
	}
})