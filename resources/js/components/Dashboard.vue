<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                      <span class="info-box-icon bg-info elevation-1"><i class="ion-ios-people"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Hajj</span>
                        <span class="info-box-number">
                            
                          {{hajj.length}}
                          <!-- <small>%</small> -->
                      </span>
                            
                    <a href="#">&nbsp;</a>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="ion-ios-people"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Umrah</span>
                <span class="info-box-number">
                <!-- {{treatments.length}} -->
              </span>
              <!-- <router-link to="/brace" class="small-box-footer">View Details
                  <i class="fas fa-arrow-right"></i>
                </router-link> -->
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-primary elevation-1"><i class="ion-ios-search-strong"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Search</span>
            <span class="info-box-number">
              <!-- {{extraction.length}} -->
            </span>
              <router-link to="/hajjDocuments" class="small-box-footer">View Details
                  <!-- <i class="ion-ios-arrow-forward"></i> -->
                </router-link>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<!-- <div class="card card-primary card-outline col-md-6">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle" src="" alt="User profile picture">
    </div>

    <h3 class="profile-username text-center">Nina Mcintsssire</h3>

    <p class="text-muted text-center">Dentist</p>

    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Followers</b> <a class="float-right">1,322</a>
      </li>
      <li class="list-group-item">
        <b>Following</b> <a class="float-right">543</a>
      </li>
      <li class="list-group-item">
        <b>Friends</b> <a class="float-right">13,287</a>
      </li>
    </ul>

    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
  </div> -->
  <!-- /.card-body -->
</div>


<!-- /.col -->
</div>
</div>
</div>
</template>

<script>
export default {
  data() {
    return {
      hajj: {},
    }
  },
  methods: {
    load()
    {
      axios.get('api/hajjTotal').then(({data}) => (this.hajj = data.data));
    }
  },
  created()
	{	
    this.load();
		// axios.get('api/profile')
		// .then(({ data }) => (this.form.fill(data)));
	}
}
</script>
