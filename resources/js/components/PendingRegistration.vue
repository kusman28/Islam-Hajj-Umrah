<template>
	<div class="container">
		<img 
            class="rounded mx-auto d-block"
            height="150px"
            src="/template/img/logo1.png">
            <button class="btn btn-primary float-right" @click="disabled = (disabled + 1) % 2">Edit
                <i class="ion-ios-compose-outline"></i>
            </button>
            <h4 class="mb-4">Hajj Registration Form</h4>
            <hr class="mb-4">            
            <form @submit.prevent="update()">    
            <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>First name</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="firstname"
                    :placeholder="[[ hajj.firstname ]]"
                    v-model="form.firstname"
                    :disabled="disabled == 1"
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Middle name</label>
                    <input type="text" 
                    class="form-control"
                    name="middlename"
                    :placeholder="[[ hajj.middlename ]]"
                    v-model="form.middlename"
                    :disabled="disabled == 1"
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Last name</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="lastname"
                    :placeholder="[[ hajj.lastname ]]"
                    v-model="form.lastname"
                    :disabled="disabled == 1"
                    >
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Gender</label>
                    <select class="form-control" v-model="form.gender" name="gender" :disabled="disabled == 1">
                        <option value="">{{hajj.gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Birthday</label>
                    <input 
                    type="text" 
                    :placeholder="[[ hajj.birthday ]]"
                    class="form-control" 
                    name="birthday"
                    v-model="form.birthday"
                    onfocus="(this.type='date')"
                    :disabled="disabled == 1"
                    >
                     </div>
                  <div class="col-md-4 mb-3">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </span>
                      </div>
                      <input 
                      type="email" 
                      class="form-control"
                      name="email"
                    :placeholder="[[ hajj.email ]]"
                      v-model="form.email"
                      :disabled="disabled == 1"
                      >
                      </div>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label>Iqama No.</label>
                      <input 
                      type="text" 
                      class="form-control"
                      name="iqama_no"
                    :placeholder="[[ hajj.iqama_no ]]"
                      v-model="form.iqama_no"
                      :disabled="disabled == 1"
                      >
                      </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input 
                      type="text" 
                      class="form-control"
                      name="iqama_exp_date"
                      :placeholder="[[ hajj.iqama_exp_date ]]"
                      v-model="form.iqama_exp_date"
                      onfocus="(this.type='date')"
                      :disabled="disabled == 1"
                      >
                       </div>
                    <div class="col-md-3 mb-3">
                      <label>Passport No.</label>
                      <input 
                      type="text" 
                      class="form-control"
                      name="passport_no"
                      :placeholder="[[ hajj.passport_no ]]"
                      v-model="form.passport_no" 
                      :disabled="disabled == 1"
                      >
                       </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input type="text" 
                      class="form-control"
                      name="passport_exp_date"
                      :placeholder="[[ hajj.passport_exp_date ]]"
                      v-model="form.passport_exp_date"
                      onfocus="(this.type='date')"
                      :disabled="disabled == 1"
                      >
                       </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Mobile No.</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fas fa-mobile"></span>
                        </span>
                      </div>
                      <input 
                      type="text" 
                      class="form-control"
                      name="mobile_no"
                    :placeholder="[[ hajj.mobile_no ]]"
                      v-model="form.mobile_no"
                      :disabled="disabled == 1"
                       >
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>WhatsApp</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fab fa-whatsapp"></span>
                        </span>
                      </div>
                      <input 
                      type="text" 
                      class="form-control"
                      name="whatsapp_no"
                    :placeholder="[[ hajj.whatsapp_no ]]"
                      v-model="form.whatsapp_no"
                      :disabled="disabled == 1"
                      >
                       </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Nationality</label>
                    <select class="form-control"
                    v-model="form.nationality"
                    name="nationality"
                    :disabled="disabled == 1"
                    >
                        <option value="">{{hajj.nationality}}</option>
                        <option value="Filipino">Filipino</option>
                        <option value="Saudi">Saudi</option>
                    </select>
                     </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Address</label>
                    <select class="form-control"
                    name="address"
                    v-model="form.address"
                    :disabled="disabled == 1"
                    >
                    <option value="">{{hajj.address}}</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    </select>
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>City</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="city"
                    v-model="form.city"
                    :placeholder="[[ hajj.city ]]"
                    :disabled="disabled == 1"
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Job Title</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="job"
                    v-model="form.job"
                    :placeholder="[[ hajj.job ]]"
                    :disabled="disabled == 1"
                    >
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label>Company Name</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="company"
                    :placeholder="[[ hajj.company ]]"
                    v-model="form.company"
                    :disabled="disabled == 1"
                    >
                    </div>
                  <div class="col-md-6 mb-3">
                    <label>Company Contact</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="contact_company"
                    :placeholder="[[ hajj.contact_company ]]"
                    v-model="form.contact_company"
                    :disabled="disabled == 1"
                    >
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label>2x2 Picture</label><br>
                      <img class="img-thumbnail" v-bind:src="'/images/picture/'+hajj.picture">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label>Iqama Picture</label>
                      <img class="img-thumbnail" v-bind:src="'/images/iqama/'+hajj.iqama_pic">
                    </div>
                    <div class="col-md-4 mb-3">
                      <label>Passport Picture</label>
                      <img class="img-thumbnail" v-bind:src="'/images/passport/'+hajj.passport_pic">
                    </div>
                </div>
                <hr>
                <div class="mb-5">
                    <button class="col-md-4 btn btn-success" type="submit">Approve Registration
                        <i class="ion-ios-checkmark"></i>
                    </button>
                </div>
            </form>
        </div>
</template>
<script>

export default {
	data() {
		return {
            disabled: 1,
            hajj: {},
			form: new Form({
				id: '',
				firstname: '',
				middlename: '',
				lastname: '',
				gender: '',
				birthday: '',
				iqama_no: '',
				iqama_exp_date: '',
				passport_no: '',
				passport_exp_date: '',
				mobile_no: '',
				whatsapp_no: '',
				email: '',
				nationality: '',
				address: '',
				city: '',
				job: '',
				company: '',
				contact_company: '',
				status: ''
			}),
		};
	},
	mounted() {
		this.id = this.$route.params.id;
		this.pendingRegistration();
	},
	methods: {
		update()
		{
			this.$Progress.start();
			this.form.put('/api/hajj/'+this.id)
			.then(() => {
			swal.fire(
				'Approved',
				'Successfully registered.',
				'success'
				)
			this.$Progress.finish();
			})
			.catch(() => {
				this.$Progress.fail();
			})
		},
		// editModal(patient)
		// {
		// 	this.editmode = true;
		// 	this.form.reset();
		// 	$('#addNew').modal('show');
		// 	this.form.fill(patient);
		// },
		// newModal()
		// {
		// 	this.editmode = false;
		// 	this.form.reset();
		// 	$('#addNew').modal('show');
		// },
		// deletePatient(id)
		// {
		// swal.fire({
		// 	title: 'Are you sure?',
		// 	text: "You are going to delete this user",
		// 	type: 'warning',
		// 	showCancelButton: true,
		// 	confirmButtonColor: '#3085d6',
		// 	cancelButtonColor: '#d33',
		// 	confirmButtonText: 'Yes'
		// 	}).then((result) => {

		// 	if (result.value) {	
		// 		this.form.delete('api/patient/'+id).then(()=>{
		// 				swal.fire(
		// 				'Deleted!',
		// 				'Your file has been deleted.',
		// 				'success'
		// 				)
		// 				Fire.$emit('afterCreate');
		// 			})
		// 			.catch(()=>{
		// 				swal('Failed!', 'There was something wrong.', 'warning');
		// 			});
		// 		}
		// 	})
		// },
		pendingRegistration()
		{
			axios.get('/api/hajj/'+this.id)
			.then(({ data }) => (this.hajj = data));
		},
		// createPatient() 
		// {
		// 	this.$Progress.start();
		// 	this.form.post('api/patient')
		// 	.then(()=>{	
		// 	Fire.$emit('afterCreate');
		// 	$('#addNew').modal('hide');
		// 	toast.fire({
		// 		type: 'success',
		// 		title: 'Patient added successfully.'
		// 		})
		// 		this.$Progress.finish()
		// 	})
		// 	.catch(()=>{
		// 		this.$Progress.fail()
		// 	})
		// }
    },
	// created(){
	// 	this.pendingRegistration();
	// 	Fire.$on('afterCreate',() => {
	// 		this.pendingRegistration();
	// 	});

	// },
}
</script>