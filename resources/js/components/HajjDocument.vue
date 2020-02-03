<template>
    <div class="container">
        <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch"
        v-for="hajj in hajjDocx" :key="hajj.id">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Hajj Document
                </div>
                <div class="card-body pt-0 mt-4">
                  <div class="row">
                    <div class="col-5 text-center">
                      <img v-bind:src="'/images/picture/'+hajj.picture" alt="" class="img-circle img-fluid">
                    </div>
                    <div class="col-7">
                      <h2 class="lead"><b>{{hajj.fullname}}</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> {{hajj.job}} / {{hajj.company}} / {{hajj.contact_company}}</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="ion-ios-location"></i></span> Address: {{hajj.address}}</li>
                        <li class="small"><span class="fa-li"><i class="ion-android-call"></i></span> Phone #: {{hajj.mobile_no}}</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <button href="#" class="btn btn-sm btn-success">
                      <i class="ion-ios-printer"></i> Print
                    </button>
                    <div class="btn-group">
                    <button type="button" class="btn-flat btn btn-sm btn-primary">Download</button>
                    <button type="button" class="btn btn-sm btn-primary ion-ios-arrow-down-toggle ion-ios-arrow-down" data-toggle="dropdown">
                    </button>
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a v-bind:href="'images/picture/'+hajj.picture" class="dropdown-item" download>2x2 Picture</a>
                        <a v-bind:href="'images/iqama/'+hajj.iqama_pic" class="dropdown-item" download>Iqama</a>
                        <a v-bind:href="'images/passport/'+hajj.passport_pic" class="dropdown-item" download>Passport</a>
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
            hajjDocx: {},
        }
    },
    methods: {
        hajjDocuments() {
            axios.get('api/hajjDocx').then(({data}) => (this.hajjDocx = data.data));
        }
    },
    created() {
        this.hajjDocuments();
    }
}
</script>