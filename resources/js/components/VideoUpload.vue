<template>
  <div>
    <h1>{{ message }}</h1>
    <p>This is a Vue component.</p>
    <input type="file" id="file-input" name="lesson_resources[]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('lesson_resources') border-red-500"  @change="fileInputChange" v-if="!uploading">
    <div id="video-form" v-if="uploading && !failed">
      Form
    </div>

  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      uploading: false,
      uploadingComplete: false,
      failed: false,
      name: 'default',
      description: 'null',
      video: 'default',
      lesson_id: 'default',
      course_id: 'default',
      video_id: 'default',
      video_url: 'default',
      file: null,
    }
  },
  methods: {
    fileInputChange(event) {
      this.uploading = true;
      this.failed = false;

      this.file = event.target.files[0];

      this.store().then(() => {
        //upload the video and add the lesson information to the database with the route 
        //web route with vue syntax 
      });
    },
    store() {
      const instance = axios.create();
      return instance.post('/lesson/uploading', {
        title: this.name,
        description: this.description,
        video: this.video,
        thumbnail: this.thumbnail,
        lesson_id: this.lesson_id,
        course_id: this.course_id,
        video_id: this.video_id,
        extension: this.file.name.split('.').pop()
      }).then((response) => {
        console.log(response.json());
      });
    }
  },
  setup(props) {
    // console.log('VideoUpload component is ready!', props.message);
    return {}
  },
  props: {
    message: String
  }
}
</script>