<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h1>{{msgfromfather}}</h1>
    <button v-on:click="onClickMe">Click!</button>
  </div>
</template>

<script>
export default {
  data () {
    return {
      msg: 'hello from component a!'
    }
  },
  props:['msgfromfather'],
  methods:{
      onClickMe:function(){
          console.log(this.msgfromfather);
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


