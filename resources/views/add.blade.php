@extends("theme")

@section("content")
<div class="contianer">
<div class="row">
<div class="col col-12 col-lg-3 col-xxl-3"></div>
<div class="col col-12 col-lg-4 col-xxl-4">
<h4>ADD EMPLOYEE</h4>
<table class="table-borderless">
<tr>
    <td>Name</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td> Employee Code</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Disgination</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Salary</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Place</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Date of Birth</td>
    <td><input type="date" class="form-control"></td>
</tr>
<tr>
    <td>Place</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Pin</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Phone No</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-danger">SUBMIT</button></td>
</tr>
</table>
</div>
</div>
</div>

@endsection