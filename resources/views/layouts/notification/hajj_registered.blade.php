<router-link to="/pendingHajjRegistration/{{$notification->data['createdUser']['id']}}" target="_blank" class="dropdown-item">
    {{-- <a href="{{route('thread.show',$notification->data['thread']['id'])}}"> --}}
        <i class="ion-person mr-2"></i>
        <b>{{$notification->data['createdUser']['firstname']}}</b> just registered.
    <span class="float-right text-muted text-sm">{{$notification->created_at}}</span>
</router-link>