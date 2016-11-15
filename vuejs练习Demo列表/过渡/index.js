new Vue({
	el:"#repeat-object",
	data:{
		show: true,
		//transitionName: 'bounce'//可选
	},
	methods:{
		testShow:function (event) {
			this.show = !this.show;
		}
	}
})
// 这里的名字必须和css和html的名字一致才能都起作用。如果css和js中只有一个名字相同，则名字相同的那个起作用。
Vue.transition('bounce', {

	beforeEnter: function (el) {
		el.textContent = 'beforeEnter'
	},
	enter: function (el) {
		el.textContent = 'enter'
	},
	afterEnter: function (el) {
		el.textContent = 'afterEnter'
	},
	enterCancelled: function (el) {
		// handle cancellation
	},

	beforeLeave: function (el) {
		el.textContent = 'beforeLeave'
	},
	leave: function (el) {
		el.textContent = 'leave'
	},
	afterLeave: function (el) {
		el.textContent = 'afterLeave'
	},
	leaveCancelled: function (el) {
		// handle cancellation
	}
})