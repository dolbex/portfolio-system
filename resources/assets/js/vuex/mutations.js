import Vue from 'vue'

export default {

  /*
  *
  * Update Speed
  */
  updateSpeed (state, payload) {
    state.speed = payload
  },

  /*
  *
  * Update Positions
  */
  updateTop (state, payload) {
    state.topPosition = payload
  },
  updateLeft (state, payload) {
    state.leftPosition = payload
  }
}
