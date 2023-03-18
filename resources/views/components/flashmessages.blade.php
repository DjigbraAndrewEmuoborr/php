<div class="content-body text-center">
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <span class="c-pointer" data-dismiss="alert">
            <i class="icofont-close-line"></i>
        </span>
    </div>
    @endif
    @if (session('danger') )
    <div class="alert alert-danger" role="alert">
        {{ session('danger') }}
        <span class="c-pointer" data-dismiss="alert">
            <i class="icofont-close-line"></i>
        </span>
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-info" role="alert">
        {!! session('success') !!}
        <span class="c-pointer" data-dismiss="alert">
            <i class="icofont-close-line"></i>
        </span>
    </div>
    
    @endif
</div>