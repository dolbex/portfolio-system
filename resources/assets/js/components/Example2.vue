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
  mounted: function () {
    var self = this

    window.addEventListener('keyup', function(event) {
      // If left arrow was pressed...
      if (event.keyCode == 37) {
        self.updateLeft(self.leftPosition - (5 * self.speed))
      }

      // If up arrow was pressed...
      if (event.keyCode == 38) {
        self.updateTop(self.topPosition - (5 * self.speed))
      }

      // If right arrow was pressed...
      if (event.keyCode == 39) {
        self.updateLeft(self.leftPosition + (5 * self.speed))
      }

      // If down arrow was pressed...
      if (event.keyCode == 40) {
        self.updateTop(self.topPosition + (5 * self.speed))
      }
    });
  },
  methods: {
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
