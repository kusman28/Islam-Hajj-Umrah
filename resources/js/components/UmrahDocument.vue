<style scoped>
a {
  color: inherit;
}

.router-link-exact-active {
  background: yellow;
  border-radius: 5px;
  color: red;
  font-style: italic;
}
</style>
<template>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-lg-offset-4">
              <form class="form-inline mt-3 text-center">
                  <div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                      <button class="btn btn-navbar btn-success" type="submit">
                      <i class="ion-ios-search-strong"></i>
                      </button>
                      </div>
                  </div>
              </form>
            </div>
        </div>
        <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch"
        v-for="umrah in umrahDocx" :key="umrah.id">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Umrah Document
                </div>
                <div class="card-body pt-0 mt-4">
                  <div class="row">
                    <div class="col-5 text-center">
                      <img v-bind:src="'/images/picture/'+umrah.picture" alt="" class="img-circle img-fluid">
                    </div>
                    <div class="col-7">
                      <h2 class="lead"><b>{{umrah.fullname}}</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> {{umrah.job}} / {{umrah.company}} / {{umrah.contact_company}}</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="ion-ios-location"></i></span> Address: {{umrah.address}}</li>
                        <li class="small"><span class="fa-li"><i class="ion-android-call"></i></span> Phone #: {{umrah.mobile_no}}</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <router-link v-bind:to="'umrahDocumentsDetails/'+umrah.id" class="btn btn-outline-success btn-sm">View Details &nbsp;
                        <i class="ion-ios-redo"></i>
                    </router-link>
                    <div class="btn-group">
                    <button type="button" class="btn-flat btn btn-sm btn-primary">Download</button>
                    <button type="button" class="btn btn-sm btn-primary ion-ios-arrow-down-toggle ion-ios-arrow-down" data-toggle="dropdown">
                    </button>
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a v-bind:href="'images/picture/'+umrah.picture" class="dropdown-item" download>2x2 Picture</a>
                        <a v-bind:href="'images/iqama/'+umrah.iqama_pic" class="dropdown-item" download>Iqama</a>
                        <a v-bind:href="'images/passport/'+umrah.passport_pic" class="dropdown-item" download>Passport</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a> -->
                      </div>
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
            umrahDocx: {},
        }
    },
    methods: {
        umrahDocuments() {
            axios.get('api/umrahDocx').then(({data}) => (this.umrahDocx = data.data));
        }
    },
    created() {
        this.umrahDocuments();
    }
}
</script>