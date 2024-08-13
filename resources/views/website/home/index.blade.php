@extends('website.master')

@section('title')
    Home
@endsection


@section('body')
<!--home slider start-->
<section class="megastore-slide collection-banner section-py-space b-g-white">
    <div class="container-fluid">
        <div class="row mega-slide-block">
            <div class="col-xl-9 col-lg-12 ">
                <div class="row">
                    <div class="col-12">
                        <div class="slide-1 no-arrow">
                            @foreach($offers as $offer)
                            <div>
                                <div class="slide-main">
                                    <img src="{{asset($offer->image)}}" class="img-fluid bg-img" alt="mega-store">
                                    <div class="slide-contain">
                                        <div>
                                            <h4 class="text-white">{!! $offer->description !!}</h4>
                                            <h2 class="text-white">{{$offer->name}}</h2>
                                            <h3 class="text-white">save up to {{$offer->percentage}}% off</h3>
                                            <a href="{{route('product-offer', ['id' => $offer->id])}}" class="btn btn-rounded btn-md">
                                                Shop Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach($offer_one_products as $offer_one_product)
                    <div class="col-md-6">
                        <div class="collection-banner-main banner-18 banner-style7 collection-color13 p-left text-center">
                            <div class="collection-img">
                                <img src="{{asset($offer_one_product['image'])}}" class="img-fluid bg-img  " alt="banner">
                            </div>
                            <div class="collection-banner-contain ">
                                <div>
                                    <h3>{{$offer_one_product['name']}}</h3>
                                    <h4>speacial offer {{ $offer_one_product['percentage'] }}%</h4>
                                    <a href="{{ route('product.details',['id' => $offer_one_product['id']]) }}" class="btn btn-rounded btn-xs"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 ">
                <div class="row collection-p6">
                    @foreach($offer_two_products as $offer_two_product)
                    <div class="col-xl-12 col-lg-4 col-md-12">
                        <div class="collection-banner-main banner-17 banner-style7 collection-color14 p-left text-center">
                            <div class="collection-img">
                                <img src="{{asset($offer_two_product['image'])}}" class="img-fluid bg-img  " alt="banner">
                            </div>
                            <div class="collection-banner-contain ">
                                <div>
                                    <h3>{{ $offer_two_product['name'] }}</h3>
                                    <h4>special offer {{ $offer_two_product['percentage'] }}</h4>
                                    <a href="{{ route('product.details',['id' => $offer_two_product['id']]) }}" class="btn btn-rounded btn-xs"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--home slider end-->

<!-- services start -->
<section class="services2 section-pt-space">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pr-0">
                <div class="services-slide6 no-arrow">
                    <div>
                        <div class="services-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#5D9CEC;" d="M414.5,242.268h-59.855v74.996h59.851c11.009,0,21.314,9.429,33.245,20.346 c15.191,13.899,32.409,29.654,56.759,29.654h7.5v-7.5v-0.001v-0.001v-19.994C512,286.006,468.262,242.268,414.5,242.268z"></path><path style="fill:#4A89DC;" d="M414.5,242.268h-36.999c53.762,0,104.496,43.738,104.496,97.5v19.994v0.001v0.001v2.75 c6.814,2.936,14.248,4.75,22.503,4.75h7.5v-7.5v-0.001v-0.001v-19.994C512,286.006,468.262,242.268,414.5,242.268z"></path><path style="fill:#CCD1D9;" d="M406.996,242.268v74.996h7.5c2.528,0,5.018,0.517,7.5,1.415v-76.126 c-2.474-0.188-4.974-0.285-7.496-0.285L406.996,242.268L406.996,242.268z"></path><path d="M347.507,187.613H27.502c-4.142,0-7.5-3.357-7.5-7.5s3.358-7.5,7.5-7.5h320.005c4.142,0,7.5,3.357,7.5,7.5 C355.007,184.255,351.649,187.613,347.507,187.613z"></path><path style="fill:#ED5565;" d="M367.501,187.238H7.5c-4.142,0-7.5-3.357-7.5-7.5v-80c0-4.143,3.358-7.5,7.5-7.5h360.001 c4.142,0,7.5,3.357,7.5,7.5v80C375.001,183.88,371.643,187.238,367.501,187.238z"></path><path style="fill:#DA4453;" d="M20.001,187.238v172.524c0,4.143,3.358,7.5,7.5,7.5h0.001h320.005c4.142,0,7.5-3.357,7.5-7.5V187.238 H20.001z"></path><path style="fill:#CE3A50;" d="M325.004,187.238v172.524c0,4.143-3.358,7.5-7.5,7.5h30.003c4.142,0,7.5-3.357,7.5-7.5V187.238 H325.004z"></path><path style="fill:#DA4453;" d="M367.501,92.237h-30.003c4.142,0,7.5,3.357,7.5,7.5v80c0,4.143-3.358,7.5-7.5,7.5h30.003 c4.142,0,7.5-3.357,7.5-7.5v-80C375.001,95.595,371.643,92.237,367.501,92.237z"></path><rect x="147.5" y="187.609" style="fill:#F6BB42;" width="80" height="179.65"></rect><path style="fill:#FFCE54;" d="M187.501,52.237c-22.092,0-40.001,17.909-40.001,40v95h80.001v-95 C227.501,70.146,209.592,52.237,187.501,52.237z"></path><path style="fill:#F6BB42;" d="M180.113,52.93c-12.213-11.685-41.12-30.695-72.618-30.695c-49.826,0-56.769,32.278-57.436,70.003 h97.44C147.5,72.671,161.553,56.396,180.113,52.93z"></path><path style="fill:#E8AA3D;" d="M194.949,52.93c12.213-11.685,41.12-30.695,72.618-30.695c49.826,0,56.768,32.278,57.435,70.003 h-97.44C227.563,72.671,213.51,56.396,194.949,52.93z"></path><path style="fill:#CCD1D9;" d="M504.5,367.264c-24.35,0-41.568-15.755-56.759-29.654c-11.931-10.917-22.235-20.346-33.245-20.346 h-59.489v42.498c0,4.143-3.358,7.5-7.5,7.5H27.502h-0.001c-4.139,0-7.494-3.353-7.499-7.49v79.99v0.001c0,0.002,0,0.002,0,0.002 c0,4.144,3.358,7.501,7.5,7.501h139.607h187.785h99.604H479.5h25c4.142,0,7.5-3.357,7.5-7.5v-72.502H504.5z"></path><path style="fill:#656D78;" d="M404.498,489.764c-27.57,0-49.999-22.43-49.999-50c0-27.569,22.429-50,49.999-50 c27.571,0,50.001,22.431,50.001,50C454.499,467.334,432.069,489.764,404.498,489.764z"></path><path style="fill:#CCD1D9;" d="M404.498,459.764c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20 C424.498,450.792,415.526,459.764,404.498,459.764z"></path><path style="fill:#656D78;" d="M117.504,489.764c-27.57,0-49.999-22.43-49.999-50c0-27.569,22.429-50,49.999-50 c27.571,0,50.001,22.431,50.001,50C167.505,467.334,145.075,489.764,117.504,489.764z"></path><path style="fill:#CCD1D9;" d="M117.504,459.764c-11.028,0-20-8.972-20-20s8.972-20,20-20s20,8.972,20,20 C137.504,450.792,128.532,459.764,117.504,459.764z"></path><path style="fill:#AAB2BC;" d="M481.997,362.514v84.752H504.5c4.142,0,7.5-3.357,7.5-7.5v-72.502h-7.5 C496.245,367.264,488.811,365.449,481.997,362.514z"></path><g></g></svg>
                            free shipping
                        </div>
                    </div>
                    <div>
                        <div class="services-box">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 504.123 504.123" style="enable-background:new 0 0 504.123 504.123;" xml:space="preserve"> <path style="fill:#A86A3F;" d="M39.385,83h393.846c21.662,0,39.385,17.723,39.385,39.385v47.262 c0,21.662-17.723,39.385-39.385,39.385H39.385C17.723,209.03,0,191.307,0,169.646v-47.262C0,100.723,17.723,83,39.385,83z"></path> <path style="fill:#3DB39E;" d="M125.637,125.141l246.548-65.378c8.271-2.363,16.935,2.757,19.298,11.028l40.96,151.237 c2.363,8.271-2.757,16.935-11.028,19.298L100.431,326.79c-8.271,2.363-16.935-2.757-19.298-11.028L51.2,204.698L125.637,125.141z"></path> <path style="fill:#78CABB;" d="M389.514,217.301l-53.169,14.178c-4.332,1.182-8.665-1.182-9.452-5.514 c-1.182-4.332,1.182-8.665,5.514-9.452l45.686-12.209l-24.418-91.372l-45.686,12.209c-4.332,1.182-8.665-1.182-9.452-5.514 c-1.182-4.332,1.182-8.665,5.514-9.452l53.169-14.178c4.332-1.182,8.665,1.182,9.452,5.514l28.357,106.338 C396.209,212.181,393.846,216.513,389.514,217.301z M168.96,276.772l-53.169,14.178c-4.332,1.182-8.665-1.182-9.452-5.514 L77.982,179.098c-1.182-4.332,1.182-8.665,5.514-9.452l53.169-14.178c4.332-1.182,8.665,1.182,9.452,5.514 c1.182,4.332-1.182,8.665-5.514,9.452l-45.686,12.209l24.418,91.372l45.686-12.209c4.332-1.182,8.665,1.182,9.452,5.514 C175.655,271.258,173.292,275.59,168.96,276.772z"></path> <path style="fill:#5ABEAC;" d="M3.151,180.28C73.255,140.107,262.302,29.436,262.302,29.436c7.483-4.332,17.329-1.969,21.662,5.514 l78.769,135.483c4.332,7.483,1.575,16.935-5.908,21.268L68.529,357.116c-7.483,4.332-17.329,1.969-21.662-5.514 c0,0-22.055-44.898-44.111-82.708C2.757,180.28,3.151,209.424,3.151,180.28z"></path> <path style="fill:#8CD2C5;" d="M322.56,166.101L267.422,70.79c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569 c-3.938,2.363-5.12,7.089-2.757,10.634c2.363,3.938,7.089,5.12,10.634,2.757l40.96-23.631l47.262,81.92l-40.96,23.631 c-3.938,2.363-5.12,7.089-2.757,10.634c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569 C323.348,174.766,324.923,170.04,322.56,166.101z M113.822,277.56l-40.96,23.631L25.6,219.27l40.96-23.631 c3.938-2.363,5.12-7.089,2.757-10.634c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569c-3.938,2.363-5.12,7.089-2.757,10.634 l55.138,95.311c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569c3.938-2.363,5.12-7.089,2.757-10.634 C122.486,276.772,117.76,275.196,113.822,277.56z M133.908,138.532c-30.326,17.329-40.566,55.926-23.237,86.252 c17.723,30.326,55.926,40.566,86.252,23.237s40.566-55.926,23.237-86.252C202.437,131.836,164.234,121.203,133.908,138.532z M322.56,166.101L267.422,70.79c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569c-3.938,2.363-5.12,7.089-2.757,10.634 c2.363,3.938,7.089,5.12,10.634,2.757l40.96-23.631l47.262,81.92l-40.96,23.631c-3.938,2.363-5.12,7.089-2.757,10.634 c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569C323.348,174.766,324.923,170.04,322.56,166.101z M113.822,277.56l-40.96,23.631 L25.6,219.27l40.96-23.631c3.938-2.363,5.12-7.089,2.757-10.634c-2.363-3.938-7.089-5.12-10.634-2.757l-47.655,27.569 c-3.938,2.363-5.12,7.089-2.757,10.634l55.138,95.311c2.363,3.938,7.089,5.12,10.634,2.757l47.655-27.569 c3.938-2.363,5.12-7.089,2.757-10.634C122.486,276.772,117.76,275.196,113.822,277.56z M133.908,138.532 c-30.326,17.329-40.566,55.926-23.237,86.252c17.723,30.326,55.926,40.566,86.252,23.237s40.566-55.926,23.237-86.252 C202.437,131.836,164.234,121.203,133.908,138.532z"></path> <path style="fill:#C47E4D;" d="M448.985,476.846h-409.6C17.723,476.846,0,459.123,0,437.461V153.892h448.985 c21.662,0,39.385,17.723,39.385,39.385v244.185C488.369,459.123,470.646,476.846,448.985,476.846z M31.508,153.892H0v-31.508 C0,139.713,14.178,153.892,31.508,153.892z"></path> <path style="fill:#A86A3F;" d="M488.369,378.384h-63.015c-30.326,0-55.138-24.812-55.138-55.138s24.812-55.138,55.138-55.138h63.015 c8.665,0,15.754,7.089,15.754,15.754v78.769C504.123,371.295,497.034,378.384,488.369,378.384z"></path> <path style="fill:#EFC75E;" d="M425.354,291.738c17.329,0,31.508,14.178,31.508,31.508s-14.178,31.508-31.508,31.508 c-17.329,0-31.508-14.178-31.508-31.508S408.025,291.738,425.354,291.738z"></path> <path style="fill:#D7B354;" d="M433.231,346.876c-17.329,0-31.508-14.178-31.508-31.508c0-6.695,1.969-12.997,5.514-18.117 c-8.271,5.514-13.391,14.966-13.391,25.994c0,17.329,14.178,31.508,31.508,31.508c10.634,0,20.086-5.514,25.994-13.391 C446.228,344.907,439.926,346.876,433.231,346.876z"></path> <path style="fill:#B27245;" d="M448.985,461.092h-409.6C17.723,461.092,0,443.369,0,421.707v15.754 c0,21.662,17.723,39.385,39.385,39.385h409.6c21.662,0,39.385-17.723,39.385-39.385v-15.754 C488.369,443.369,470.646,461.092,448.985,461.092z"></path> <path style="fill:#CA8B5F;" d="M448.985,153.892H31.508C14.178,153.892,0,139.713,0,122.384v15.754 c0,17.329,14.178,31.508,31.508,31.508h417.477c21.662,0,39.385,17.723,39.385,39.385v-15.754 C488.369,171.615,470.646,153.892,448.985,153.892z"></path> </svg>
                            money return
                        </div>
                    </div>
                    <div>
                        <div class="services-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <polygon style="fill:#DE4C3C;" points="136.828,282.483 57.379,476.69 119.172,459.034 145.655,512 225.103,326.621 "></polygon> <polygon style="fill:#DE4C3C;" points="331.034,273.655 242.759,326.621 322.207,512 348.69,459.034 410.483,476.69 "></polygon> </g> <g> <polygon style="fill:#C74436;" points="136.828,282.483 107.608,353.898 109.109,354.339 128,412.954 188.204,400.066 192.088,403.597 225.103,326.621 "></polygon> <polygon style="fill:#C74436;" points="242.759,326.621 275.774,403.597 279.658,400.066 339.862,412.954 358.753,354.339 362.196,353.28 331.034,273.655 "></polygon> </g> <g> <polygon style="fill:#FDB62F;" points="233.931,0 279.658,41.313 339.862,28.337 358.753,87.04 417.368,105.931 404.48,166.135 445.793,211.862 404.48,257.589 417.368,317.793 358.753,336.684 339.862,395.299 279.658,382.411 233.931,423.724 188.204,382.411 128,395.299 109.109,336.684 50.406,317.793 63.382,257.589 22.069,211.862 63.382,166.135 50.406,105.931 109.109,87.04 128,28.337 188.204,41.313 "></polygon> <path style="fill:#FDB62F;" d="M454.621,70.621L454.621,70.621c-3.001-18.114-17.196-32.309-35.31-35.31l0,0 c18.114-3.001,32.309-17.196,35.31-35.31l0,0c3.001,18.114,17.196,32.309,35.31,35.31l0,0 C471.817,38.312,457.622,52.506,454.621,70.621z"></path> </g> <path style="fill:#FFA83D;" d="M445.793,211.862l-41.313-45.727l12.888-60.204L371.73,91.189 c-49.523,136.739-167.194,214.069-259.443,255.294L128,395.299l60.204-12.888l45.727,41.313l45.727-41.313l60.204,12.888 l18.891-58.615l58.615-18.891l-12.888-60.204L445.793,211.862z"></path> <g> <path style="fill:#FFFFFF;" d="M180.966,194.207c-19.5,0-35.31-15.81-35.31-35.31s15.81-35.31,35.31-35.31s35.31,15.81,35.31,35.31 S200.466,194.207,180.966,194.207z M180.966,141.241c-9.754,0-17.655,7.901-17.655,17.655c0,9.754,7.901,17.655,17.655,17.655 c9.754,0,17.655-7.901,17.655-17.655C198.621,149.142,190.72,141.241,180.966,141.241z"></path> <path style="fill:#FFFFFF;" d="M295.724,308.966c-19.5,0-35.31-15.81-35.31-35.31c0-19.5,15.81-35.31,35.31-35.31 c19.5,0,35.31,15.81,35.31,35.31C331.034,293.155,315.224,308.966,295.724,308.966z M295.724,256 c-9.754,0-17.655,7.901-17.655,17.655c0,9.754,7.901,17.655,17.655,17.655c9.754,0,17.655-7.901,17.655-17.655 C313.379,263.901,305.479,256,295.724,256z"></path> <rect x="146.502" y="203.052" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 549.1039 196.3124)" style="fill:#FFFFFF;" width="174.785" height="17.655"></rect> </g> </svg>
                            festivel discount
                        </div>
                    </div>
                    <div>
                        <div class="services-box">
                            <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m414.33 158.33v11.67h-30v-11.67c0-70.76-57.57-128.33-128.33-128.33s-128.33 57.57-128.33 128.33v11.67h-30v-11.67c0-87.3 71.02-158.33 158.33-158.33s158.33 71.03 158.33 158.33z" fill="#393e9f"></path><path d="m414.33 158.33v11.67h-30v-11.67c0-70.76-57.57-128.33-128.33-128.33v-30c87.31 0 158.33 71.03 158.33 158.33z" fill="#340d66"></path><path d="m175.287 248.594h-54.972c-13.767 0-24.928-11.161-24.928-24.928v-43.901c0-13.767 11.161-24.928 24.928-24.928h54.972z" fill="#fe4945"></path><path d="m334.711 248.594h56.974c13.767 0 24.928-11.161 24.928-24.928v-43.901c0-13.767-11.161-24.928-24.928-24.928h-56.974z" fill="#fa185e"></path><path d="m512 469.59v42.41h-103.29l-15-15-15 15h-245.42l-15-15-15 15h-103.29v-42.41c0-18.34 11.78-34.59 29.2-40.31l153.66-50.36h146.71v.14l153.23 50.22c17.42 5.72 29.2 21.97 29.2 40.31z" fill="#13cffe"></path><path d="m512 469.59v42.41h-103.29l-15-15-15 15h-122.71v-133.08h73.57v.14l153.23 50.22c17.42 5.72 29.2 21.97 29.2 40.31z" fill="#28abf9"></path><path d="m329.57 306.33v72.59s-37 36.57-73.57 36.57-73.14-36.57-73.14-36.57v-72.59z" fill="#ffb9ab"></path><path d="m329.57 306.33v72.59s-37 36.57-73.57 36.57v-109.16z" fill="#e39e8d"></path><path d="m350.72 152.72v31.48l-9.72 10.47h-170l-9.72-10.47v-31.48c0-26.16 10.6-49.84 27.74-66.98s40.82-27.74 66.98-27.74c52.31 0 94.72 42.41 94.72 94.72z" fill="#ffb81f"></path><path d="m350.72 152.72v31.48l-9.72 10.47h-85v-136.67c52.31 0 94.72 42.41 94.72 94.72z" fill="#fc9b28"></path><path d="m350.72 184.26v64.87c0 6.69-.61 13.22-1.78 19.54-.95 5.15-14.23 15-14.23 15s6.34 10.23 3.8 15c-16.25 30.62-47.11 51.29-82.51 51.29-26.16 0-49.84-11.28-66.98-29.53s-27.74-43.45-27.74-71.3v-64.87h50.52c17.01 0 32.52-6.46 44.2-17.06 13.26-12.04 21.59-29.41 21.59-48.72 0 36.33 29.45 65.78 65.78 65.78z" fill="#fccbc3"></path><path d="m350.72 184.26v64.87c0 6.69-.61 13.22-1.78 19.54-.95 5.15-14.23 15-14.23 15s6.34 10.23 3.8 15c-16.25 30.62-47.11 51.29-82.51 51.29v-182.76c13.26-12.04 21.59-29.41 21.59-48.72 0 36.33 29.45 65.78 65.78 65.78z" fill="#ffb9ab"></path><path d="m348.94 268.67c-1.97 10.71-5.54 20.8-10.43 30h-65.3v-30z" fill="#340d66"></path><path d="m103.286 466h30v46h-30z" fill="#28abf9"></path><path d="m378.714 466h30v46h-30z" fill="#318def"></path></g></svg>24*7 service
                        </div>
                    </div>
                    <div>
                        <div class="services-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#FF4F19;" d="M256,512l-5.445-2.117c-1.937-0.752-47.974-18.78-94.746-48.335 c-65.799-41.577-99.162-84.291-99.162-126.957V90.16h15.027c41.428,0,75.133-33.705,75.133-75.133V0h218.386v15.027 c0,41.428,33.705,75.133,75.133,75.133h15.027v244.433c0,42.665-33.363,85.38-99.162,126.956 c-46.772,29.554-92.808,47.582-94.746,48.335L256,512z"></path><path style="fill:#FF3200;" d="M440.326,90.16c-41.428,0-75.133-33.705-75.133-75.133V0H256v512l5.445-2.117 c1.937-0.752,47.974-18.78,94.746-48.335c65.799-41.577,99.162-84.291,99.162-126.956V90.16H440.326z"></path><path style="fill:#FFDB2D;" d="M256,449.234l-6.15-2.758c-1.408-0.632-34.901-15.745-68.908-38.831 c-48.575-32.974-73.205-65.276-73.205-96.008V139.865h15.027c25.778,0,46.75-20.95,46.75-46.701V78.138h172.972v15.027 c0,25.751,20.972,46.701,46.75,46.701h15.027v171.773c0,30.732-24.63,63.034-73.205,96.008 c-34.007,23.086-67.498,38.199-68.908,38.831L256,449.234z M249.85,419.055L249.85,419.055L249.85,419.055z"></path><path style="fill:#FF9A00;" d="M389.236,139.865c-25.778,0-46.75-20.95-46.75-46.701V78.138H256v371.096l6.15-2.758 c1.409-0.632,34.901-15.745,68.908-38.831c48.575-32.974,73.204-65.276,73.204-96.008V139.865H389.236z"></path><path style="fill:#B38A65;" d="M200.902,420.429c26.086,15.759,47.819,25.573,48.948,26.079l6.15,2.759l6.15-2.759 c1.129-0.507,22.861-10.32,48.948-26.079V278.966H200.902V420.429z"></path><path style="fill:#A17852;" d="M256,278.999v170.236l6.15-2.758c1.129-0.506,22.861-10.316,48.948-26.069V278.999H256z"></path><path style="fill:#9A4C00;" d="M304.238,309.052h-96.477l-49.811-76.847l49.811-76.846h31.058v54.477l17.179,14.183l17.179-14.183 v-54.477h31.06l49.811,76.846L304.238,309.052z"></path><polygon style="fill:#703700;" points="354.048,232.205 304.238,155.359 273.179,155.359 273.179,209.836 256,224.019 256,309.052 304.238,309.052 "></polygon><g></g></svg>
                            100% Secure Payment
                        </div>
                    </div>
                    <div>
                        <div class="services-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <path style="fill:#2196F3;" d="M509.88,408l-96.96-168.288c-2.208-3.808-5.888-6.56-10.144-7.584s-8.768-0.256-12.48,2.144 l-134.4,87.68c-7.104,4.672-9.344,14.048-5.12,21.408l92.8,160.64c2.88,4.992,8.192,8,13.856,8c0.672,0,1.408-0.032,2.08-0.128 c6.432-0.864,11.68-5.504,13.376-11.744l24.992-93.952l93.952,25.248c6.272,1.728,12.864-0.576,16.832-5.696 C512.632,420.64,513.08,413.632,509.88,408z"></path> <path style="fill:#2196F3;" d="M256.088,321.984l-134.4-87.68c-3.68-2.432-8.256-3.232-12.48-2.144 c-4.256,0.992-7.936,3.744-10.112,7.552L2.136,408c-3.232,5.632-2.752,12.64,1.184,17.76s10.56,7.424,16.832,5.696l93.952-25.248 l24.992,93.952c1.664,6.24,6.944,10.88,13.344,11.744c0.704,0.064,1.44,0.096,2.112,0.096c5.664,0,10.976-3.008,13.856-8 l92.8-160.64C265.464,336.032,263.224,326.624,256.088,321.984z"></path> </g> <circle style="fill:#FFC107;" cx="255.992" cy="176" r="176"></circle> <path style="fill:#FAFAFA;" d="M351.192,136.064c-1.728-5.152-5.92-9.056-11.136-10.432l-45.408-11.872l-24.896-41.92 c-5.76-9.728-21.76-9.728-27.488,0l-24.896,41.92l-45.408,11.872c-5.28,1.376-9.44,5.28-11.168,10.432s-0.704,10.784,2.688,15.04 l30.4,38.08l-3.296,49.76c-0.352,5.536,2.176,10.88,6.72,14.112c4.544,3.232,10.4,3.84,15.52,1.664l43.168-18.336l43.2,18.336 c1.984,0.864,4.128,1.28,6.24,1.28c3.296,0,6.496-0.992,9.248-2.944c4.576-3.232,7.104-8.576,6.72-14.112l-3.328-49.76l30.4-38.08 C351.864,146.848,352.888,141.216,351.192,136.064z"></path> <g></g> </svg>
                            Earn Rewards
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services end -->

<!--title start-->
<div class="title8 section-big-pt-space">
    <h4>new product</h4>
</div>
<!--title end-->

<!-- product tab start -->
<section class="section-big-mb-space ratio_square product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pr-0">
                <div class="product-slide-5 product-m no-arrow">

                    @foreach($products as $product)
                    <div>
                        <div class="product-box product-box2">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <a href="{{ route('product.details',['id'=>$product->id]) }}">
                                        <img src="{{asset($product->image)}}" class="img-fluid  " alt="product">
                                    </a>
                                </div>
                                <div class="product-back">
                                    <a href="{{ route('product.details',['id'=>$product->id]) }}">
                                        <img src="{{asset($product->image)}}" class="img-fluid  " alt="product">
                                    </a>
                                </div>
                                <div class="product-icon icon-inline">
                                    <button class="tooltip-top  add-cartnoty" data-tippy-content="Add to cart">
                                        <i data-feather="shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View">
                                        <i data-feather="eye"></i>
                                    </a>
                                    <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </div>
                                <div class="new-label1">
                                    <div>new</div>
                                </div>
                                <div class="on-sale1">
                                    on sale
                                </div>
                            </div>
                            <div class="product-detail product-detail2 ">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <a href="{{ route('product.details',['id'=>$product->id]) }}">
                                    <h3>{{ $product->name }}</h3>
                                </a>
                                @if($product->selling_price <= 0)
                                    <h5>
                                        {{ number_format( (round($product->regular_price)) ) }}
                                    </h5>
                                @else
                                    <h5>
                                        <b class="fw-bold ">&#2547;</b>{{ number_format( (round($product->selling_price)) ) }} Tk.
                                        <span class="fw-bold ">&#2547;</span><span>{{ number_format( (round($product->regular_price)) ) }} Tk.</span>
                                    </h5>
                                @endif

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->

<!--collection banner start-->
<section class="collection-banner section-py-space b-g-white">
    <div class="container-fluid">
        <div class="row collection-p2">
            @foreach($offers as $offer)
                @if($offer->offer_type == 2)
                    <div class="col-md-4">
                        <div class="collection-banner-main p-center text-center p-top banner-16 banner-style7">
                            <div class="collection-img">
                                <img src="{{asset($offer->image)}}" class="img-fluid bg-img  " alt="banner">
                            </div>
                            <div class="collection-banner-contain ">
                                <div>
                                    <h3>{{ $offer->name }}</h3>
                                    <h4>{{ $offer->percentage }}% discount</h4>
                                    <a href="{{route('product-offer', ['id' => $offer->id])}}" class="btn btn-rounded btn-xs"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<!--collection banner end-->

<!--title start-->
<div class="title8 section-big-pt-space">
    <h4>our category</h4>
</div>
<!--title end-->

<!-- category start -->
<section class="category4 section-big-pb-space">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pr-0">
                <div class="category-slide5two no-arrow">
                    @foreach($categories as $category)
                    <div>
                        <div class="category-box">
                            <div class="img-wrraper">
                                <a href="{{ route('product.category',$category->id) }}">
                                    <img src="{{asset($category->image)}}" style="height: 257px; width: 361px;" alt="category" class="img-fluid">
                                </a>
                            </div>
                            <div class="category-detail">
                                <a href="{{ route('product.category',$category->id) }}">
                                    <h2>{{ $category->name }}</h2>
                                </a>
                                @foreach($subcategories as $subcategory)
                                    @if($category->id == $subcategory->category_id)
                                        <ul>
                                            <li>
                                                <a href="{{ route('product.subCategory',$subcategory->id) }}">{{ $subcategory->name }}</a>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                                <a href="{{ route('product.category',$category->id) }}" class="btn btn-rounded btn-md btn-block">shop now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category end -->

<!--sale banner start-->

@if($offer->offer_type == 4)
<section class="sale-banenr banner-style2  section-big-mb-space">
    <img src="{{asset($offer->image)}}" class="img-fluid bg-img">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 position-relative">
                <div class="sale-banenr-contain text-center  p-right">
                    <div>
                        <h4 class=" p-2 text-warning bg-opacity-50">summer sale {{ $offer->percentage }}% off</h4>
                        <h2 class="text-bold text-warning">{{ $offer->name }}</h2>
                        <a href="{{route('product-offer', ['id' => $offer->id])}}" class="btn btn-rounded">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--sale banner ned-->

<!--title-start-->
<div class="title8 section-mb-space ">
    <h4>deal of the day</h4>
</div>
<!--title-end-->

<!-- hot deal start -->
<section class="hotdeal-second section-big-mb-space">
    <div class="container-fluid">
        <div class="row hotdeal-block2">
            <div class="col-12">
                <div class="hotdeal-slide3 no-arrow">
                    <div>
                        <div class="hotdeal-box">
                            <div class="img-wrapper">
                                <a href="product-page(left-sidebar).html">
                                    <img src="{{asset('/')}}website/assets/images/mega-store/hot-deal/1.jpg" alt="hot-deal" class="img-fluid bg-img">
                                </a>
                            </div>
                            <div class="hotdeal-contain">
                                <div>
                                    <a href="product-page(left-sidebar).html">
                                        <h3>smart phone</h3>
                                    </a>
                                    <h5>
                                        $60
                                        <span class="price">$80</span>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <div class="timer2">
                                        <p id="demo">
                                        </p>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="hotdeal-box">
                            <div class="img-wrapper">
                                <a href="product-page(left-sidebar).html">
                                    <img src="{{asset('/')}}website/assets/images/mega-store/hot-deal/2.jpg" alt="hot-deal" class="img-fluid bg-img">
                                </a>
                            </div>
                            <div class="hotdeal-contain">
                                <div>
                                    <a href="product-page(left-sidebar).html">
                                        <h3>perfums</h3>
                                    </a>
                                    <h5>
                                        $70
                                        <span class="price">$100</span>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <div class="timer2">
                                        <p id="demo1">
                                        </p>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="hotdeal-box">
                            <div class="img-wrapper">
                                <a href="product-page(left-sidebar).html">
                                    <img src="{{asset('/')}}website/assets/images/mega-store/hot-deal/3.jpg" alt="hot-deal" class="img-fluid bg-img">
                                </a>
                            </div>
                            <div class="hotdeal-contain">
                                <div>
                                    <a href="product-page(left-sidebar).html">
                                        <h3>smart watch</h3>
                                    </a>
                                    <h5>
                                        $90
                                        <span class="price">$110</span>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <div class="timer2">
                                        <p id="demo2">
                                        </p>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="hotdeal-box">
                            <div class="img-wrapper">
                                <a href="product-page(left-sidebar).html">
                                    <img src="{{asset('/')}}website/assets/images/mega-store/hot-deal/2.jpg" alt="hot-deal" class="img-fluid bg-img">
                                </a>
                            </div>
                            <div class="hotdeal-contain">
                                <div>
                                    <a href="product-page(left-sidebar).html">
                                        <h3>perfum</h3>
                                    </a>
                                    <h5>
                                        $70
                                        <span class="price">$100</span>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <div class="timer2">
                                        <p id="demo3">
                                        </p>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-solid btn-sm add-cartnoty">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hot deal start -->


<!--tab product-->
<!--tab product-->

<!-- product start -->
<!-- product end -->


<!--deal banner start-->
<section class="deal-banner ">
    <div class="custom-container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="deal-banner-containe">
                    <h2>
                        save up to  30% to 40% off
                    </h2>
                    <h1>
                        omg! just look at the great deals!
                    </h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 ">
                <div class="deal-banner-containe">
                    <div class="deal-btn">
                        <a href="category-page(left-sidebar).html" class="btn-white">
                            View more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--deal banner end-->


<!--discount banner start-->
<section class="discount-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="discount-banner-contain">
                    <h2>Discount on every single item on our site.</h2>
                    <h1><span>OMG! Just Look at the</span> <span>great Deals!</span></h1>
                    <div class="rounded-contain ">
                        <div class="rounded-subcontain">
                            How does it feel, when you see great discount deals for each product?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--discount banner end-->


<!--title-start-->
<div class="title8 section-big-my-space ">
    <h4>our happy clients</h4>
</div>
<!--title-end-->

<!--testimonial start-->
<section class="testimonial3 section-big-pb-space">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pr-0">
                <div class="testimonial-slide3 no-arrow">
                    <div>
                        <div class="testimonial-box">
                            <div class="testimonial-detail">
                                <h3>mark jecno</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                                <h6>designer</h6>
                            </div>
                            <div class="img-wrapper">
                                <img src="{{asset('/')}}website/assets/images/testimonial/1.jpg" alt="testimonial" class="img-fluid">
                            </div>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="testimonial-detail">
                                <h3>johan deo</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                                <h6>designer</h6>
                            </div>
                            <div class="img-wrapper">
                                <img src="{{asset('/')}}website/assets/images/testimonial/2.jpg" alt="testimonial" class="img-fluid">
                            </div>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="testimonial-detail">
                                <h3>elina folden</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                                <h6>designer</h6>
                            </div>
                            <div class="img-wrapper">
                                <img src="{{asset('/')}}website/assets/images/testimonial/4.jpg" alt="testimonial" class="img-fluid">
                            </div>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-box">
                            <div class="testimonial-detail">
                                <h3>elthan markote</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cum cumque cupiditate ea esse facilis fuga laudantium, nisi obcaecati perspiciatis quam quas quasi quis repudiandae suscipit temporibus vel vitae.</p>
                                <h6>designer</h6>
                            </div>
                            <div class="img-wrapper">
                                <img src="{{asset('/')}}website/assets/images/testimonial/3.jpg" alt="testimonial" class="img-fluid">
                            </div>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial end-->

<!--title-start-->
<div class="title8 section-mb-space ">
    <h4>featured brands</h4>
</div>
<!--title-end-->

<!-- brand start -->
<section class="brand-second section-big-mb-space">
    <div class="container-fluid">
        <div class="row brand-block">
            <div class="col-12">
                <div class="brand-slide12 no-arrow mb--5">
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/1.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/2.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/3.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/4.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/5.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/6.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/7.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/4.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/5.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/6.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/4.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/5.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <div class="brand-box">
                            <img src="{{asset('/')}}website/assets/images/mega-store/brand/6.png" alt="brand" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand start -->

@endsection
