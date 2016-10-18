/**
 * Created by huangchengdu on 16/10/18.
 */

Vue.component('demo-grid',{
	template:'#grid-template',
	props:{
		data:Array,
		columns:Array,
		filterKey:String
	},
	data:function () {
		var sortOrders = {};
		this.columns.forEach(function (key) {
			sortOrders[key] = 1;
		});//sortOrders有两个属性name和power。默认都是将序
		return {
			sortKey:'',
			sortOrders:sortOrders
		};
	},
	methods:{
		//修改两个排列属性的值从而更改排序方式
		sortBy:function (key) {
			this.sortKey = key;
			this.sortOrders[key] = this.sortOrders[key] * -1;//改变排序方式
		}
	}
})

var demo = new Vue({
	el:"#demo",
	data:{
		searchQuery:'',
		gridColumns:['name','power'],
		gridData:[
			{ name: 'Chuck Norris', power: Infinity },
			{ name: 'Bruce Lee', power: 9000 },
			{ name: 'Jackie Chan', power: 7000 },
			{ name: 'Jet Li', power: 8000 }
		]
	}
})