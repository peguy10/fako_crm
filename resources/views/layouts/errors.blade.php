@if ($errors->any())
    <div class="alert alert-danger">
        <div>
            <div class="d-flex">
                <i class="fa-solid fa-face-frown me-5"></i>
                <span class="mt-1">{{$errors->first()}}</span>
            </div>
        </div>
    </div>
@endif
@if(session('success'))
<div class="alert alert-success">
    <div>
        <div class="d-flex text-white">
            <i class="fa-solid fa-check-circle me-5"></i>
            <span class="mt-1">{{ session('success') }}</span>
        </div>
    </div>
</div>
@endif 

@if(session('success1'))
<div class="alert alert-danger">
    <div>
        <div class="d-flex text-white">
            <i class="fa-solid fa-trash-alt me-5"></i>
            <span class="mt-1">{{ session('success1') }}</span>
        </div>
    </div>
</div>
@endif 
@if(session('edit'))
<div class="alert alert-warning">
    <div>
        <div class="d-flex text-white">
            <i class="fa-solid fa-edit me-5"></i>
            <span class="mt-1">{{ session('edit') }}</span>
        </div>
    </div>
</div>
@endif 