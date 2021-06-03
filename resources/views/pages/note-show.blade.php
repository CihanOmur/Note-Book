@extends('../main.base')
@section('tittle', 'Anasayfa | Note')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@include('../main.mobile-menu')
@section('content')
        <div class="flex">
            @include('../main.sidebar')
            <!-- BEGIN: Content -->
            <div class="content">
            @include('../main.top-bar')
                <div class="intro-y news xl:w-3/5 p-5 box mt-8">
                    <!-- BEGIN: Blog Layout -->
                    <h2 class="intro-y font-medium text-xl sm:text-2xl">
                        {{ $Notes->note_title }}
                    </h2>
                    <div class="intro-y text-gray-700 dark:text-gray-600 mt-3 text-xs sm:text-sm">{{ $Notes->created_at }}  </div>
                    @if ($Notes->note_images !='')
                    <div class="intro-y mt-6">
                        <div class="news__preview image-fit ">
                            <img alt="{{ $Notes->note_images }} images" class="rounded-md" src="{{ asset('images/'.$Notes->note_images)}}">
                        </div>
                    </div>
                    @endif
                    <div class="intro-y text-justify leading-relaxed mt-12">
                        <p class="mb-5">{!! $Notes->note_content !!}</p>
                    </div>

                    <!-- END: Blog Layout -->
                </div>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-5">
                        <div class="dropdown">
                            @if ($Notes->status == '0') <a href="/design/{{$Notes->id}}" style="padding: 30% 100% ;" class="dropdown-toggle btn btn-primary shadow-md mt-5 flex items-center" > Düzenle  </a>
                            @elseif ($Notes->status =='1')<a href="/restore/{{$Notes->id}}" style="padding: 30% 100% ;" class="dropdown-toggle btn btn-primary shadow-md mt-5 flex items-center" > GeriYükle  </a>@endif
                        </div>
                    </div>
            </div>
            <!-- END: Content -->
        </div>
@endsection
@section("script")
        @include('../main.script')
@endsection
