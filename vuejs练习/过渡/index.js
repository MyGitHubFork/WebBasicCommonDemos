new Vue({
	el:"#repeat-object",
	data:{
		show: true,
		transitionName: 'bounce'
	},
	methods:{
		testShow:function (event) {
			this.show = this.show;
		}
	}
})

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