var myMixin = {
	created: function () {
		this.hello()
	},
	methods: {
		hello: function () {
			console.log('hello from mixin!')
		}
	}
}

// 定义一个组件，使用这个混合对象
var Component = Vue.extend({
	mixins: [myMixin]
})

var component = new Component()