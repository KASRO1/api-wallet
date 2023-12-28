<section class="faq pb-70">
    <div class="container">
        <div class="section-title"><br><br>
            <h2>@lang('app.faq')</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    @foreach(__('app.questions') as $index => $item)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-question btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                        <i class="fas fa-question mr-2"></i> {!! $item['q'] !!}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{ $index }}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $index }}" data-parent="#accordionExample">
                                <div class="card-body pt-0 pl-5">
                                    {!! $item['a'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
