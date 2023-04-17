<template>
  <div>
    <h1>{{ message }}</h1>
    <p>This is a Vue component.</p>
    <input type="file" name="lesson_resources[]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('lesson_resources') border-red-500"  @change="fileInputChange">
  </div>
</template>

<script>
export default {
methods: {
  //define a data with two objects 
  data() {
    return {
      uploading: false,
      uploadingComplete : false
    }
  },
    fileInputChange(event) {
      console.log(event.target.files[0].name);
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