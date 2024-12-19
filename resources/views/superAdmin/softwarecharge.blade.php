@extends('layout.mainlayout_admin',['activePage' => 'treatments'])

@section('title',__('software Charge'))
@section('content')
<style>
    .notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4caf50;
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    font-family: Arial, sans-serif;
    transition: opacity 0.5s ease-in-out;
    opacity: 1;
}
.notification.hide {
    opacity: 0;
    pointer-events: none;
}
</style>
   <h2 class=" " style="padding: 8px; box-shadow:0px 0px 4px 1px gray; background-color:white; border-radius: 5px;">Software Charge</h2>
   <div class="" style="width: cover; height:400px; display:grid; place-items:center;">
   @if(session('success'))
<div id="notification" class="notification">
    {{ session('success') }}
</div>
@endif  
    <form action="{{url('software-charge-post')}}" method="post" class="" >
        @csrf
        <b>Software Charge ::{{$charge->price}} ₹</b><br>
<input type="number" name='price' value="" placeholder="Change the price ......" style="height:50px; padding:10px; " required>
<input type="submit" value="Submit" style="padding: 3px 7px; border-radius:6px; color:white; height:50px; padding:10px; background-color:green;">
    </form>
   </div>
   <script>
document.addEventListener('DOMContentLoaded', function () {
    const notification = document.getElementById('notification');
    if (notification) {
        setTimeout(() => {
            notification.classList.add('hide');
        }, 4000); // 4 seconds
    }
});
</script>
@endsection
