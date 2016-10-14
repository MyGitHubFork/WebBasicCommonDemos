new Vue({
	el:"#example",
	data:{
		name:"Vue.js"
	},
	methods:{
		greet:function (event) {
			alert("Hello" + this.name + "!");
			alert(event.target.tagName);
		},
		say:function (msg) {
			alert(msg);
		}
	}
})