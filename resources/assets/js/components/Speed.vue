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
    <div class="speed-setting">
      <input type="range" min="1" max="5" ref="speedControl" v-model.number="speedSurrogate">
    </div>
</template>

<script>
import { mapGetters, mapMutations } from 'vuex'

export default {
  data: function () {
    return {
      speedSurrogate: 1
    }
  },
  mounted: function () {
    this.speedSurrogate = this.speed
  },
  methods: {
    ...mapMutations([
      'updateSpeed'
    ]),
  },
  computed: {
    ...mapGetters([
      'speed'
    ]),
  },
  watch: {
    'speedSurrogate': {
      deep: true,
      handler () {
        this.updateSpeed(this.speedSurrogate)
        this.$refs.speedControl.blur()
      }
    }
  }
}
</script>
