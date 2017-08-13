<style lang="scss">
  .media-images {
    display:flex;
  }
  .media-image {
    position: relative;
    margin-right:20px;

    img {
      object-fit: cover;
      object-position: 50% 50%;
      width:200px;
      height:200px;
    }

    a {
      position:absolute;
      top:5%;
      right:5%;
      font-size:10px;
      text-decoration: none;
      font-weight:bold;
      color:black!important;
      padding:5px 8px;
      background-color:white;
      border-radius: 2px;
    }
  }
</style>

<template>
  <div>
    <h3>Images
      <button type="button" class="dvs-button dvs-button-success add" @click="addImage">Add Image</button>
    </h3>
    <hr>
    <div class="media-images">
      <div class="media-image" v-for="(media, index) in images">
        <img :src="media">
        <a href="javascript:void(0)" @click="onDeleteImage(index)" class="image-delete">X</a>
      </div>
    </div>
    <input type="hidden" :value="imagesJson" :name="fieldname">
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
