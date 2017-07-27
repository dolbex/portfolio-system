<style>
  .marker {
    position:absolute;
    width:50px;
    height:50px;
    border-radius: 50px;
    background-color:red;

    transition: all 1s;
  }
</style>

<template>
    <div class="example">
      <div class="marker" :style="{top: topPosition + 'px', left: leftPosition + 'px'}"></div>
    </div>
</template>

<script>
import { mapGetters, mapMutations } from 'vuex'

export default {
  data: function () {
    return {
      channel: null
    }
  },
  mounted: function () {
    var self = this

    this.subscribeToChannel()

    window.addEventListener('keyup', function(event) {
      // If left arrow was pressed...
      if (event.keyCode == 37) {
        var newPosition = self.leftPosition - (5 * self.speed)
        self.updateLeft(newPosition)
        Echo.join('movingstuff').whisper('client-MoveLeftRight', {newPosition: newPosition})
      }

      // If up arrow was pressed...
      if (event.keyCode == 38) {
        var newPosition = self.topPosition - (5 * self.speed)
        self.updateTop(newPosition)
        Echo.join('movingstuff').whisper('client-MoveUpDown', {newPosition: newPosition})
      }

      // If right arrow was pressed...
      if (event.keyCode == 39) {
        var newPosition = self.leftPosition + (5 * self.speed)
        self.updateLeft(newPosition)
        Echo.join('movingstuff').whisper('client-MoveLeftRight', {newPosition: newPosition})
      }

      // If down arrow was pressed...
      if (event.keyCode == 40) {
        var newPosition = self.topPosition + (5 * self.speed)
        self.updateTop(newPosition)
        Echo.join('movingstuff').whisper('client-MoveUpDown', {newPosition: newPosition})
      }
    });
  },
  methods: {
    subscribeToChannel: function () {
      var self = this
      this.channel = Echo.join('movingstuff').here((users) => {
            console.log(users);
        }).on('pusher:subscription_succeeded', (member) => {
            console.log(member);
        }).on('pusher:subscription_error', (status) => {
            console.log(status);
        }).joining((user) => {
            console.log('User Joined');
        }).leaving((user) => {
            console.log('User gone');
        }).listen('client-MoveLeftRight', (e) => {
          self.updateLeft(e.newPosition)
        }).listen('client-MoveUpDown', (e) => {
          self.updateTop(e.newPosition)
        })
    },
    ...mapMutations([
      'updateTop',
      'updateLeft'
    ]),
  },
  computed: {
    ...mapGetters([
      'topPosition',
      'leftPosition',
      'speed'
    ]),
  }
}
</script>
