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
                <div class="grid grid-cols-12 gap-6 mt-8">
                    <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
                        <h2 class="intro-y text-lg font-medium mr-auto mt-2">
                            Trash Manager
                        </h2>
                        @include('../main.inlinebar')
                    </div>
                    <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
                        <!-- BEGIN: File Manager Filter -->
                        <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                            <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700 dark:text-gray-300" data-feather="search"></i>
                                <input type="text" class="form-control w-full sm:w-64 box px-10 text-gray-700 dark:text-gray-300 placeholder-theme-13" id="search" placeholder="Search files">
                            </div>
                        </div>
                        <!-- END: File Manager Filter -->
                        <!-- BEGIN: Directory & Files -->
                        <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                        @foreach($Notes as $Key => $Note)
                            <div   class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-4">
                                <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in" style="background-color:#ccc;">
                                    <a href="show/{{ $Note->id}}" class="w-3/5 file__icon file__icon--file mx-auto">
                                    <div class="file__icon__file-name"> <span style="opacity: 50%;">Deleted</span></div></a>
                                    <a href="show/{{ $Note->id}}" class="block font-medium mt-4 text-center truncate">{{ $Note->note_title }}</a>
                                    <div class="text-gray-600 text-xs text-center mt-0.5">Notun Yazıldığı Tarih </div>
                                    <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                                <a href="delete/{{ $Note->id}}" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                                <a href="/restore/{{$Note->id}}" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-2"></i> Restrore </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <!-- END: Directory & Files -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
@endsection
@section("script")
        @include('../main.script')
@endsection
