<template>
  <div>
    <h1>{{ message }}</h1>
    <p>This is a Vue component.</p>
    <input type="file" name="lesson_resources[]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('lesson_resources') border-red-500"  @change="fileInputChange" v-if="!uploading">
    <div id="video-form" v-if="uploading && !failed">
      Form
    </div>

  </div>
</template>

<script>
export default {
  data() 
  {
    return {
      uploading: false,
      uploadingComplete : false,
      failed : false
    }
  },
  methods: {
    fileInputChange(event) {
      this.uploading  = true;
      console.log(event.target.files[0].name);
      let file = event.target.files[0];
      // let formData = new FormData();   
     }
  },
  setup(props) {
    console.log('VideoUpload component is ready!', props.message);
    return { }
  },
  props: {
    message: String
  }
}


</script>