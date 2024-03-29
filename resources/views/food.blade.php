<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of foods with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $data)
                    <form action="{{ url('addcart', $data->id) }}" method="POST">
                        @csrf

                        <div class="item">
                            <div style="background-image: url('foodimage/{{ $data->image }}')" class='card'>
                                <div class="price">
                                    <h6>{{ $data->price }} dh</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $data->title }}</h1>
                                    <p class='description'>{{ $data->description }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                    class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>

                            @auth

                                @if (Auth::User()->user_type === '0')

                                    <input type="number" name="quantity" value="1" min="1"
                                        class="input-group qty form-control" min="1" aria-label="Quantité"
                                        style="display: block;">
                                    {{-- <input type="number" name="quantity" min="1" value="1" style="width:170px;" id=""> --}}
                                    {{-- <input type="submit" style="background-color:#FB5849;" value="Add Cart"> --}}
                                    <button type="submit" class="btn btn-danger ml-5 mt-2" style="max-width: 100px;">Add
                                        Cart</button>

                                @endif
                            @endauth
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
