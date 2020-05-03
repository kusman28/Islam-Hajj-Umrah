<template>
	<div class="container">
		<!-- Main content -->
        
        <!-- Timelime example  -->
		<h3 class="card-title mt-4">History</h3>
        <div class="row">
          <div class="col-md-8 mb-4">

            <!-- The time line -->
            <ul class="timeline" v-for="activity in activities" :key="activity.id">

    <!-- timeline time label -->
    <br>
    <li class="time-label">
        <span class="bg-success">
            {{activity.updated_at | myDate}}
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <!-- <i class="fa fa-history"></i> -->
        <div class="timeline-item">
            <span class="time text-primary"><i class="fa fa-clock-o"></i> {{activity.created_at | myTime}}</span>
            <h3 class="timeline-header"><a href="#">{{activity.description}}</a></h3>
            <div class="timeline-body">
                <b>{{activity.properties.attributes.fullname}}</b>
            </div>

            <div class="timeline-footer">
                <router-link v-bind:to="/hajjDocumentsDetails/+activity.subject_id" class="btn btn-primary btn-sm">View Details</router-link>
            </div>
        </div>
        <!-- <i class="fa fa-clock bg-info"></i> -->
    </li>
    <br>
    <!-- END timeline item -->

    <li>
    	<i class="fa fa-clock bg-info"></i>
    </li>

</ul>
          </div>
          <!-- /.col -->
        </div>
      <!-- /.timeline -->
	</div>
</template>

<script>
	export default {
        data (){
            return {
                activities: {},
            }
        },
        created(){
            // this.load();
			axios.get('/api/activities').then(response => {
				this.activities = response.data;
			})
		}
	}
</script>