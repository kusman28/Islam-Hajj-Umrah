<style scoped>
.modal {
    z-index: 100001 !important;
}
</style>
<template>
	<div class="container">
		<!-- <a @click="$router.go(-1)">back</a> -->
		<img 
            class="rounded mx-auto d-block"
            height="150px"
            src="/template/img/logo1.png">
			<div class="row float-right">
            <button class="btn btn-primary float-right" @click="updateModal(hajj)">Edit Form
                <i class="ion-ios-compose-outline"></i>
            </button>
			&nbsp;
            <a :href="'/pdfexport/' + hajj.id" target="_blank" rel="noopener" class="btn btn-success float-right">Print Certificate
                <i class="ion-printer"></i>
            </a>
			</div>
            <h2 class="mb-4 d-none d-sm-block">Hajj Form</h2>
            <a style="cursor: pointer;" @click="picture(hajj)">
            <img height="150px" class="col-md-3 mt-3 img-thumbnail float-right" v-bind:src="'/images/picture/'+hajj.picture">
            </a>
            <hr class="mb-4 d-none d-sm-block">  
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Full Name</label>
                    <input type="text" 
                    class="form-control"
                    name="middlename"
                    v-model="hajj.fullname"
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
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
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
                    <div class="col-md-4 mb-3">
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
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
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
                    <div class="col-md-4 mb-3">
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
                </div>
                <div class="form-row">
                    
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
                </div>
                <div class="form-row">
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
                  <div class="col-md-4 mb-3">
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
                  <div class="col-md-4 mb-3">
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
                    <div class="col-md-6 mb-3">
                      <label>Iqama Picture</label>
					  <a style="cursor: pointer;" @click="iqama(hajj)">
                      <img class="img-thumbnail" v-bind:src="'/images/iqama/'+hajj.iqama_pic">
					  </a>
                    </div>
                    <div class="col-md-6 mb-3">
						<a style="cursor: pointer;" @click="passport(hajj)">
                      <label>Passport Picture</label>
                      <img class="img-thumbnail" v-bind:src="'/images/passport/'+hajj.passport_pic">
						</a>
                    </div>
                </div>
                <hr>
                <!-- <div class="mb-5">
                    <a :href="'/pdfexport/' + hajj.id" class="col-md-4 btn btn-success">Print
                        <i class="ion-printer"></i>
                    </a>
                </div> -->
            <!-- </form> -->

			<!-- Modal -->
				<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-top" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="addNewLabel">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                        Information <i class="ion-ios-information"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                            Ticket <i class="ion-plane"></i>
                                            </a>
                                    </li>
                                    </ul>
                                </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form @submit.prevent="update()">
							<div class="modal-body">
                                
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                    				<div class="col-md-4 mb-2">
									<small>Nationality</small>	
									<select name="type" v-model="form.nationality" class="form-control" :class="{ 'is-invalid': form.errors.has('nationality') }">
										<option value="">Select</option>
										<option value="Filipino">Filipino</option>
										<option value="Saudi">Saudi</option>
									</select>
									<has-error :form="form" field="nationality"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Address</small>	
									<select name="type" v-model="form.address" class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
										<option value="">Select</option>
										<option value="Philippines">Philippines</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
									</select>
									<has-error :form="form" field="address"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>City</small>	
									<input v-model="form.city" type="text" name="city"
									class="form-control" :class="{ 'is-invalid': form.errors.has('city') }">
									<has-error :form="form" field="city"></has-error>
                    				</div>
								</div>
								<div class="form-row">
                    				<div class="col-md-4 mb-2">
									<small>Job</small>	
									<input v-model="form.job" type="text" name="job"
									class="form-control" :class="{ 'is-invalid': form.errors.has('job') }">
									<has-error :form="form" field="job"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Company/Employer Name</small>	
									<input v-model="form.company" type="text" name="company"
									class="form-control" :class="{ 'is-invalid': form.errors.has('company') }">
									<has-error :form="form" field="company"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Company/Employer Contact</small>	
									<input v-model="form.contact_company" type="text" name="contact_company"
									class="form-control" :class="{ 'is-invalid': form.errors.has('contact_company') }">
									<has-error :form="form" field="contact_company"></has-error>
                    				</div>
								</div>
                            </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-row">
                    				<div class="col-md-4 mb-2">
									<small>Hajj Type</small>	
									<select name="type" class="form-control">
										<option value="">Select</option>
										<option value="Tamattu">Tamattu</option>
										<option value="Qiran">Qiran</option>
										<option value="Ifrad">Ifrad</option>
									</select>
                    				</div>
                                </div>
                                <div class="form-row">
                    				<div class="col-md-4 mb-2">
									<small>Ticket No.</small>	
									<input type="text" name="contact_company"
									class="form-control">
									<has-error :form="form" field="contact_company"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Airline</small>	
									<input type="text" name="contact_company"
									class="form-control">
									<has-error :form="form" field="contact_company"></has-error>
                    				</div>
                                </div>
                                <div class="form-row">
                    				<div class="col-md-4 mb-2">
									<small>Date</small>	
									<input type="date" name="contact_company"
									class="form-control">
									<has-error :form="form" field="contact_company"></has-error>
                    				</div>
                    				<div class="col-md-4 mb-2">
									<small>Time</small>	
									<input type="time" name="contact_company"
									class="form-control">
									<has-error :form="form" field="contact_company"></has-error>
                    				</div>
                                </div>
                                </div>
                            </div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel
									<i class="ion-ios-close"></i>
								</button>
								<button type="submit" class="btn btn-success">Update
									<i class="ion-ios-checkmark"></i>
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Modal Picture -->
				<div class="modal fade bd-example-modal-lg" id="picture" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
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
				<div class="modal fade bd-example-modal-lg" id="passport" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
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
			this.form.put('/api/hajjdocx/'+this.id)
			.then(() => {
			$('#addNew').modal('hide');
			let timerInterval
			swal.fire(
				{
				title: 'Updated',
				html: 'Update successfully.',
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
			Fire.$emit('afterCreate');
			this.$Progress.finish();
			// this.$router.push('/hajjDocuments')
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
	created(){
		Fire.$on('afterCreate',() => {
			this.pendingRegistration();
		});

	},
}
</script>