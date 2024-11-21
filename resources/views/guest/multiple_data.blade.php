@extends('layout.guest')

@section('guest')

<section class="schedule">
                  <div class="col-lg-4 col-md-12 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                {{-- <i class="icofont-ui-clock"></i> --}}
                            </div>
                            <div class="single-content">
                            <h2>Multipel data</h2>
                            <p>{!! $data->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!--/End Start schedule Area -->
