<a href="#" class="dropdown-item">
    {{-- <a href="{{route('thread.show',$notification->data['thread']['id'])}}"> --}}
        <i class="ion-person mr-2"></i>
        <b>{{$notification->data['createdUser']['fullname']}}</b> just registered.
    <span class="float-right text-muted text-sm">{{$notification->created_at}}</span>
    </a>