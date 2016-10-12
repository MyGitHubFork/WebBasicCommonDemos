new Vue({
	el:"#app",
	data:{
		newTodo:'',
		todos:[{text:"add some todos"}],

	},
	methods: {
		addTodo: function () {
			var text = this.newTodo.trim();
			if (text) {
				this.todos.push({text: text});
				this.newTodo = '';
			}
		},
		removeTodo: function (index) {
			this.todos.splice(index, 1);
		}
	},
	created:function () {
		console.log("create" + " a is:" + this.todos);
	},
	compiled:function () {
		console.log("compiled" + " a is:" + this.todos);
	},
	ready:function () {
		console.log("ready" + " a is:" + this.todos);
	},
	destroyed:function () {
		console.log("destroyed" + " a is:" + this.todos);
	}
})