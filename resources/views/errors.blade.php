
    @if(count($errors)>0)

    <div class="card">
        <div class="card-body bg-danger text-warning">
            <h1>Warning!</h1>
            Please fix the following:
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach                    
            </ul>
        </div>
    </div>
    @endif