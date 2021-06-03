@extends('../main.base')
@section('tittle', 'Add | Note')
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
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Change Note
                    </h2>
                    <form action="{{ Url('/design/'.$Notes->id.'/changed')}}" method="GET">
                    @csrf
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <div class="dropdown">
                            <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" > Save  </button>
                        </div>
                    </div>
                </div>
                <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
                    <!-- BEGIN: Post Content -->

                    <div class="intro-y col-span-12 lg:col-span-8">
                        <input type="text" name="title"  class="intro-y form-control py-3 px-4 box pr-10 placeholder-theme-13" value="{{$Notes->note_title}}">
                        <div class="post intro-y overflow-hidden box mt-5">
                            <div class="post__content tab-content">
                                <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                                    <textarea class="editor" name="content">{{$Notes->note_content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- END: Post Content -->
        </div>
@endsection
@section("script")
        @include('../main.script')
@endsection
