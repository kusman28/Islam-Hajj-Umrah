<template>
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-6 mt-3">
            <h4>Umrah Registrants</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buttons</li>
            </ol>
          </div> -->
			<div class="col-12 mt-4">
				<div class="card">
					<div class="card-header">
						<h5>Umrah Pending Registration</h5>
						<div class="card-tools">
                		<!-- <button type="submit" class="btn btn-success btn-sm" @click="newModal">Add Patient <i class="fas fa-user-plus"></i></button> -->
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body table-responsive p-0">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Picture</th>
									<th>Name of Registrants</th>
									<th>Date of Registration</th>
									<!-- <th>Address</th> -->
									<th>Gender</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr v-for="pending in pendings" :key="pending.id">
									<td><img class="img-size-50" v-bind:src="'/images/picture/'+pending.picture"></td>
									<td>{{pending.firstname | upCase}} {{pending.middlename | upCase}} {{pending.lastname | upCase}}</td>
									<td>{{pending.created_at | myDate}}</td>
									<td>{{pending.gender}}</td>
									<!-- <td>
                                        <img class="img-size-50" v-bind:src="'/images/picture/'+pending.picture">
                                    </td> -->
									<td><span class="badge badge-success"> {{pending.status}}</span></td>
									<!-- <td><span :class="[pending.status === 'Pending' ? 'badge-success' : (pending.status === 'Pending'?'badge-warning':'badge-primary'), 'badge badge-pill']">{{pending.type | upCase}}</span> 
									</td>-->
			                      <td>
                                    <router-link v-bind:to="'pendingUmrahRegistration/'+pending.id" class="btn btn-primary btn-sm">View Details &nbsp;
                                        <i class="ion-ios-redo"></i>
                                    </router-link>
			                      	<!-- <a v-bind:href="'pendingRegistration/'+pending.id" class="btn btn-primary btn-sm">View Details &nbsp;
			                      		<i class="ion-ios-redo"></i>
			                      	</a> -->
			                      	<!-- <a href="#" @click="deletePatient(pending.id)">
			                      		<i class="fas fa-trash red"></i>
			                      	</a> -->
			                      </td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="text-center" v-if="pendings.length == 0">No Data<br>
						<svg id="f20e0c25-d928-42cc-98d1-13cc230663ea" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="100" viewBox="0 0 820.16 780.81"><defs><linearGradient id="07332201-7176-49c2-9908-6dc4a39c4716" x1="539.63" y1="734.6" x2="539.63" y2="151.19" gradientTransform="translate(-3.62 1.57)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.54" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient><linearGradient id="0ee1ab3f-7ba2-4205-9d4a-9606ad702253" x1="540.17" y1="180.2" x2="540.17" y2="130.75" gradientTransform="translate(-63.92 7.85)" xlink:href="#07332201-7176-49c2-9908-6dc4a39c4716"/><linearGradient id="abca9755-bed1-4a97-b027-7f02ee3ffa09" x1="540.17" y1="140.86" x2="540.17" y2="82.43" gradientTransform="translate(-84.51 124.6) rotate(-12.11)" xlink:href="#07332201-7176-49c2-9908-6dc4a39c4716"/><linearGradient id="2632d424-e666-4ee4-9508-a494957e14ab" x1="476.4" y1="710.53" x2="476.4" y2="127.12" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#07332201-7176-49c2-9908-6dc4a39c4716"/><linearGradient id="97571ef7-1c83-4e06-b701-c2e47e77dca3" x1="476.94" y1="156.13" x2="476.94" y2="106.68" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#07332201-7176-49c2-9908-6dc4a39c4716"/><linearGradient id="7d32e13e-a0c7-49c4-af0e-066a2f8cb76e" x1="666.86" y1="176.39" x2="666.86" y2="117.95" gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#07332201-7176-49c2-9908-6dc4a39c4716"/></defs><title>no data</title><rect x="317.5" y="142.55" width="437.02" height="603.82" transform="translate(-271.22 62.72) rotate(-12.11)" fill="#e0e0e0"/><g opacity="0.5"><rect x="324.89" y="152.76" width="422.25" height="583.41" transform="translate(-271.22 62.72) rotate(-12.11)" fill="url(#07332201-7176-49c2-9908-6dc4a39c4716)"/></g><rect x="329.81" y="157.1" width="411.5" height="570.52" transform="translate(-270.79 62.58) rotate(-12.11)" fill="#fafafa"/><rect x="374.18" y="138.6" width="204.14" height="49.45" transform="translate(-213.58 43.93) rotate(-12.11)" fill="url(#0ee1ab3f-7ba2-4205-9d4a-9606ad702253)"/><path d="M460.93,91.9c-15.41,3.31-25.16,18.78-21.77,34.55s18.62,25.89,34,22.58,25.16-18.78,21.77-34.55S476.34,88.59,460.93,91.9ZM470.6,137A16.86,16.86,0,1,1,483.16,117,16.66,16.66,0,0,1,470.6,137Z" transform="translate(-189.92 -59.59)" fill="url(#abca9755-bed1-4a97-b027-7f02ee3ffa09)"/><rect x="375.66" y="136.55" width="199.84" height="47.27" transform="translate(-212.94 43.72) rotate(-12.11)" fill="#00bfa6"/><path d="M460.93,91.9a27.93,27.93,0,1,0,33.17,21.45A27.93,27.93,0,0,0,460.93,91.9ZM470.17,135a16.12,16.12,0,1,1,12.38-19.14A16.12,16.12,0,0,1,470.17,135Z" transform="translate(-189.92 -59.59)" fill="#00bfa6"/><rect x="257.89" y="116.91" width="437.02" height="603.82" fill="#e0e0e0"/><g opacity="0.5"><rect x="265.28" y="127.12" width="422.25" height="583.41" fill="url(#2632d424-e666-4ee4-9508-a494957e14ab)"/></g><rect x="270.65" y="131.42" width="411.5" height="570.52" fill="#fff"/><rect x="374.87" y="106.68" width="204.14" height="49.45" fill="url(#97571ef7-1c83-4e06-b701-c2e47e77dca3)"/><path d="M666.86,118c-15.76,0-28.54,13.08-28.54,29.22s12.78,29.22,28.54,29.22,28.54-13.08,28.54-29.22S682.62,118,666.86,118Zm0,46.08a16.86,16.86,0,1,1,16.46-16.86A16.66,16.66,0,0,1,666.86,164Z" transform="translate(-189.92 -59.59)" fill="url(#7d32e13e-a0c7-49c4-af0e-066a2f8cb76e)"/><rect x="377.02" y="104.56" width="199.84" height="47.27" fill="#00bfa6"/><path d="M666.86,118a27.93,27.93,0,1,0,27.93,27.93A27.93,27.93,0,0,0,666.86,118Zm0,44.05A16.12,16.12,0,1,1,683,145.89,16.12,16.12,0,0,1,666.86,162Z" transform="translate(-189.92 -59.59)" fill="#00bfa6"/><g opacity="0.5"><rect x="15.27" y="737.05" width="3.76" height="21.33" fill="#47e6b1"/><rect x="205.19" y="796.65" width="3.76" height="21.33" transform="translate(824.47 540.65) rotate(90)" fill="#47e6b1"/></g><g opacity="0.5"><rect x="451.49" width="3.76" height="21.33" fill="#47e6b1"/><rect x="641.4" y="59.59" width="3.76" height="21.33" transform="translate(523.63 -632.62) rotate(90)" fill="#47e6b1"/></g><path d="M961,832.15a4.61,4.61,0,0,1-2.57-5.57,2.22,2.22,0,0,0,.1-.51h0a2.31,2.31,0,0,0-4.15-1.53h0a2.22,2.22,0,0,0-.26.45,4.61,4.61,0,0,1-5.57,2.57,2.22,2.22,0,0,0-.51-.1h0a2.31,2.31,0,0,0-1.53,4.15h0a2.22,2.22,0,0,0,.45.26,4.61,4.61,0,0,1,2.57,5.57,2.22,2.22,0,0,0-.1.51h0a2.31,2.31,0,0,0,4.15,1.53h0a2.22,2.22,0,0,0,.26-.45,4.61,4.61,0,0,1,5.57-2.57,2.22,2.22,0,0,0,.51.1h0a2.31,2.31,0,0,0,1.53-4.15h0A2.22,2.22,0,0,0,961,832.15Z" transform="translate(-189.92 -59.59)" fill="#4d8af0" opacity="0.5"/><path d="M326.59,627.09a4.61,4.61,0,0,1-2.57-5.57,2.22,2.22,0,0,0,.1-.51h0a2.31,2.31,0,0,0-4.15-1.53h0a2.22,2.22,0,0,0-.26.45,4.61,4.61,0,0,1-5.57,2.57,2.22,2.22,0,0,0-.51-.1h0a2.31,2.31,0,0,0-1.53,4.15h0a2.22,2.22,0,0,0,.45.26,4.61,4.61,0,0,1,2.57,5.57,2.22,2.22,0,0,0-.1.51h0a2.31,2.31,0,0,0,4.15,1.53h0a2.22,2.22,0,0,0,.26-.45A4.61,4.61,0,0,1,325,631.4a2.22,2.22,0,0,0,.51.1h0a2.31,2.31,0,0,0,1.53-4.15h0A2.22,2.22,0,0,0,326.59,627.09Z" transform="translate(-189.92 -59.59)" fill="#fdd835" opacity="0.5"/><path d="M855,127.77a4.61,4.61,0,0,1-2.57-5.57,2.22,2.22,0,0,0,.1-.51h0a2.31,2.31,0,0,0-4.15-1.53h0a2.22,2.22,0,0,0-.26.45,4.61,4.61,0,0,1-5.57,2.57,2.22,2.22,0,0,0-.51-.1h0a2.31,2.31,0,0,0-1.53,4.15h0a2.22,2.22,0,0,0,.45.26,4.61,4.61,0,0,1,2.57,5.57,2.22,2.22,0,0,0-.1.51h0a2.31,2.31,0,0,0,4.15,1.53h0a2.22,2.22,0,0,0,.26-.45,4.61,4.61,0,0,1,5.57-2.57,2.22,2.22,0,0,0,.51.1h0a2.31,2.31,0,0,0,1.53-4.15h0A2.22,2.22,0,0,0,855,127.77Z" transform="translate(-189.92 -59.59)" fill="#fdd835" opacity="0.5"/><circle cx="812.64" cy="314.47" r="7.53" fill="#f55f44" opacity="0.5"/><circle cx="230.73" cy="746.65" r="7.53" fill="#f55f44" opacity="0.5"/><circle cx="735.31" cy="477.23" r="7.53" fill="#f55f44" opacity="0.5"/><circle cx="87.14" cy="96.35" r="7.53" fill="#4d8af0" opacity="0.5"/><circle cx="7.53" cy="301.76" r="7.53" fill="#47e6b1" opacity="0.5"/></svg>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>


		<!-- Modal -->
        <!-- <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
        	<div class="modal-dialog modal-dialog-centered" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        				<h5 v-show="!editmode" class="modal-title" id="addNewLabel">Add Patient</h5>
        				<h5 v-show="editmode" class="modal-title" id="addNewLabel">Edit Patient</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        					<span aria-hidden="true">&times;</span>
        				</button>
        			</div>
        			<form @submit.prevent="editmode ? updatePatient() : createPatient()">
        			<div class="modal-body">
        				<div class="form-group">
        					<input v-model="form.firstname" type="text" name="firstname"
        					placeholder="Firstname" 
        					class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('firstname') }">
        					<has-error :form="form" field="firstname"></has-error>
        				</div>
        				<div class="form-group">
        					<input v-model="form.middlename" type="text" name="middlename"
        					placeholder="Middlename" 
        					class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('middlename') }">
        					<has-error :form="form" field="middlename"></has-error>
        				</div>
        				<div class="form-group">
        					<input v-model="form.lastname" type="text" name="lastname"
        					placeholder="Lastname" 
        					class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('lastname') }">
        					<has-error :form="form" field="lastname"></has-error>
        				</div>
        				<div class="form-group">
        					<input v-model="form.age" type="text" name="age"
        					placeholder="Age" 
        					class="form-control" :class="{ 'is-invalid': form.errors.has('age') }">
        					<has-error :form="form" field="age"></has-error>
        				</div>
        				<div class="form-group">
        					<input v-model="form.address" type="text" name="address"
        					placeholder="Address" 
        					class="form-control ucfirst" :class="{ 'is-invalid': form.errors.has('address') }">
        					<has-error :form="form" field="address"></has-error>
        				</div>
        				<div class="form-group">
        					<input v-model="form.contact_no" type="text" name="contact_no"
        					placeholder="Contact No." 
        					class="form-control" :class="{ 'is-invalid': form.errors.has('contact_no') }">
        					<has-error :form="form" field="contact_no"></has-error>
        				</div>
        				<div class="form-group">
        					<select name="type" v-model="form.type" id="type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
        						<option value="">Patient Type</option>
        						<option value="Brace">Brace</option>
        						<option value="Extraction">Extraction</option>
        						<option value="Denture">Denture</option>
        					</select>
        					<has-error :form="form" field="type"></has-error>
        				</div>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Close</button>
        				<button v-show="editmode" type="submit" class="btn btn-primary btn-flat">Update</button>
        				<button v-show="!editmode" type="submit" class="btn btn-success btn-flat">Save</button>
        			</div>
        			</form>
        		</div>
        	</div>
        </div> -->

	</div>
</template>
<script>

export default {
	data() {
		return {
			pendings: {},
			// hajj: {},
			// form: new Form({
			// 	id: '',
			// 	firstname: '',
			// 	middlename: '',
			// 	lastname: '',
			// 	gender: '',
			// 	created_at: '',
			// 	picture: '',
			// 	status: ''
			// })
		}
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
            axios.get('api/umrah').then(({ data }) => (this.pendings = data.data));
            
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
		this.pendingRegistration();
		// Fire.$on('afterCreate',() => {
		// 	this.pendingRegistration();
		// });

	},
}
</script>