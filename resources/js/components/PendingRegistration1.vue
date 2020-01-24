<template>
	<div class="container">
		<img 
            class="rounded mx-auto d-block"
            height="150px"
            src="/template/img/logo1.png">
            <h4 class="mb-4">Hajj Registration Form</h4>
            <hr class="mb-4">                
            <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>First name</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    v-model="hajj.firstname"
                    disabled
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Middle name</label>
                    <input type="text" 
                    class="form-control"
                    v-model="hajj.middlename"
                    disabled
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Last name</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="hajj.lastname"
                    disabled
                    >
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Gender</label>
                    <select class="form-control" v-model="hajj.gender" name="gender" disabled>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Birthday</label>
                    <input 
                    type="date" 
                    class="form-control" 
                    v-model="hajj.birthday"
                    disabled
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
                      v-model="hajj.email"
                      disabled
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
                      v-model="hajj.iqama_no"
                      disabled
                      >
                      </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input 
                      type="date" 
                      class="form-control"
                      v-model="hajj.iqama_exp_date"
                      disabled
                      >
                       </div>
                    <div class="col-md-3 mb-3">
                      <label>Passport No.</label>
                      <input 
                      type="text" 
                      class="form-control"
                      v-model="hajj.passport_no" 
                      disabled
                      >
                       </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input type="date" 
                      class="form-control"
                      v-model="hajj.passport_exp_date"
                      disabled
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
                      v-model="hajj.mobile_no"
                      disabled
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
                      v-model="hajj.whatsapp_no"
                      disabled
                      >
                       </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Nationality</label>
                    <select class="form-control"
                    v-model="hajj.nationality"
                    disabled
                    >
                        <option value="">Select</option>
                        <option value="Filipino">Filipino</option>
                        <option value="Saudi">Saudi</option>
                    </select>
                     </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Address</label>
                    <select class="form-control"
                    v-model="hajj.address"
                    disabled
                    >
                    <option value="">Select</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    </select>
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>City</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="hajj.city"
                    disabled
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Job Title</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="hajj.job"
                    disabled
                    >
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label>Company Name</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="hajj.company"
                    disabled
                    >
                    </div>
                  <div class="col-md-6 mb-3">
                    <label>Company Contact</label>
                    <input 
                    type="text" 
                    class="form-control"
                    v-model="hajj.contact_company"
                    disabled
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
                    <button class="col-md-4 btn btn-primary" type="submit">Approve Registration</button>
                </div>
        </div>
	</div>
</template>
<script>

export default {
	data() {
		return {
			wid: null,
			// pending: {},
			// form: new Form({
			// 	id: '',
			// 	firstname: '',
			// 	middlename: '',
			// 	lastname: '',
			// 	gender: '',
			// 	created_at: '',
			// 	status: ''
			// }),
			hajj: []
		};
	},
	mounted() {
		this.wid = this.$route.params.id;
		this.pendingRegistration();
	},
	methods: {
		// updatePatient()
		// {
		// 	this.$Progress.start();
		// 	this.form.put('api/patient/'+this.form.id)
		// 	.then(() => {
		// 	$('#addNew').modal('hide');
		// 	swal.fire(
		// 		'Updated!',
		// 		'Patient information updated.',
		// 		'success'
		// 		)
		// 		Fire.$emit('afterCreate');
		// 		this.$Progress.finish();
		// 	Fire.$emit('afterCreate');
		// 	})
		// 	.catch(() => {
		// 		this.$Progress.fail();
		// 	})
		// },
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
			axios.get('/api/hajj/'+this.wid)
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