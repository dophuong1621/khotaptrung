@extends('users.layouts_user.home')
@section('content')
    <div class="main-content">
        <div class="content">
            {{-- box1 --}}
            <div class="box1">
                <div class="img-home">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1" style="background-color: white; ">
                            </button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="https://cdns.diongame.com/static/image-3659d247-c6ef-4b72-87ef-9bce6e327f8e.jpeg"
                                    class="d-block w-100 img-h " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="bxh-home">
                    <div class="title-h d-flex fw-7 bg-box">
                        <div class="top-nap pb-1 pe-1 ps-1">
                            <span class="t-top uppercase t-color fw-8">Top Nạp T.2</span>
                            <div class="tc d-flex justify-content-center">
                                <button class="t-tc uppercase fw-7 text-white pe-2 ps-2">Thẻ cào</button>
                            </div>
                        </div>
                        <div class="sk-new d-flex bg-box-gray">
                            <i class="fa-gift fa gift"></i>
                            <button class="uppercase t-sk text-lg fw-8 t-sm">Sự kiện mới</button>
                        </div>
                    </div>
                    <div class="content-h pt-2 pb-2 bg-box position-relative">
                        <div class="t-ct-h d-flex justify-content-center d-none">Chưa có thông báo mới</div>
                        <div class="nt-ct-h">
                            <div class="nt-top overflow-auto mb-3">
                                <div class="px-2 d-flex justify-content-between align-items-center mb-025">
                                    <div class="topl d-flex">
                                        <i class="bi-octagon-fill bi top1 position-relative"><span
                                                class="text-white nub-top">1</span></i>
                                        <span class="nub fw-7">ID 1633630</span>
                                    </div>
                                    <div class="fw-7 text-lg text-white">
                                        <span class="dx w-8r py-1 text-white br-025 text-center d-inline-block text-sm">
                                            3,300,000
                                            <span class="text-xs"><small>đ</small></span></span>
                                    </div>
                                </div>
                                <div class="px-2 d-flex justify-content-between align-items-center mb-025">
                                    <div class="topl d-flex">
                                        <i class="bi-octagon-fill bi top2 position-relative"><span
                                                class="text-white nub-top">2</span></i>
                                        <span class="nub fw-7">ID 1640365</span>
                                    </div>
                                    <div class="fw-7 text-lg text-white">
                                        <span class="dx w-8r py-1 text-white br-025 text-center d-inline-block text-sm">
                                            1,820,000
                                            <span class="text-xs"><small>đ</small></span></span>
                                    </div>
                                </div>
                                <div class="px-2 d-flex justify-content-between align-items-center mb-025">
                                    <div class="topl d-flex">
                                        <i class="bi-octagon-fill bi top3 position-relative"><span
                                                class="text-white nub-top">3</span></i>
                                        <span class="nub fw-7">ID 1615702</span>
                                    </div>
                                    <div class="fw-7 text-lg text-white">
                                        <span class="dx w-8r py-1 text-white br-025 text-center d-inline-block text-sm">
                                            1,600,000
                                            <span class="text-xs"><small>đ</small></span></span>
                                    </div>
                                </div>
                                <div class="px-2 d-flex justify-content-between align-items-center mb-025">
                                    <div class="topl d-flex">
                                        <i class="bi-octagon-fill bi top4 position-relative"><span
                                                class="text-white nub-top">4</span></i>
                                        <span class="nub fw-7">ID 1532890</span>
                                    </div>
                                    <div class="fw-7 text-lg text-white">
                                        <span class="dx w-8r py-1 text-white br-025 text-center d-inline-block text-sm">
                                            1,400,000
                                            <span class="text-xs"><small>đ</small></span></span>
                                    </div>
                                </div>
                                <div class="px-2 d-flex justify-content-between align-items-center mb-025">
                                    <div class="topl d-flex">
                                        <i class="bi-octagon-fill bi top4 position-relative"><span
                                                class="text-white nub-top">5</span></i>
                                        <span class="nub fw-7">ID 1556165</span>
                                    </div>
                                    <div class="fw-7 text-lg text-white">
                                        <span class="dx w-8r py-1 text-white br-025 text-center d-inline-block text-sm">
                                            1,360,000
                                            <span class="text-xs"><small>đ</small></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b mt-1 mb-2 mx-auto"></div>
                            <div class="ntt">
                                <span class="t-skh pt-1 pb-1 ps-2 pe-2">Sắp tới sẽ có <b class="skh">sự kiện hot,</b> hãy
                                    chờ nhé!!!</span>
                            </div>
                            <div class="ntn d-flex justify-content-center">
                                <button class="btn-ntn text-white fw-8 uppercase">Nạp Thẻ Ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- box2 --}}
            <div class="box2 bg-box box b-shadow">
                <div class="mar">
                    <span class="ring ">
                        <i class="bx bxs-bell-ring"></i>
                    </span>
                    <span class="text-mar fw-7">
                        <marquee><strong>HIHAROBUX.COM - Khai Trương Tặng Robux, Random Gamepass, Trái ác quỷ v.v ở góc trái
                                màn hình - Bán robux hỗ trợ nhanh nhất thị trường</strong></marquee>
                    </span>
                </div>
            </div>
            {{-- box3 --}}
            <div class="box3">
                <div class="text-b3 bg-box box b-shadow">
                    <h3 class="uppercase t-box fw-7">dịch vụ roblox uy tín</h3>
                </div>
                <div class="ct-tk">
                    <div class="ct-box bg-box col">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-276ce799-cb65-49fe-bcfd-698b74f65041.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">dịch vụ mua robux vip</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">11k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale">
                                        <span>Rẻ nhất thị trường</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-fef42ab4-6850-47ac-97fc-2b17d262d4bb.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">robux chính hãng và premium</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">3.3k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale">
                                        <span>Duyệt đơn siêu tốc</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-9971a5d0-96f1-4912-8f1e-aa7582c41a98.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">gamepass roblox</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">64.6k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale">
                                        <span>Mua game pass siêu nhanh</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- box4 --}}
            <div class="box4">
                <div class="text-b4 bg-box box b-shadow">
                    <h3 class="uppercase t-box fw-7">danh mục tài khoản siêu ngon</h3>
                </div>
                <div class="ct-tk">
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">acc roblox tự chọn</h4>
                                <div class="mb-025 ct-t-tk mb-025">
                                    <span class="db-tk">Đã bán: <b class="t-color">105.7k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="btn-t-sale">
                                        <span>200.000đ</span>
                                    </button>
                                    <button class="t-sale ">
                                        <span>Giảm giá 50%</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-cd6358f9-0883-4f8c-92bf-c937d2b3794c.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">tài khoản đặc biệt 100% mochi hoặc leopard</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">24.9k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>500.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-8182b4b7-b625-4172-b347-6d8896bcb1bc.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6"> Acc Max Level Có Mochi V2</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">2.4k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>600.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Acc Max Level Có Mochi</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">24.9k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>300.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Combo Tài Khoản 1 - MaxLevel, 3-5 Mele V2</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">34.9k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>99.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Combo Tài Khoản 2 - MaxLevel - GodHuman </h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">11.8k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>149.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">THỬ VẬN MAY BLOX FRUITS 20K</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">71.4k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>Siêu giảm giá 20.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">THỬ VẬN MAY BLOX FRUITS 40K</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">54.6k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>Còn 40.000đ Acc ngon nhất thị trường</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">THỬ VẬN MAY BLOX FRUITS MAX LEVEL</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">21.1k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>120.000đ giảm 50%</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-8182b4b7-b625-4172-b347-6d8896bcb1bc.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Acc Max Level Có Leopard</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">17.7k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>300.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Combo Tài Khoản 3 - Godhuman - Combo CDK - Max
                                    level</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">14.7k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>199.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-d5695765-46bc-40c8-bee5-a9ca2ca4b5b1.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Random acc godhuman + 3 items mythical Cực Vip
                                </h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">16.3k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>300.000 giảm 50%</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- box5 --}}
            <div class="box5">
                <div class="text-b5 bg-box box b-shadow">
                    <h3 class="uppercase t-box fw-7">trò chơi khuyến mãi nhân dịp khai trương</h3>
                </div>
                <div class="ct-tk">
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-3b242b5c-46af-489a-9b3e-381fd9ce988e.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">vòng quay nổ hũ</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">81.3k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>12.000 Tỉ lệ trúng robux siêu cao</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-a2a7b13a-6d42-427b-876f-abed673c0f8b.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Lật thẻ vui vẻ</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">54.3k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span> 9,000đ Lật thẻ cơ hội trúng 2000 Robux </span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-143ee6f3-78ab-4414-b725-2fe5459ffb7c.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Máy đào robux</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">32.9k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span> 18,000đ Đào Robux Siêu Lời </span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ct-box bg-box col b-shadow">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-8cec02f2-286a-47f4-b5a9-ac0338c5a3b7.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">Máy gắp Robux</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">32.4k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale ">
                                        <span>20.000đ</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- box6 --}}
            <div class="box6">
                <div class="text-b6 bg-box box b-shadow">
                    <h3 class="uppercase t-box fw-7">danh mục tài khoản game khác</h3>
                </div>
                <div class="ct-tk">
                    <div class="ct-box bg-box col">
                        <a href="#" class="tk">
                            <div class="img-tk">
                                <img src="https://cdns.diongame.com/static/image-91c07ba2-9d01-4fdf-aec9-913f39c215ae.gif"
                                    class="im-tk">
                            </div>
                            <div class="text-tk">
                                <h4 class="title-tk uppercase fw-6">danh mục game liên quân</h4>
                                <div class="mb-025 ct-t-tk">
                                    <span class="db-tk">Đã bán: <b class="t-color">23.9k</b></span>
                                </div>
                                <div class="sale mt-2">
                                    <button class="t-sale">
                                        <span>Siêu giảm giá</span>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- animation --}}
            <div>
                <div class="position-fixed d-inline animation" style="bottom: 20px; left: 20px; z-index: 1000">
                    <a>
                        <img src="https://cdns.diongame.com/static/image-abe06c17-1fcf-4919-9021-50368f514235.gif"
                            class="h-16r cursor-pointer">
                    </a>
                    <button
                        class="position-absolute h-15r w-15r d-flex align-items-center justify-content-center br-025 dx text-white close"
                        style="left: 0px; top: 0px; z-index: 101">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(window).load(function() {
            $('.popup-home').css({
                'display': 'block'
            });
        })
    </script>
@endsection
