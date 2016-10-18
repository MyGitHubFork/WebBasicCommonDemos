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
		});//sortOrders有两个属性name和power。默认值都是1，也就是默认都是未选中状态的。
		return {
			sortKey:'',
			sortOrders:sortOrders
		};
	},
	methods:{
		//修改两个排列属性的值从而更改排序方式
		sortBy:function (key) {
			this.sortKey = key;
			this.sortOrders[key] = this.sortOrders[key] * -1;//根据不同的值，得到不同的class，改变头部的颜色
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