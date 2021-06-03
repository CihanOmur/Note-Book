<!-- BEGIN: File Manager Menu -->
<div class="intro-y box p-5 mt-6">
                            <div class="mt-1">
                                <a href="{{ route('index')}}" class="flex items-center px-3 py-2 @if (URL::current()==URL::to('/')) {{'rounded-md bg-theme-1 text-white font-medium'}}  @endif"> <i class="w-4 h-4 mr-2" data-feather="file"></i> Notes </a>
                                <a href="{{ route('add_note')}}" class="flex items-center px-3 py-2 @if (URL::current()==URL::to('/add-note')) {{'rounded-md bg-theme-1 text-white font-medium'}}  @endif"> <i class="w-4 h-4 mr-2" data-feather="plus"></i> Add Note </a>
                                <a href="{{ route('trash')}}" class="flex items-center px-3 py-2 @if (URL::current()==URL::to('/trash')) {{'rounded-md bg-theme-1 text-white font-medium'}}  @endif"> <i class="w-4 h-4 mr-2" data-feather="trash"></i> Trash </a>
                            </div>
                        </div>
                        <!-- END: File Manager Menu -->
