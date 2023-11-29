<div class="tab-pane fade show active" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">
    <div class="container-fluid">
        <div class="row">
            @foreach ($data['products'] as $key => $item)
                <div class="col-md-4 col-lg-3 pt-4 pb-4">
                    <div class="item">
                        <div class="work">
                            @php
                                $img = $item->image;
                            @endphp
                            <div class="img d-flex align-items-end justify-content-center"
                                style="background-image: url('{{ asset($img) }}');">
                                <div class="text w-100 text-center">
                                    <span class="cat ">{{ $item->name }}</span>
                                    <h3><a href="#">{{ $item->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
