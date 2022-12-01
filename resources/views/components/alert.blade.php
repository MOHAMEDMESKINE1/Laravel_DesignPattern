<div>
    <div  
    {{$attributes->merge(['class' => 'alert py-1 px-1 alert-dismissible fade show'])}} 
    role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4 class="alert-heading">Success</h4>
        <p>{{$slot}} </p>
    </div>
    
</div>