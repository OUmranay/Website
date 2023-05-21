new Vue({
  el: '#app',
  data: {
    formData: {
      name: '',
      email: '',
      gender: '',
      languages: [],
      birthdate: '',
      accept: '',
      message: ''
    },
    submitted: false,
    isEmailValid: true
  },
  
  methods: {
    submitForm() {
      this.isEmailValid = this.validateEmail(this.formData.email);
    
      if (this.isEmailValid && this.isFormValid()) {
        // Set form values in the URL as query parameters
        const params = new URLSearchParams();
        params.append('name', this.formData.name);
        params.append('email', this.formData.email);
        params.append('gender', this.formData.gender);
        params.append('languages', this.formData.languages.join(', '));
        params.append('birthdate', this.formData.birthdate);
        params.append('accept', this.formData.accept);
        params.append('message', this.formData.message);
    
        // Redirect to the "veri.html" page with the form data as query parameters
        window.location.href = 'veri.html?' + params.toString();
      }
    },
    resetForm() {
      this.formData.name = '';
      this.formData.email = '';
      this.formData.gender = '';
      this.formData.languages = [];
      this.formData.birthdate = '';
      this.formData.accept = '';
      this.formData.message = '';
      this.submitted = false;
    },
    validateEmail(email) {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email) && email.endsWith('@ogr.sakarya.edu.tr');
    },
    isFormValid() {
      return (
        this.formData.name.trim() !== '' &&
        this.formData.gender !== '' &&
        this.formData.languages.length > 0 &&
        this.formData.birthdate !== '' &&
        this.formData.accept !== '' &&
        this.formData.message !== ''
      );
    }
  }



});