<style>

</style>

<template>
  <div>
    <h3>Images
      <button type="button" class="dvs-button dvs-button-success add" @click="addImage">Add Image</button>
    </h3>
    <hr>
    <div v-for="(media, index) in images"
         :style="{backgroundImage:'url(' + media + ')'}">
      <a href="javascript:void(0)" @click="onDeleteImage(index)" class="image-delete">X</a>
    </div>
    <input type="text" :value="imagesJson" :name="fieldname">
  </div>
</template>

<script>
  export default {
    data: function () {
      return {
        images: []
      }
    },
    mounted: function () {
      console.log('here')
      this.images = this.media
    },
    methods: {
      addImage() {
        var self = this
        this.launchMediaManager(function (images) {
          self.images.push(images)
        })
      },
      launchMediaManager(callback) {
        var mediaUrl = '/admin/media-manager?cropMode=Preserve&type=image'
        window.open(mediaUrl, 'Media Manager', "width=1024,height=768,location=no")
        document.onMediaManagerSelect = function (images) {
          callback(images)
          document.onMediaManagerSelect = null
        }
      },
      onDeleteImage(index) {
        this.images.splice(index, 1)
      }
    },
    computed: {
      imagesJson () {
        return JSON.stringify(this.images)
      }
    },
    components: {},
    props: {
      media : {
        type: Array,
        required: true
      },
      fieldname: {
        type: String,
        required: true
      }
    }
  }
</script>
