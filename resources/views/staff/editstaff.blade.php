@extends('layouts.master')

@section('title')
    Staff |  Dashboard
@endsection





@section('main-content')


<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Create New Staff</h4>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">
           <form method="POST" action="{{ route('staff.update',$staff->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
                <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" class="form-control" name="fname" value="<?=$staff->fname?>">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="lname" value="<?=$staff->lname?>">
                    </div>
                </div>
                <label for="tel-text" class="sr-only">Telephone</label>
                <input id="tel-text" type="tel" name="phone" value="<?=$staff->phone?>" class="form-control" required>
                <br>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="nextkin" value="<?=$staff->nextkin?>" class="form-control" required>
                <br>
                <label for="e-text" class="sr-only">Email</label>
                <input id="e-text" type="email" name="email" value="<?=$staff->email?>" class="form-control" required>
                <br>
                <input id="t-text" type="text" name="street" value="<?=$staff->street?>" class="form-control" required>
                <br>
                <div class="form-row mb-4">
                    <div class="col-7">
                        <input type="text" name="city" class="form-control" value="<?=$staff->city?>" required>
                    </div>
                    <div class="col">
                        <input type="text" name="state" class="form-control" value="<?=$staff->state?>" required>
                    </div>
                    <div class="col">
                        <input type="text" name="zipcode" class="form-control" value="<?=$staff->zipcode?>" required>
                    </div>
                </div>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="experience1" placeholder="Previous Work Experience 1"  value="<?=$staff->experience1?>" class="form-control" >
                <br>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="experience2" placeholder="Previous Work Experience 2" value="<?=$staff->experience2?>" class="form-control" >
                <br>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="experience3" placeholder="Previous Work Experience 3" value="<?=$staff->experience3?>" class="form-control" >
                <br>
                <label for="t-text" class="sr-only">Salary</label>
                <textarea id="t-text" type="text" name="salary" value="<?=$staff->salary?>" class="form-control" ></textarea>
                <br>
                <label for="t-text" class="sr-only">Skills</label>
                <textarea id="t-text" type="text" name="skills" value="<?=$staff->skills?>" class="form-control" ></textarea>
                <br>
                <label for="t-text" class="sr-only">Qualification</label>
                <textarea id="t-text" type="text" name="qualification" value="<?=$staff->qualification?>" class="form-control" ></textarea>
                <br>
                <select class="custom-select mb-4" name="gender">
                    <option selected>{{$staff->gender}}</option>
                    <option name="gender" value="male">Male</option>
                    <option name="gender" value="female">Female</option>
                </select>
                <br>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" value="{{$staff->cover_image}}" name="cover_image">
                <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br>
                <br>
                <div class="col-md-3">
                    @if($staff->cover_image)
                    <img src="{{ url('storage/storage/' . $staff->cover_image) }}" style="width: 70%;height:80%" />
                    @endif
                </div>
                    <br>
                <br>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>
 
        </div>
    </div>
</div>
            

@endsection

@section('scripts')
    
@endsection