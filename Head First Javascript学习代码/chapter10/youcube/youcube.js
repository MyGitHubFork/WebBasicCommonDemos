//Date类扩展一个类方法
Date.prototype.shortFormat = function() {
	return (this.getMonth() + 1) + "/" + this.getDate() + "/" + this.getFullYear();

};

//Blog类的初始化方法
function Blog (body, date, image) {
	this.body = body;
	this.date = date;
	this.image = image;
}
//Blog类的实例方法，所有实例对象都只有这么一份
Blog.prototype.toString = function(){
	return "[" + this.date.shortFormat() + "]" + this.body;
};
Blog.prototype.toHTML = function(highlight) {
    var blogHTML = "";
    blogHTML += highlight ? "<p style='background-color:#EEEEEE'>" : "<p>";
    //blog对象是否有image元素
    if (this.image) {
      blogHTML += "<strong>" + this.date.shortFormat() + "</strong><br /><table><tr><td><img src='" +
        this.image + "'/></td><td style='vertical-align:top'>" + this.body + "</td></tr></table><em>" +
        this.signature + "</em></p>";
    }
    else {
      blogHTML += "<strong>" + this.date.shortFormat() + "</strong><br />" + this.body +
        "<br /><em>" + this.signature + "</em></p>";
    }
    return blogHTML;
};
Blog.prototype.containsText = function(text){
	return (this.body.toLowerCase().indexOf(text.toLowerCase()) != -1);
};

//添加一个类属性,所有的Blog对象分享一份。
Blog.prototype.signature = "签名：黄成都你还";

//类方法。这个方法只有Blog类可以调用。Blog类的对象也不可以调用，而且不能访问Blog的成员属性
Blog.blogSorter = function(blog1, blog2){
	return blog2.date - blog1.date;
};


      var blog = [ new Blog("Got the new cube I ordered. It's a real pearl.", new Date("08/14/2008")),
                   new Blog("Solved the new cube but of course, now I'm bored and shopping for a new one.", new Date("08/19/2008")),
                   new Blog("Managed to get a headache toiling over the new cube. Gotta nap.", new Date("08/16/2008")),
                   new Blog("Found a 7x7x7 cube for sale online. Yikes! That one could be a beast.", new Date("08/21/2008")),
                   new Blog("Met up with some fellow cubers to discuss the prospect of a 7x7x7 cube. Mixed feelings.", new Date("08/29/2008")),
                   new Blog("Went ahead and ordered the scary 7x7x7 cube. Starting a mental exercise regimen to prepare.", new Date("09/01/2008")),
                   new Blog("Attended a rally outside of a local toy store that stopped carrying cube puzzles. Power to the puzzlers!", new Date("09/03/2008")),
                   new Blog("Got the new 7x7x7 cube. Could be my last blog post for a while...", new Date("09/05/2008")),
                   new Blog("Wow, it took me a couple of weeks but the new cube is finally solved!", new Date("09/19/2008"), "cube777.png") ];

      // Show the list of blog entries
      function showBlog(numEntries) {
        // First sort the blog
        blog.sort(Blog.blogSorter);

        // Adjust the number of entries to show the full blog, if necessary
        if (!numEntries)
          numEntries = blog.length;

        // Show the blog entries
        var i = 0, blogListHTML = "";
        while (i < blog.length && i < numEntries) {
          blogListHTML += blog[i].toHTML(i % 2 == 0);
          i++;
        }

        // Set the blog HTML code on the page
        document.getElementById("blog").innerHTML = blogListHTML;
      }

      // Search the list of blog entries for a piece of text
      function searchBlog() {
        var searchText = document.getElementById("searchtext").value;
        for (var i = 0; i < blog.length; i++) {
          // See if the blog entry contains the search text
          if (blog[i].containsText(searchText)) {
            alert(blog[i]);
            break;
          }
        }

        // If the search text wasn't found, display a message
        if (i == blog.length)
          alert("Sorry, there are no blog entries containing the search text.");
      }
      // Display a randomly chosen blog entry
      function randomBlog() {
        // Pick a random number between 0 and blog.length - 1
        var i = Math.floor(Math.random() * blog.length);
        alert(blog[i]);
      }