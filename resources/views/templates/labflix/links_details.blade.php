@extends($activeTemplate.'layouts.frontend')
@section('content')
<section class="pb-80 pt-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @php echo $item->data_values->description @endphp
            </div>
        </div>
    </div>
</section>
@endsection
