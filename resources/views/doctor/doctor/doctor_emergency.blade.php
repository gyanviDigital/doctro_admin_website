@extends('layout.mainlayout_admin',['activePage' => 'schedule'])

@section('title',__('Schedule'))
<style>
        /* body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */
        .form-container {
            background: white;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 20px;
        }
        .btn-primary {
            width: 100%;
            background: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
</style>

@section('content')

<section class="section">
@include('layout.breadcrumb',[
        'title' => __('doctor Emergency Slot'),
    ])

  <table class="table">
  <thead>
   <div class="" style="display: flex; justify-content:space-between; padding-right: 100px; margin-bottom:20px;">
    <div class=""></div>
    <div class=""> <button  onclick="open_form()" class="" style="padding: 4px 8px; color:white; background-color:green;">Add</button></div>
   </div>
    <tr>
      <th scope="col">S.no.</th>
      <th scope="col">Date</th>
      <th scope="col">Slot No.</th>
      <th scope="col">Fee</th>
      <th scope="col"> Details</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @php $sno=1;
    @endphp
    @foreach($slotData as $arr)
    <tr>
      <th scope="row">{{$sno,$sno++;}}</th>
      <td>{{$arr->created_at}}</td>
      <td>{{$arr->slot_no}}</td>
      <td>{{$arr->fee}}</td>
      
      <td> <a href="{{url('delete-emergency',$arr->id)}}" style="color: red;" >Delete</a></td>
      </tr>
      @endforeach
     
  </tbody>
</table>
<div class="" style="width: 100%; display:grid; place-items:center;">
<div class="form-container" style="display: none;" id="add_form">
        <h2 class="form-title text-center">Add Slot</h2>
        <form action="{{url('add_emergency')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="slot_no" class="form-label">Slot Number</label>
                <input type="number" class="form-control" id="slot_no" name="slot_no" placeholder="Enter slot number" required>
            </div>
            <div class="mb-3">
                <label for="fee" class="form-label">Fee</label>
                <input type="number" step="0.01" class="form-control" id="fee" name="fee" placeholder="Enter fee amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</section>
<script>
    function open_form(){
        document.getElementById('add_form').style.display='block';
    }
</script>
@endsection
