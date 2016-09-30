<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h1>{{msgfromfather}}</h1>
    <button v-on:click="onClickMe">open mouse!</button>
    <button v-on:click="onClickMetwo">open mouse!</button>
  </div>
</template>

<script>
export default {
  data () {
    return {
      msg: 'hello from component a!',
      msg1:'dispatch msg'
    }
  },
  props:['msgfromfather'],
  methods:{
      onClickMe:function(){
      console.log(this.msgfromfather);
      this.$emit('child-tell-me-something',this.msg);
    },
    onClickMetwo:function(){
      console.log(this.msgfromfather);
      this.$dispatch('child-tell-me-something-two',this.msg1);
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
</style>


