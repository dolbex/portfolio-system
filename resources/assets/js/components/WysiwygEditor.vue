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
    export default {
      data: function () {
        return {
          speed: 2,
          topPosition:100,
          leftPosition:0
        }
      },
      mounted: function () {
        var self = this

        window.addEventListener('keyup', function(event) {
          // If left arrow was pressed...
          if (event.keyCode == 37) {
            self.moveLeftRight(-5 * self.speed)
          }

          // If up arrow was pressed...
          if (event.keyCode == 38) {
            self.moveUpDown(-5 * self.speed)
          }

          // If right arrow was pressed...
          if (event.keyCode == 39) {
            self.moveLeftRight(5 * self.speed)
          }

          // If down arrow was pressed...
          if (event.keyCode == 40) {
            self.moveUpDown(5 * self.speed)
          }
        });
      },
      methods: {
        moveUpDown: function (amount) {
          this.topPosition += amount
        },
        moveLeftRight: function (amount) {
          this.leftPosition += amount
        }
      }
    }
</script>
