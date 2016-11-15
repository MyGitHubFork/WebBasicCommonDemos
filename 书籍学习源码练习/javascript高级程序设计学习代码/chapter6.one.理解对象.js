// var person = new Object();
// person.name = "Nicholas";
// person.age = 29;
// person.job = "Software Engineer";
// person.sayName = function () {
// 	console.log(this.name);
// }

// var person = {
// 	name:"Nicholas",
// 	age:29,
// 	job:"Software Engineer",
// 	sayName:function(){
// 		console.log(this.name);
// 	}
// };

// var person = {};
// Object.defineProperty(person, "name", {
// 	writable:false,
// 	value:"Nicholas"
// });
// person.name = "Greg";
// console.log(person.name);

// var person = {};
// Object.defineProperty(person, "name", {
// 	configurable: false,
// 	value: "Nicholas"
// });
// console.log(person.name);
// delete person.name;
// console.log(person.name);

// var book = {
// 	_year : 2004,
// 	edition : 1
// };
// Object.defineProperty(book, "year", {
// 	get:function(){
// 		return this._year;
// 	},
// 	set:function(newValue){
// 		if (newValue > 2004) {
// 			this._year = newValue;
// 			this.edition += newValue - 2004;
// 		}
// 	}
// });
// book.year = 2005;
// console.log(book.edition);

// var book = {};
// Object.defineProperties(book,{
// 	_year:{
// 		value:2004
// 	},
// 	edition:{
// 		value: 1
// 	},
// 	year:{
// 		get:function(){
// 			return this._year;
// 		},
// 		set:function(newValue){
// 			if (newValue > 2004) {
// 				this._year = newValue;
// 				this.edition += newValue - 2004;
// 			}
// 		}
// 	}
// });
// book.year = 2005;
// console.log(book.edition);



// var book = {};
// Object.defineProperties(book,{
// 	_year:{
// 		value:2004
// 	},
// 	edition:{
// 		value: 1
// 	},
// 	year:{
// 		get:function(){
// 			return this._year;
// 		},
// 		set:function(newValue){
// 			if (newValue > 2004) {
// 				this._year = newValue;
// 				this.edition += newValue - 2004;
// 			}
// 		}
// 	}
// });
// var descriptor = Object.getOwnPropertyDescriptor(book, "_year");
// console.log(descriptor.value);
// console.log(descriptor.configurable);
// console.log(typeof descriptor.get);
// descriptor = Object.getOwnPropertyDescriptor(book, "year");
// console.log(descriptor.value);
// console.log(descriptor.enumerable);
// console.log(typeof descriptor.get);





































