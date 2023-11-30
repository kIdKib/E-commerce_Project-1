<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Produits</h2>
        </div>
        <div class="top-product-style">
            {{-- <div class="product-tab-list3 text-center mb-80 nav product-menu-mrg" role="tablist">
                <a class="active" href="#electro1" data-bs-toggle="tab" role="tab">
                    <h4>Fiction </h4>
                </a>
                <a href="#electro2" data-bs-toggle="tab" role="tab">
                    <h4>Satire </h4>
                </a>
                <a href="#electro3" data-bs-toggle="tab" role="tab">
                    <h4>Anthologies</h4>
                </a>
            </div> --}}
            <div class="tab-content">
                <div class="tab-pane active show fade" id="electro1" role="tabpanel">
                    <div class="custom-row-2">

                        @php
                            $i = 0;
                        @endphp

                        @foreach ($product as $produit)

                            @php
                                $i++;
                                if ($i >= 3 && $i  <= 4 ) {
                                    continue;
                                } elseif ($i == 5) {
                                    $i = 0;
                                    continue;
                                }
                            @endphp

                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="{{ asset('upload/product/'.$produit->image)}}" alt="" style="height: 300px; object-fit:cover">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-bs-target="#exampleModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <form action="{{route('addProductCart')}}" method="POST">
                                                @csrf
                                                <input type="text" style="display: none" name='produit_id' value="{{$produit->id}}">
                                                <button class="animate-top" title="Add To Cart">
                                                    <i class="pe-7s-cart"></i>
                                                </button>
                                            </form>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">{{$produit->name}}</a></h4>
                                        <span>{{$produit->category->name}}</span>
                                        <h5>{{$produit->selling_price}}FCFA</h5>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="custom-col-style-2 custom-col-4">
                            <div class="product-wrapper product-border mb-24">
                                <div class="product-img-3">
                                    <a href="product-details.html">
                                        <img src="{{ asset('upload/product/'.$produit->image)}}" alt="" style="height: 300px; object-fit:cover">
                                    </a>
                                    <div class="product-action-right">
                                        <a class="animate-right" href="#" data-bs-target="#exampleModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                        <a class="animate-top" title="Add To Cart" href="#">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="animate-left" title="Wishlist" href="#">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-4 text-center">
                                    <div class="product-rating-4">
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                    <span>Headphone</span>
                                    <h5>$133.00</h5>
                                </div>
                            </div>
                        </div>

                        <div class="custom-col-style-2 custom-col-4">
                            <div class="product-wrapper product-border mb-24">
                                <div class="product-img-3">
                                    <a href="product-details.html">
                                        <img src="{{ asset('upload/product/'.$produit->image)}}" alt="" style="height: 300px; object-fit:cover">
                                    </a>
                                    <div class="product-action-right">
                                        <a class="animate-right" href="#" data-bs-target="#exampleModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                        <a class="animate-top" title="Add To Cart" href="#">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="animate-left" title="Wishlist" href="#">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-4 text-center">
                                    <div class="product-rating-4">
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                    <span>Headphone</span>
                                    <h5>$133.00</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
