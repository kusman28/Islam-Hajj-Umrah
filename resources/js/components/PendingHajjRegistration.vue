<template>
	<div class="container">
		<!-- <a class="btn btn-success btn-sm mt-2" href="#" @click="$router.go(-1)"><i class="ion-ios-arrow-back"></i> Back</a> -->
		<img 
            class="rounded mx-auto d-block"
            height="150px"
            src="/template/img/logo1.png">
            <button class="btn btn-primary float-right" @click="updateModal(hajj)">Verify Registration
                        <i class="ion-ios-information"></i>
            </button>
            <h4 class="mb-4">Hajj Registration Form</h4>
            <hr class="mb-4">            
            <!-- <form @submit.prevent="update()">     -->
            <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>First name</label>
                    <input 
                    type="text" 
                    class="form-control"
                    name="firstname"
                    :placeholder="[[ hajj.firstname ]]"
                    v-model="hajj.firstname"
                    :disabled="disabled == 1"
                    >
                    </div>
                  <div class="col-md-4 mb-3">
                    <label>Middle name</label>
                    <input type="text" 
                    class="form-control"
                    name="middlename"
                    :placeholder="[[ hajj.middlename ]]"
                    v-model="hajj.middlename"
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
                    v-model="hajj.lastname"
                    :disabled="disabled == 1"
                    >
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Gender</label>
                    <select class="form-control" v-model="hajj.gender" name="gender" :disabled="disabled == 1">
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
                    v-model="hajj.birthday"
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
                      v-model="hajj.email"
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
                      v-model="hajj.iqama_no"
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
                      v-model="hajj.iqama_exp_date"
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
                      v-model="hajj.passport_no" 
                      :disabled="disabled == 1"
                      >
                       </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input type="text" 
                      class="form-control"
                      name="passport_exp_date"
                      :placeholder="[[ hajj.passport_exp_date ]]"
                      v-model="hajj.passport_exp_date"
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
                      v-model="hajj.mobile_no"
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
                      v-model="hajj.whatsapp_no"
                      :disabled="disabled == 1"
                      >
                       </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Nationality</label>
                    <select class="form-control"
                    v-model="hajj.nationality"
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
                    v-model="hajj.address"
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
                    v-model="hajj.city"
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
                    v-model="hajj.job"
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
                    v-model="hajj.company"
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
                    v-model="hajj.contact_company"
                    :disabled="disabled == 1"
                    >
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label>2x2 Picture</label><br>
					  <a style="cursor: pointer;" @click="picture(hajj)">
                      <img class="img-thumbnail" v-bind:src="'/images/picture/'+hajj.picture">
					  </a>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label>Iqama Picture</label>
					  <a style="cursor: pointer;" @click="iqama(hajj)">
                      <img class="img-thumbnail" v-bind:src="'/images/iqama/'+hajj.iqama_pic">
					  </a>
                    </div>
                    <div class="col-md-4 mb-3">
						<a style="cursor: pointer;" @click="passport(hajj)">
                      <label>Passport Picture</label>
                      <img class="img-thumbnail" v-bind:src="'/images/passport/'+hajj.passport_pic">
						</a>
                    </div>
                </div>
                <hr>
                <!-- <div class="mb-5">
                    <button class="col-md-4 btn btn-primary" @click="updateModal(hajj)">Verify Registration
                        <i class="ion-ios-information"></i>
                    </button>
                </div> -->
            <!-- </form> -->

			<!-- Modal -->
				<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addNewLabel">Verify Registrant</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form @submit.prevent="update()">
							<div class="modal-body">
								<div class="form-row">
                    				<div class="col-md-4 mb-2">
									<small>Firstname</small>	
									<input v-model="form.firstname" type="text" name="firstname"
									placeholder="Firstname" 
									class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('firstname') }">
									<has-error :form="form" field="firstname"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Middlename</small>	
									<input v-model="form.middlename" type="text" name="middlename"
									placeholder="Middlename" 
									class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('middlename') }">
									<has-error :form="form" field="middlename"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Lastname</small>	
									<input v-model="form.lastname" type="text" name="lastname"
									placeholder="Lastname" 
									class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('lastname') }">
									<has-error :form="form" field="lastname"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-4 mb-2">
									<small>Gender</small>	
									<select name="type" v-model="form.gender" class="form-control" :class="{ 'is-invalid': form.errors.has('gender') }">
										<option value="">Select</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<has-error :form="form" field="gender"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Birthday</small>	
									<input v-model="form.birthday" type="date" name="birthday"
									class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('birthday') }">
									<has-error :form="form" field="birthday"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Email</small>	
									<input v-model="form.email" type="text" name="email"
									placeholder="Email" 
									class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('email') }">
									<has-error :form="form" field="email"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-6 mb-2">
									<small>Iqama No.</small>	
									<input v-model="form.iqama_no" type="text" name="iqama_no"
									class="form-control" :class="{ 'is-invalid': form.errors.has('iqama_no') }">
									<has-error :form="form" field="iqama_no"></has-error>
                    				</div>
                    				<div class="col-md-6 mb-2">
									<small>Expiration Date</small>	
									<input v-model="form.iqama_exp_date" type="date" name="iqama_exp_date"
									class="form-control" :class="{ 'is-invalid': form.errors.has('iqama_exp_date') }">
									<has-error :form="form" field="iqama_exp_date"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-6 mb-2">
									<small>Passport No.</small>	
									<input v-model="form.passport_no" type="text" name="passport_no"
									class="form-control" :class="{ 'is-invalid': form.errors.has('passport_no') }">
									<has-error :form="form" field="passport_no"></has-error>
                    				</div>
                    				<div class="col-md-6 mb-2">
									<small>Expiration Date</small>	
									<input v-model="form.passport_exp_date" type="date" name="passport_exp_date"
									class="form-control" :class="{ 'is-invalid': form.errors.has('passport_exp_date') }">
									<has-error :form="form" field="passport_exp_date"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-6 mb-2">
									<small>Mobile No.</small>	
									<input v-model="form.mobile_no" type="text" name="mobile_no"
									class="form-control" :class="{ 'is-invalid': form.errors.has('mobile_no') }">
									<has-error :form="form" field="mobile_no"></has-error>
                    				</div>
                    				<div class="col-md-6 mb-2">
									<small>WhatsApp</small>	
									<input v-model="form.whatsapp_no" type="text" name="whatsapp_no"
									class="form-control" :class="{ 'is-invalid': form.errors.has('whatsapp_no') }">
									<has-error :form="form" field="whatsapp_no"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-6 mb-2">
									<small>Nationality</small>	
									<select name="type" v-model="form.nationality" class="form-control" :class="{ 'is-invalid': form.errors.has('nationality') }">
										<option value="">Select</option>
										<option value="Filipino">Filipino</option>
										<option value="Saudi">Saudi</option>
									</select>
									<has-error :form="form" field="nationality"></has-error>
                    				</div>
                    				<div class="col-md-6 mb-2">
									<small>Address</small>	
									<select name="type" v-model="form.address" class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
										<option value="">Select</option>
										<option value="Philippines">Philippines</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
									</select>
									<has-error :form="form" field="address"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-6 mb-2">
									<small>City</small>	
									<input v-model="form.city" type="text" name="city"
									class="form-control" :class="{ 'is-invalid': form.errors.has('city') }">
									<has-error :form="form" field="city"></has-error>
                    				</div>
                    				<div class="col-md-6 mb-2">
									<small>Job</small>	
									<input v-model="form.job" type="text" name="job"
									class="form-control" :class="{ 'is-invalid': form.errors.has('job') }">
									<has-error :form="form" field="job"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-6 mb-2">
									<small>Company/Employer Name</small>	
									<input v-model="form.company" type="text" name="company"
									class="form-control" :class="{ 'is-invalid': form.errors.has('company') }">
									<has-error :form="form" field="company"></has-error>
                    				</div>
                    				<div class="col-md-6 mb-2">
									<small>Company/Employer Contact</small>	
									<input v-model="form.contact_company" type="text" name="contact_company"
									class="form-control" :class="{ 'is-invalid': form.errors.has('contact_company') }">
									<has-error :form="form" field="contact_company"></has-error>
                    				</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close
									<i class="ion-ios-close"></i>
								</button>
								<button type="submit" class="btn btn-success">Approve
									<i class="ion-ios-checkmark"></i>
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Modal Picture -->
				<div class="modal fade" id="picture" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 v-show="editmode" class="modal-title" id="addNewLabel">2x2 Picture</h5>
								<h5 v-show="!editmode" class="modal-title" id="addNewLabel">Iqama Picture</h5>
								<!-- <h5 class="modal-title" id="addNewLabel">2x2 Picture</h5> -->
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<div class="col-md-12 text-center">
									<img v-show="editmode" class="rounded img-fluid" v-bind:src="'/images/picture/'+hajj.picture">
									<img v-show="!editmode" class="rounded img-fluid" v-bind:src="'/images/iqama/'+hajj.iqama_pic">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Passport Picture -->
				<div class="modal fade" id="passport" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addNewLabel">Passport Picture</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<div class="col-md-12 text-center">
									<img  class="rounded img-fluid" v-bind:src="'/images/passport/'+hajj.passport_pic">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

        </div>
</template>
<script>

export default {
	data() {
		return {
			editmode: false,
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
			$('#addNew').modal('hide');
			let timerInterval
			swal.fire(
				{
				title: 'Approved',
				html: 'Registered successfully.',
				icon: 'success',
				timer: 2000,
				timerProgressBar: false,
				onBeforeOpen: () => {
					// swal.showLoading()
					timerInterval = setInterval(() => {
					const content = swal.getContent()
					if (content) {
						const b = content.querySelector('b')
						if (b) {
						b.textContent = swal.getTimerLeft()
						}
					}}, 100)},
				onClose: () => {
					clearInterval(timerInterval)
				}
				})
				.then((result) => {
				/* Read more about handling dismissals below */
				if (result.dismiss === swal.DismissReason.timer) {
					console.log('Registered successfully.')
				}
				})
			this.$Progress.finish();
			this.$router.push('/pendingHajj')
			})
			.catch(() => {
				this.$Progress.fail();
			})
		},
		updateModal(hajj){
			this.form.reset();
			$('#addNew').modal('show');
			this.form.fill(hajj);
		},
		picture(hajj){
			this.editmode = true;
			this.form.reset();
			$('#picture').modal('show');
			this.form.fill(hajj);
		},
		iqama(hajj){
			this.editmode = false;
			this.form.reset();
			$('#picture').modal('show');
			this.form.fill(hajj);
		},
		passport(hajj){
			this.editmode = false;
			this.form.reset();
			$('#passport').modal('show');
			this.form.fill(hajj);
		},
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