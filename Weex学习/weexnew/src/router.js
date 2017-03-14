// import Vue from 'vue'
import Router from 'vue-router'
import StoriesView from './views/StoriesView.vue'
import ArticleView from './views/ArticleView.vue'
import CommentView from './views/CommentView.vue'
import UserView from './views/UserView.vue'
import DemoView from './WeexDemo/total.vue'
import first from './WeexDemo/first.vue'
import second from './WeexDemo/second.vue'
import three from './WeexDemo/three.vue'
import four from './WeexDemo/four.vue'
import five from './WeexDemo/five.vue'
import six from './WeexDemo/six.vue'

Vue.use(Router)

// Story view factory
function createStoriesView (type) {
  return {
    name: `${type}-stories-view`,
    render (createElement) {
      return createElement(StoriesView, { props: { type }})
    }
  }
}

export default new Router({
  // mode: 'abstract',
  routes: [
    { path: '/top', component: createStoriesView('top') },
    { path: '/new', component: createStoriesView('new') },
    { path: '/show', component: createStoriesView('show') },
    { path: '/ask', component: createStoriesView('ask') },
    { path: '/job', component: createStoriesView('job') },
    { path: '/demo', component: DemoView},
    { path: '/first', component:first},
    { path: '/second', component:second},
     { path: '/three', component:three},
     { path: '/four', component:four},
     { path: '/five', component:five},
     { path: '/six', component:six},
    { path: '/article/:url(.*)?', component: ArticleView },
    { path: '/item/:id(\\d+)', component: CommentView },
    { path: '/user/:id', component: UserView },
    { path: '/', redirect: '/top' }
  ]
})
