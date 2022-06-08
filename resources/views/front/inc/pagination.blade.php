{{-- <div class="pagination-list-box">
     <a href="#" class="prev"><i class="fa fa-chevron-left"></i> Prev Page </a>
    <ul class="pages-list">
        <li><a href="blog.html" class="active">1</a></li>
        <li><a href="blog.html">2</a></li>
    </ul>
    <a href="blog.html" class="next">Next Page <i class="fa fa-chevron-right"></i></a>
</div> --}}

<div class="pagination-list-box">
                                @if ($paginator->hasPages())
                                {{-- <nav> --}}
                                    {{-- <ul class="pagination"> --}}
                                        <!-- Previous Page Link -->
                                        @if ($paginator->onFirstPage())
                                            {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                                <span class="prev" aria-hidden="true">&lsaquo;</span>
                                            </li> --}}
                                            <a class="disabled" aria-disabled="true" rel="prev" aria-label="@lang('pagination.previous')" class="prev"><i class="fa fa-chevron-left"></i> Prev Page </a>
                                        @else

                                                {{--   <li>
                                               <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                            </li>--}}
                                            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="prev"><i class="fa fa-chevron-left"></i> Prev Page </a>
                                        @endif

                                        <!--Pagination Elements -->
                                        <ul class="pages-list">
                                        @foreach ($elements as $element)
                                            <!-- "Three Dots" Separator -->
                                            @if (is_string($element))
                                                {{-- <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li> --}}
                                            @endif

                                            <!-- Array Of Links -->
                                            @if (is_array($element))
                                                @foreach ($element as $page => $url)
                                                    @if ($page == $paginator->currentPage())

                                                        {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                                                        <li><a href="{{ $url }}" class="active">{{ $page }}</a></li>
                                                    @else

                                                        {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                        </ul>
                                        <!-- Next Page Link -->
                                        @if ($paginator->hasMorePages())
                                          {{--   <li>
                                                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                                            </li>--}}
                                            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="next">Next Page <i class="fa fa-chevron-right"></i></a>
                                        @else
                                            {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                                <span aria-hidden="true">&rsaquo;</span>
                                            </li> --}}
                                            <a class="disabled" aria-disabled="true" rel="next" aria-label="@lang('pagination.next')" class="next">Next Page <i class="fa fa-chevron-right"></i></a>
                                        @endif
                                    {{-- </ul> --}}
                                {{-- </nav> --}}

                            @endif
</div>
